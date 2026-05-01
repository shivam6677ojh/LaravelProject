@csrf

<div class="space-y-5">
    <div>
        <x-input-label for="title" :value="__('Title')" />
        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $plan->title ?? '')" required autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('title')" />
    </div>

    <div>
        <x-input-label for="description" :value="__('Description')" />
        <textarea id="description" name="description" rows="4" class="mt-1 block w-full rounded-xl border-slate-300 focus:border-slate-500 focus:ring-slate-500" required>{{ old('description', $plan->description ?? '') }}</textarea>
        <x-input-error class="mt-2" :messages="$errors->get('description')" />
    </div>

    <div>
        <x-input-label for="duration" :value="__('Duration (minutes)')" />
        <x-text-input id="duration" name="duration" type="number" min="5" max="300" class="mt-1 block w-full" :value="old('duration', $plan->duration ?? 30)" required />
        <x-input-error class="mt-2" :messages="$errors->get('duration')" />
    </div>

    <div class="flex items-center gap-3">
        <x-primary-button>{{ $buttonText }}</x-primary-button>
        <a href="{{ route('plans.index') }}" class="text-sm font-medium text-slate-600 hover:text-slate-900">Cancel</a>
    </div>
</div>
