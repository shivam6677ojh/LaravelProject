<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-slate-900 leading-tight">Yoga Plans</h2>
            <a href="{{ route('plans.create') }}" class="rounded-xl bg-slate-900 px-4 py-2 text-white text-sm font-semibold hover:bg-slate-700">
                + Create Plan
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700">
                    {{ session('success') }}
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">
                @forelse ($plans as $plan)
                    <div class="glass-card p-5 flex flex-col">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900">{{ $plan->title }}</h3>
                                <p class="text-xs text-slate-500 mt-1">By {{ $plan->user->name }}</p>
                            </div>
                            <span class="rounded-full bg-sky-100 text-sky-700 text-xs px-2 py-1">{{ $plan->duration }} min</span>
                        </div>

                        <p class="mt-4 text-sm text-slate-600 flex-grow">{{ $plan->description }}</p>

                        <p class="mt-3 text-xs text-slate-500">Bookings: {{ $plan->bookings->count() }}</p>

                        <div class="mt-4 flex items-center gap-2">
                            @if ($plan->user_id === auth()->id())
                                <a href="{{ route('plans.edit', $plan) }}" class="rounded-lg border border-slate-300 px-3 py-2 text-xs font-medium text-slate-700 hover:bg-slate-100">Edit</a>

                                <form method="POST" action="{{ route('plans.destroy', $plan) }}" onsubmit="return confirm('Delete this plan?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded-lg border border-rose-300 px-3 py-2 text-xs font-medium text-rose-700 hover:bg-rose-50">Delete</button>
                                </form>
                            @else
                                <form method="POST" action="{{ route('plans.book', $plan) }}">
                                    @csrf
                                    <button type="submit" class="rounded-lg bg-emerald-600 px-3 py-2 text-xs font-semibold text-white hover:bg-emerald-500">Book Plan</button>
                                </form>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="md:col-span-2 xl:col-span-3 glass-card p-6 text-slate-500">
                        No plans available yet. Start by creating one.
                    </div>
                @endforelse
            </div>

            <div class="mt-6">
                {{ $plans->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
