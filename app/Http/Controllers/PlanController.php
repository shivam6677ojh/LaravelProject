<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::with(['user', 'bookings'])
            ->latest()
            ->paginate(8);

        return view('plans.index', compact('plans'));
    }

    public function create()
    {
        return view('plans.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:120'],
            'description' => ['required', 'string', 'max:1000'],
            'duration' => ['required', 'integer', 'min:5', 'max:300'],
        ]);

        Plan::create([
            ...$validated,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('plans.index')->with('success', 'Yoga plan created successfully.');
    }

    public function show(Plan $plan)
    {
        return redirect()->route('plans.index');
    }

    public function edit(Plan $plan)
    {
        abort_if($plan->user_id !== Auth::id(), 403);

        return view('plans.edit', compact('plan'));
    }

    public function update(Request $request, Plan $plan)
    {
        abort_if($plan->user_id !== Auth::id(), 403);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:120'],
            'description' => ['required', 'string', 'max:1000'],
            'duration' => ['required', 'integer', 'min:5', 'max:300'],
        ]);

        $plan->update($validated);

        return redirect()->route('plans.index')->with('success', 'Yoga plan updated successfully.');
    }

    public function destroy(Plan $plan)
    {
        abort_if($plan->user_id !== Auth::id(), 403);

        $plan->delete();

        return redirect()->route('plans.index')->with('success', 'Yoga plan deleted successfully.');
    }
}
