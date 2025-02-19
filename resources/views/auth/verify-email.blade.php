@extends('layouts.AuthLayout')
@section('title')
    Verify Email
@endsection

@section('content')
    <!-- Start Main Content -->
    <div class="min-h-[calc(100vh-134px)] py-4 px-4 sm:px-12 flex justify-center items-center max-w-[1440px] mx-auto">
        <div
            class="max-w-[550px] flex-none w-full bg-white border border-black/10 p-6 sm:p-10 lg:px-10 lg:py-14 rounded-2xl dark:bg-darklight dark:border-darkborder">
            <h1 class="mb-2 text-2xl font-semibold text-center dark:text-white">Verify Your email</h1>
            <p class="text-center text-muted mb-7 dark:text-darkmuted">Thanks for signing up! Before getting started, could
                you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the
                email, we will gladly send you another</p>

            @if (session('status') == 'verification-link-sent')
                <div class="p-3 rounded bg-success/20 text-success">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}" class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                @csrf

                <button type="submit"
                    class="btn sm:col-span-2 w-full py-3.5 text-base bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                    {{ __('Resend Verification Email') }}
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                @csrf

                <button type="submit"
                    class="btn sm:col-span-2 w-full py-3.5 text-base bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                    {{ __('Log Out') }}
                </button>
            </form>

        </div>
    </div>
    <!-- End Main Content -->
@endsection
