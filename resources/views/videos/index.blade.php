<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-slate-900 leading-tight">Yoga Video Library</h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-5">
            <div class="glass-card p-5">
                <form method="GET" action="{{ route('videos.index') }}" class="flex flex-col sm:flex-row gap-3">
                    <input type="text" name="q" value="{{ $query }}" class="flex-1 rounded-xl border-slate-300 focus:border-slate-500 focus:ring-slate-500" placeholder="Search yoga videos">
                    <button class="rounded-xl bg-slate-900 px-4 py-2 text-white text-sm font-semibold hover:bg-slate-700">Search</button>
                </form>
                @if ($error)
                    <p class="mt-3 text-sm text-amber-600">{{ $error }}</p>
                @endif
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">
                @forelse ($videos as $video)
                    <a href="https://www.youtube.com/watch?v={{ $video['id'] }}" target="_blank" class="glass-card overflow-hidden hover:shadow-md transition">
                        <img src="{{ $video['thumbnail'] }}" alt="{{ $video['title'] }}" class="w-full h-44 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-slate-900 line-clamp-2">{{ $video['title'] }}</h3>
                            <p class="mt-1 text-xs text-slate-500">{{ $video['channel'] }}</p>
                            <p class="mt-2 text-sm text-slate-600 line-clamp-2">{{ $video['description'] }}</p>
                        </div>
                    </a>
                @empty
                    <div class="md:col-span-2 xl:col-span-3 glass-card p-6 text-slate-500">
                        No videos found for this search query.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
