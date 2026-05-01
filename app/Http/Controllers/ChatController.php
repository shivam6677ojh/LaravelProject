<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ChatController extends Controller
{
    public function index()
    {
        $chats = Chat::where('user_id', Auth::id())
            ->latest()
            ->take(20)
            ->get()
            ->reverse()
            ->values();

        return view('chatbot.index', compact('chats'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => ['required', 'string', 'max:500'],
        ]);

        $response = $this->buildResponse($validated['message']);

        Chat::create([
            'user_id' => Auth::id(),
            'message' => $validated['message'],
            'response' => $response,
        ]);

        return redirect()->route('chatbot.index');
    }

    private function buildResponse(string $message): string
    {
        $normalized = Str::lower($message);

        if (Str::contains($normalized, ['beginner', 'start', 'new'])) {
            return 'Start with 15-20 minute gentle flow sessions, 3 times a week, and focus on breathing.';
        }

        if (Str::contains($normalized, ['back pain', 'stress', 'anxiety'])) {
            return 'Try restorative poses like Child\'s Pose, Cat-Cow, and Legs-Up-the-Wall for 10-15 minutes.';
        }

        if (Str::contains($normalized, ['weight', 'fat', 'calorie'])) {
            return 'Power yoga and vinyasa 4 times a week can help. Combine with hydration and balanced meals.';
        }

        if (Str::contains($normalized, ['time', 'schedule', 'routine'])) {
            return 'A practical routine is: Mon/Wed/Fri 25 min flow, Tue/Thu 10 min stretching, weekend recovery.';
        }

        return 'Great question. Keep your sessions consistent, increase duration gradually, and listen to your body.';
    }
}
