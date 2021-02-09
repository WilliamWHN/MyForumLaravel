@extends ('layout')

@section ('content')
    <div class="w-full h-full flex justify-center pt-20">
            <div class="w-1/3">
                <form class="text-center border border-light p-5" method="POST" action="{{ route('login') }}">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    @csrf
                    <p class="h4 mb-4">Se connecter</p>
                    <!-- Email Address -->
                    <div>
                        <x-input id="email" class="form-control mb-4" type="email" name="email" :value="old('email') " placeholder="E-mail" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input id="password" class="form-control mb-4"
                                 type="password"
                                 name="password"
                                 required autocomplete="current-password" placeholder="Mot de passe" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="d-flex justify-content-center">
                        @if (Route::has('password.request'))
                            <div>
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    Mot de passe oublié ?
                                </a><br>
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                                    S'inscrire
                                </a>
                            </div>
                        @endif
                    </div>
                    <x-button class="my-4 btn btn-primary">
                        {{ __('Login') }}
                    </x-button>
                </form>
            </div>
    </div>
@endsection
