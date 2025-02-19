@extends('layouts.master')
@section('title')
    Edit Profile
@endsection
@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight w-full h-48">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 w-full h-screen">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 space-y-4">
            <div class="p-4 sm:p-8 bg-white dark:bg-transparent dark:text-white shadow sm:rounded-lg">
                <div class="max-w-xl mx-auto p-2 py-4 mb-6">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-transparent dark:text-white shadow sm:rounded-lg">
                <div class="max-w-xl mx-auto p-2 py-4 mb-6">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-transparent dark:text-white shadow sm:rounded-lg">
                <div class="max-w-2xl p-6 mb-6 text-right">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection
