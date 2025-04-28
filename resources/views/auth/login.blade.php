<x-guest-layout>
    <style>
        @keyframes pulseGlow {
  0% {
    box-shadow: 0 0 0px rgba(99, 102, 241, 0.7);
  }
  50% {
    box-shadow: 0 0 12px rgba(99, 102, 241, 0.9);
  }
  100% {
    box-shadow: 0 0 0px rgba(99, 102, 241, 0.7);
  }
}

.glow-hover:hover {
  animation: pulseGlow 1s infinite;
}

        </style>

    <!-- Slide-in container -->
    <div class="animate-slide-in-left">
        <div class="flex flex-col items-center justify-center mb-6">
            <img src="{{ asset('images/pharma-icon.png') }}" alt="Logo"
                 style="width: 60px; height: 60px; object-fit: contain;">
            <h2 class="text-white text-lg font-semibold mt-2">Vita Source Login</h2>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
    <label for="remember_me" class="inline-flex items-center cursor-pointer group">
        <input id="remember_me" type="checkbox"
               class="appearance-none h-5 w-5 border border-gray-300 rounded-sm bg-gray-700 checked:bg-indigo-600 transition duration-200 ease-in-out
                      focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" name="remember">
        <span class="ms-2 text-sm text-gray-300 group-hover:text-white transition-colors">{{ __('Remember me') }}</span>
    </label>
</div>


            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-400 hover:text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button type="submit"
    class="ms-3 px-5 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-md shadow-lg transition-transform duration-200 transform hover:scale-105 active:scale-95 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 glow-hover">
    {{ __('Log in') }}
</button>

            </div>
        </form>
    </div>

    <!-- Animation styling -->
    <style>
        .animate-slide-in-left {
            animation: slideInLeft 0.6s ease-out;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-40px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>

</x-guest-layout>
