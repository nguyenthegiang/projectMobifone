<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Phone -->
            <div>
                <x-label for="phone" :value="__('Phone')" />

                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- Type -->
            <div>
                <x-label for="type" :value="__('Type')" />

                <x-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('type')" required autofocus />
            </div>

            <!-- Province -->
            <div>
                <x-label for="province" :value="__('Province')" />

                <x-input id="province" class="block mt-1 w-full" type="text" name="province" :value="old('province')" required autofocus />
            </div>

            <!-- District -->
            <div>
                <x-label for="district" :value="__('District')" />

                <x-input id="district" class="block mt-1 w-full" type="text" name="district" :value="old('district')" required autofocus />
            </div>

            <!-- Ward -->
            <div>
                <x-label for="ward" :value="__('Ward')" />

                <x-input id="ward" class="block mt-1 w-full" type="text" name="ward" :value="old('ward')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
