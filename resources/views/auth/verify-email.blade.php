<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

            {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}

        </x-slot>

        <div class="mb-4">
            <p>
                {{ __(' Before getting started, we need to verify your email address, please check the email address you provided during sign up and click the included link.
                 If you didn\'t receive the email, click Resend Verification Email.') }}
            </p>
        </div>


        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log out') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
