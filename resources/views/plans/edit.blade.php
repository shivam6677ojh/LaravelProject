<x-app-layout>
    <x-slot name="header">
        <h2 class="section-title">✏️ Edit Yoga Plan</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card p-8 hover-lift">
                <div class="mb-6">
                    <p class="text-slate-600">📝 Update your yoga plan details to keep your offerings fresh and engaging.</p>
                </div>
                <form method="POST" action="{{ route('plans.update', $plan) }}">
                    @method('PUT')
                    @php($buttonText = 'Update Plan')
                    @include('plans._form')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
