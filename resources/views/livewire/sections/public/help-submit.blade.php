<div>
    <form wire:submit="submitHelpRequest">

        <h3 class="my-3 text-lg text-center text-bold text-[#FF2D20]">Report a Poisoning Incident</h3>
        <!-- First Name -->
        <div>
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input wire:model="first_name" id="first_name" class="block w-full mt-1" placeholder="Poison" type="text" name="first_name" required autofocus autocomplete="first_name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <!-- Last Name -->
        <div class="mt-4">
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input wire:model="last_name" id="last_name" class="block w-full mt-1" placeholder="Dela Cruz" type="text" name="last_name" required autocomplete="last_name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block w-full mt-1" placeholder="juandelacruz@gmail.com" type="email" name="email" autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Current Location -->
        {{-- <div class="mt-4">
            <x-input-label for="current_location" :value="__('Current Location')" />
            <x-text-input wire:model="current_location" id="current_location" class="block w-full mt-1" type="text" name="current_location" required autocomplete="current_location" />
            <x-input-error :messages="$errors->get('current_location')" class="mt-2" />
        </div> --}}
        <div class="mt-4">
            <x-input-label for="current_location" :value="__('Current Location')" />
            <x-text-input wire:model="current_location" id="current_location" class="block w-full mt-1" placeholder="Current Location" type="text" name="current_location" required autocomplete="current_location" />
            <x-input-error :messages="$errors->get('current_location')" class="mt-2" />
            <button type="button" id="location-button" class="px-4 py-2 mt-2 text-white bg-blue-500 rounded">
                {{ __('Use My Current Location') }}
            </button>
        </div>

        <!-- Birthday -->
        <div class="mt-4">
            <x-input-label for="birthday" :value="__('Birthday (YYYY-MM-DD)')" />
            <x-text-input wire:model="birthday" id="birthday" class="block w-full mt-1" type="date" name="birthday" required autocomplete="birthday" />
            <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div class="mt-4">
            <x-input-label for="phone_number" :value="__('Phone Number')" />
            <x-text-input wire:model="phone_number" id="phone_number" class="block w-full mt-1" type="text" name="phone_number" required autocomplete="phone_number" />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        <!-- Nearest Medical Center -->
        <div class="mt-4">
            <x-input-label for="nearest_center" :value="__('Nearest Medical Center')" />
            <select wire:model="nearest_center" id="nearest_center" class="block w-full mt-1" name="nearest_center" required>
                <option value="">Select a center</option>
                <option value="WVSU Medical Center">WVSU Medical Center</option>
                <option value="Kulas Group">Kulas Group</option>
                <option value="Olson Inc">Olson Inc</option>
                <option value="Dach Inc">Dach Inc</option>
            </select>
            <x-input-error :messages="$errors->get('nearest_center')" class="mt-2" />
        </div>
        {{-- <div class="mt-4">
            <x-input-label for="nearest_center" :value="__('Nearest Medical Center')" />
            <select wire:model="nearest_center" id="nearest_center" class="block w-full mt-1" name="nearest_center" required>
                <option value="">Select a center</option>
                @foreach($hospitals as $hospital)
                    <option value="{{ $hospital['name'] }}">{{ $hospital['name'] }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('nearest_center')" class="mt-2" />
        </div> --}}

        <!-- Immediate Help Checkbox -->
        <div class="flex items-center mt-4">
            <x-input-label for="immediate_help" :value="__('Need immediate help?')" />
            <input wire:model="immediate_help" id="immediate_help" type="checkbox" name="immediate_help" class="ml-2" />
            <x-input-error :messages="$errors->get('immediate_help')" class="mt-2" />
        </div>

        <!-- Additional Information -->
        <div class="mt-4">
            <x-input-label for="additional_info" :value="__('Additional Information')" />
            <textarea wire:model="additional_info" id="additional_info" class="block w-full mt-1" name="additional_info" required></textarea>
            <x-input-error :messages="$errors->get('additional_info')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
</div>
