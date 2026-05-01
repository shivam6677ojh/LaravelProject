<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Chat;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();

        $totalPlans = Plan::where('user_id', $user->id)->count();
        $totalBookings = Booking::where('user_id', $user->id)->count();
        $totalChats = Chat::where('user_id', $user->id)->count();

        $recentActivity = Booking::with('plan')
            ->where('user_id', $user->id)
            ->latest('booked_at')
            ->latest('created_at')
            ->take(6)
            ->get();

        return view('dashboard', compact('totalPlans', 'totalBookings', 'totalChats', 'recentActivity'));
    }
}
