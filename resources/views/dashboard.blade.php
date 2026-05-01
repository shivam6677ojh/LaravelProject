<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-slate-900 leading-tight">
                {{ __('YogaPlanner Dashboard') }}
            </h2>
            <a href="{{ route('plans.create') }}" class="rounded-xl bg-slate-900 px-4 py-2 text-white text-sm font-semibold hover:bg-slate-700">
                + New Plan
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="glass-card p-5">
                    <p class="text-sm text-slate-500">Total Plans</p>
                    <p class="mt-1 text-3xl font-bold text-slate-900">{{ $totalPlans }}</p>
                </div>
                <div class="glass-card p-5">
                    <p class="text-sm text-slate-500">My Bookings</p>
                    <p class="mt-1 text-3xl font-bold text-slate-900">{{ $totalBookings }}</p>
                </div>
                <div class="glass-card p-5">
                    <p class="text-sm text-slate-500">Chat Activity</p>
                    <p class="mt-1 text-3xl font-bold text-slate-900">{{ $totalChats }}</p>
                </div>
            </div>

            <div class="glass-card p-6">
                <h3 class="text-lg font-semibold text-slate-900">Recent Activity</h3>
                <div class="mt-4 space-y-3">
                    @forelse ($recentActivity as $activity)
                        <div class="rounded-xl border border-slate-200 px-4 py-3 flex items-center justify-between">
                            <div>
                                <p class="font-medium text-slate-800">Booked: {{ $activity->plan?->title ?? 'Yoga Plan' }}</p>
                                <p class="text-xs text-slate-500">{{ optional($activity->booked_at ?? $activity->created_at)->diffForHumans() }}</p>
                            </div>
                            <span class="text-xs rounded-full px-2 py-1 bg-emerald-100 text-emerald-700 uppercase">
                                {{ $activity->status }}
                            </span>
                        </div>
                    @empty
                        <p class="text-slate-500">No recent booking activity yet.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
