<?php

namespace App\Http\Controllers;

use App\Mail\PlanBookedMail;
use App\Models\Booking;
use App\Models\Plan;
use App\Services\TwilioService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function store(Request $request, Plan $plan, TwilioService $twilioService)
    {
        $booking = Booking::firstOrCreate(
            [
                'user_id' => Auth::id(),
                'plan_id' => $plan->id,
            ],
            [
                'status' => 'confirmed',
                'booked_at' => now(),
            ]
        );

        Mail::to(Auth::user()->email)->send(new PlanBookedMail($booking));

        $smsTarget = Auth::user()->phone_number ?: config('services.twilio.default_to');
        if ($smsTarget) {
            $twilioService->send(
                $smsTarget,
                "Your booking for '{$plan->title}' is confirmed. Duration: {$plan->duration} minutes."
            );
        }

        return redirect()->route('plans.index')->with('success', 'Plan booked successfully.');
    }
}
