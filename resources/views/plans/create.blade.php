<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-slate-900 leading-tight">Create Yoga Plan</h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card p-6">
                <form method="POST" action="{{ route('plans.store') }}">
                    @php($buttonText = 'Save Plan')
                    @include('plans._form')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
