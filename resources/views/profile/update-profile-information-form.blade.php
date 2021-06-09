<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        <p class="text-white">
            {{ __('Profile Information') }}
        </p>
    </x-slot>

    <x-slot name="description">
        <p style="color: #999999;">
            {{ __('Update your account\'s profile information and email address.') }}
        </p>
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
        {{-- address --}}
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="address" value="{{ __('Address') }}" />
            <textarea class="border-gray-300 mt-1 block w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="address" id="address" rows="5" wire:model.defer="state.address"></textarea>
            <x-jet-input-error for="address" class="mt-2" />
        </div>
        {{-- Provinsi --}}
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="provinsi" value="{{ __('Provinsi') }}" />
            <x-jet-input id="provinsi" type="text" class="mt-1 block w-full" wire:model.defer="state.provinsi" />
            <x-jet-input-error for="provinsi" class="mt-2" />
        </div>
        {{-- Kota --}}
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="kota" value="{{ __('Kota') }}" />
            <x-jet-input id="kota" type="text" class="mt-1 block w-full" wire:model.defer="state.kota" />
            <x-jet-input-error for="kota" class="mt-2" />
        </div>
        {{-- Kecamatan --}}
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="kecamatan" value="{{ __('Kecamatan') }}" />
            <x-jet-input id="kecamatan" type="text" class="mt-1 block w-full" wire:model.defer="state.kecamatan" />
            <x-jet-input-error for="kecamatan" class="mt-2" />
        </div>
        {{-- Kelurahan --}}
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="kelurahan" value="{{ __('Kelurahan') }}" />
            <x-jet-input id="kelurahan" type="text" class="mt-1 block w-full" wire:model.defer="state.kelurahan" />
            <x-jet-input-error for="kelurahan" class="mt-2" />
        </div>
        {{-- height/weight --}}
        <div class="col-span-6 sm:col-span-4">
            <div class="flex flex-row justify-between align-center">
                <div class="berat">
                    <x-jet-label for="height" value="{{ __('Height') }}" />
                    <x-jet-input id="height" type="text" class="mt-1 block w-full" wire:model.defer="state.height" />
                    <x-jet-input-error for="height" class="mt-2" />
                </div>
                <div class="tinggi">
                    <x-jet-label for="weight" value="{{ __('Weight') }}" />
                    <x-jet-input id="weight" type="text" class="mt-1 block w-full" wire:model.defer="state.weight" />
                    <x-jet-input-error for="weight" class="mt-2" />
                </div>
            </div> 
        </div>
        {{-- place of birth/dateofbirth --}}
        <div class="col-span-6 sm:col-span-4">
            <div class="flex flex-row justify-between align-center">
                <div class="berat">
                    <x-jet-label for="place_birth" value="{{ __('Tempat Lahir') }}" />
                    <x-jet-input id="place_birth" type="text" class="mt-1 block w-full" wire:model.defer="state.place_birth" />
                    <x-jet-input-error for="place_birth" class="mt-2" />
                </div>
                <div class="tinggi">
                    <x-jet-label for="date_birth" value="{{ __('Tanggal Lahir') }}" />
                    <x-jet-input id="date_birth" type="date" class="mt-1 block w-full" wire:model.defer="state.date_birth" />
                    <x-jet-input-error for="date_birth" class="mt-2" />
                </div>
            </div> 
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
