<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="section-title">🌅 Yoga Plans</h2>
            <a href="{{ route('plans.create') }}" class="btn btn-primary">
                ✨ Create Plan
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-6 rounded-xl border-2 border-sage-300 bg-sage-50 px-6 py-4 text-sage-700 font-medium shadow-md">
                    ✅ {{ session('success') }}
                </div>
            @endif

            <div class="grid-card">
                @forelse ($plans as $plan)
                    <div class="glass-card p-6 flex flex-col hover-lift group">
                        <!-- Header -->
                        <div class="flex items-start justify-between gap-4 mb-4">
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gradient-yoga group-hover:text-yoga-600 transition-all">
                                    {{ $plan->title }}
                                </h3>
                                <p class="text-sm text-slate-500 mt-2">👤 By <span class="font-medium text-slate-700">{{ $plan->user->name }}</span></p>
                            </div>
                            <span class="badge badge-yoga shrink-0">⏱️ {{ $plan->duration }} min</span>
                        </div>

                        <!-- Description -->
                        <p class="text-sm text-slate-600 flex-grow mb-4 leading-relaxed">{{ Str::limit($plan->description, 120) }}</p>

                        <!-- Stats -->
                        <div class="mb-4 flex items-center gap-2 text-xs text-slate-500">
                            <span class="inline-block w-2 h-2 rounded-full bg-sage-400"></span>
                            <span>📊 <strong>{{ $plan->bookings->count() }}</strong> bookings</span>
                        </div>

                        <!-- Divider -->
                        <div class="divider my-4"></div>

                        <!-- Actions -->
                        <div class="mt-auto flex items-center gap-2">
                            @if ($plan->user_id === auth()->id())
                                <a href="{{ route('plans.edit', $plan) }}" class="btn btn-outline btn-sm flex-1">
                                    ✏️ Edit
                                </a>

                                <form method="POST" action="{{ route('plans.destroy', $plan) }}" class="flex-1" onsubmit="return confirm('Delete this plan?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm w-full bg-rose-500 text-white hover:bg-rose-600">
                                        🗑️ Delete
                                    </button>
                                </form>
                            @else
                                <form method="POST" action="{{ route('plans.book', $plan) }}" class="w-full">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-sm w-full">
                                        📌 Book Plan
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="md:col-span-2 lg:col-span-3">
                        <div class="card-primary p-8 text-center">
                            <p class="text-2xl mb-3">🧘‍♀️</p>
                            <p class="text-lg font-semibold text-yoga-900">No plans available yet</p>
                            <p class="text-slate-700 mt-2">Start by creating a new yoga plan!</p>
                            <a href="{{ route('plans.create') }}" class="btn btn-primary mt-4">
                                ✨ Create Your First Plan
                            </a>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-8">
                {{ $plans->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
