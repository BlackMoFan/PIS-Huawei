<div>
    <input
        type="text"
        wire:model.debounce.500ms="location"
        placeholder="Enter your location"
        class="p-2 border rounded"
    />
    <button
        wire:click="searchHospitals"
        class="ml-2 p-2 bg-blue-500 text-white rounded"
    >
        Search Hospitals
    </button>

    <div class="mt-4">
        <x-input-label for="nearest_center" :value="__('Nearest Medical Center')" />
        <select wire:model="nearest_center" id="nearest_center" class="block w-full mt-1" name="nearest_center" required>
            <option value="">Select a center</option>
            @foreach($hospitals as $hospital)
                <option value="{{ $hospital['name'] }}">{{ $hospital['name'] }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('nearest_center')" class="mt-2" />
    </div>
</div>
