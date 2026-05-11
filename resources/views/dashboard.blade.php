<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="section-title">
                {{ __('YogaPlanner Dashboard') }}
            </h2>
            <a href="{{ route('plans.create') }}" class="btn btn-primary">
                + New Plan
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <!-- Stats Cards -->
            <div class="grid-card">
                <div class="glass-card p-6 hover-lift">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-600">Total Plans</p>
                            <p class="mt-2 text-4xl font-bold text-gradient-yoga">{{ $totalPlans }}</p>
                        </div>
                        <div class="text-5xl opacity-10">🧘</div>
                    </div>
                </div>
                <div class="glass-card p-6 hover-lift">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-600">My Bookings</p>
                            <p class="mt-2 text-4xl font-bold text-gradient-cool">{{ $totalBookings }}</p>
                        </div>
                        <div class="text-5xl opacity-10">📅</div>
                    </div>
                </div>
                <div class="glass-card p-6 hover-lift">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-600">Chat Activity</p>
                            <p class="mt-2 text-4xl font-bold text-gradient-yoga">{{ $totalChats }}</p>
                        </div>
                        <div class="text-5xl opacity-10">💬</div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Section -->
            <div class="glass-card p-8">
                <div class="section-header">
                    <h3 class="text-2xl font-bold text-gradient-yoga">Recent Activity</h3>
                </div>
                <div class="space-y-3">
                    @forelse ($recentActivity as $activity)
                        <div class="flex items-center justify-between p-4 rounded-xl border-2 border-slate-100 hover:border-yoga-200 hover:bg-yoga-50/30 transition-all duration-300 group">
                            <div class="flex-1">
                                <p class="font-semibold text-slate-800 group-hover:text-yoga-600 transition-colors">
                                    📍 Booked: {{ $activity->plan?->title ?? 'Yoga Plan' }}
                                </p>
                                <p class="text-xs text-slate-500 mt-1">{{ optional($activity->booked_at ?? $activity->created_at)->diffForHumans() }}</p>
                            </div>
                            <span class="badge badge-sage">
                                {{ $activity->status }}
                            </span>
                        </div>
                    @empty
                        <div class="text-center py-8">
                            <p class="text-slate-500 text-lg">No recent booking activity yet.</p>
                            <p class="text-slate-400 text-sm mt-2">Start exploring plans to get started! 🌟</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card-primary p-8">
                <h3 class="text-xl font-bold text-yoga-900 mb-4">Quick Actions</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <a href="{{ route('plans.index') }}" class="btn btn-secondary w-full">
                        🌅 Browse All Plans
                    </a>
                    <a href="{{ route('dashboard') }}" class="btn btn-sage w-full">
                        💬 Start Chat Session
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
