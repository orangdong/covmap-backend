<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between py-4 px-2">
            <a href="{{route('dashboard')}}">
                <div class="flex flex-row items-center">
                    <img class="mr-3" height="50px" width="50px" src="{{asset('assets/img/logo.png')}}" alt="logo">
                    <p style="font-size: 18px" class="text-white font-bold">CovMap</p>
                </div>
            </a>
            
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Edit Profile') }}
            </h2>
        </div>
        
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            {{-- @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div> --}}

            {{-- @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif --}}
        </div>
    </div>
</x-app-layout>
