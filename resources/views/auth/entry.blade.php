<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <x-jet-validation-errors class="mb-4" />
        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif
        <div class="flex mb-4 -mx-2 justify-center">
            <div class="w-1/2 px-4 font-medium text-sm text-green-600">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <x-jet-label value="{{ trans('global.login.content.email') }}" />
                        <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-jet-label value="{{ trans('global.login.content.password') }}" />
                        <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>
                    <div class="block mt-4">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ trans('global.login.content.remember_me') }}</span>
                        </label>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ trans('global.forgot_your_password.title') }}
                        </a>
                        @endif

                        <x-jet-button class="ml-4">
                            {{ trans('global.login.title') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
            <div class="w-1/2 px-4 font-medium text-sm text-green-600">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <x-jet-label value="{{ trans('global.register.content.name') }}" />
                        <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
                    <div class="mt-4">
                        <x-jet-label value="{{ trans('global.register.content.email') }}" />
                        <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>
                    <div class="mt-4">
                        <x-jet-label value="{{ trans('global.register.content.password') }}" />
                        <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>
                    <div class="mt-4">
                        <x-jet-label value="{{ trans('global.register.content.confirm_password') }}" />
                        <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ trans('global.register.content.already_registered') }}
                        </a>
                        <x-jet-button class="ml-4">
                            {{ trans('global.register.title') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>