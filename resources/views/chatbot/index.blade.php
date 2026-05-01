<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-slate-900 leading-tight">Yoga Chatbot</h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-5">
            <div class="glass-card p-5">
                <form method="POST" action="{{ route('chatbot.store') }}" class="space-y-3">
                    @csrf
                    <label for="message" class="block text-sm font-medium text-slate-700">Ask anything about your yoga routine</label>
                    <textarea id="message" name="message" rows="3" class="w-full rounded-xl border-slate-300 focus:border-slate-500 focus:ring-slate-500" placeholder="Example: I am a beginner with back pain, suggest a routine">{{ old('message') }}</textarea>
                    <x-input-error :messages="$errors->get('message')" />
                    <button type="submit" class="rounded-xl bg-slate-900 px-4 py-2 text-white text-sm font-semibold hover:bg-slate-700">Send</button>
                </form>
            </div>

            <div class="space-y-3">
                @forelse ($chats as $chat)
                    <div class="glass-card p-4">
                        <p class="text-xs uppercase tracking-wide text-slate-500">You</p>
                        <p class="text-slate-900 mt-1">{{ $chat->message }}</p>

                        <p class="text-xs uppercase tracking-wide text-slate-500 mt-4">YogaBot</p>
                        <p class="text-emerald-700 mt-1">{{ $chat->response }}</p>
                    </div>
                @empty
                    <div class="glass-card p-5 text-slate-500">No chat history yet. Start your first conversation.</div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
