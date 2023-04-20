<x-guest-layout>
    <style>
        /* Custom CSS for Gen Z styling */
        body {
            background: linear-gradient(135deg, #6EE7B7 0%, #3C93D5 100%);
        }

        .genz-form {
            width: 210%;
            border-radius: 10px;
            font-family: 'Roboto', sans-serif;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            transition: all 0.25s ease-in-out;
        }

        .genz-form:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .genz-button {
            background: linear-gradient(135deg, #6EE7B7 0%, #3C93D5 100%);
        }

        @media (max-width: 768px) {
            .genz-form {
                width: 100%;
            }
        }
    </style>



    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex items-center justify-center min-h-screen">
        <div class="genz-form">
            <h1 class="text-3xl font-bold mb-4 text-center">
                AfriChild CMS Login
            </h1>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4 text-center">
                    <img src="https://africhild.or.ug/assets/images/logo.png"
                        alt="AfriChild CMS Logo" class="h-12 mx-auto">
                </div>

                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full"
                        type="email" name="email" :value="old('email')" required
                        autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                        type="password" name="password" required
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span
                            class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif


                    <x-primary-button class="ml-3 genz-button">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const svgElements = document.querySelectorAll('svg');

        svgElements.forEach(function(element) {
            element.parentNode.removeChild(element);
        });
    });
</script>
