@csrf

<div class="space-y-6">
    <!-- Title Input -->
    <div>
        <x-input-label for="title" :value="__('Plan Title')" class="font-semibold text-slate-800" />
        <x-text-input 
            id="title" 
            name="title" 
            type="text" 
            class="input mt-2"
            placeholder="E.g., Morning Flow Yoga"
            :value="old('title', $plan->title ?? '')" 
            required 
            autofocus 
        />
        <x-input-error class="mt-2 text-rose-500 text-sm" :messages="$errors->get('title')" />
    </div>

    <!-- Description Input -->
    <div>
        <x-input-label for="description" :value="__('Description')" class="font-semibold text-slate-800" />
        <textarea 
            id="description" 
            name="description" 
            rows="4" 
            class="textarea mt-2"
            placeholder="Describe your yoga plan, objectives, and benefits..."
            required
        >{{ old('description', $plan->description ?? '') }}</textarea>
        <x-input-error class="mt-2 text-rose-500 text-sm" :messages="$errors->get('description')" />
    </div>

    <!-- Duration Input -->
    <div>
        <x-input-label for="duration" :value="__('Duration (minutes)')" class="font-semibold text-slate-800" />
        <x-text-input 
            id="duration" 
            name="duration" 
            type="number" 
            min="5" 
            max="300" 
            class="input mt-2"
            placeholder="30"
            :value="old('duration', $plan->duration ?? 30)" 
            required 
        />
        <p class="text-xs text-slate-500 mt-1">⏱️ Recommended: 15-60 minutes</p>
        <x-input-error class="mt-2 text-rose-500 text-sm" :messages="$errors->get('duration')" />
    </div>

    <!-- Actions -->
    <div class="divider my-6"></div>
    <div class="flex items-center gap-3 pt-4">
        <x-primary-button class="btn btn-primary">
            ✅ {{ $buttonText }}
        </x-primary-button>
        <a href="{{ route('plans.index') }}" class="btn btn-outline">
            ← Cancel
        </a>
    </div>
</div>
