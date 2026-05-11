<x-app-layout>
    <x-slot name="header">
        <h2 class="section-title">✨ Create Your Yoga Plan</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card p-8 hover-lift">
                <div class="mb-6">
                    <p class="text-slate-600">🧘 Share your yoga expertise and create engaging plans for others to discover and book.</p>
                </div>
                <form method="POST" action="{{ route('plans.store') }}">
                    @php($buttonText = 'Create Plan')
                    @include('plans._form')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
