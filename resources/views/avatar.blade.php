@extends('layouts.master')
@section('title')
    Avatar
@endsection
@section('content')
    <x-breadcrumb title="Avatar" pagetitle="Elements" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Avatar Rounded</h2>
                <div class="flex flex-wrap items-center gap-4">
                    <img src="{{ URL::asset('build/images/avatar-1.png') }}" class="flex-none object-cover w-24 h-24 rounded-full" alt="avatar">
                    <img src="{{ URL::asset('build/images/avatar-4.png') }}" class="flex-none object-cover w-20 h-20 rounded-full"
                        alt="avatar">
                    <img src="{{ URL::asset('build/images/avatar-11.png') }}" class="flex-none object-cover w-16 h-16 rounded-full"
                        alt="avatar">
                    <img src="{{ URL::asset('build/images/avatar-13.png') }}" class="flex-none object-cover w-12 h-12 rounded-full"
                        alt="avatar">
                    <img src="{{ URL::asset('build/images/avatar-19.png') }}" class="flex-none object-cover w-10 h-10 rounded-full"
                        alt="avatar">
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Avatar Square</h2>
                <div class="flex flex-wrap items-center gap-4">
                    <img src="{{ URL::asset('build/images/avatar-2.png') }}" class="flex-none object-cover w-24 h-24 rounded-md"
                        alt="avatar">
                    <img src="{{ URL::asset('build/images/avatar-3.png') }}" class="flex-none object-cover w-20 h-20 rounded-md"
                        alt="avatar">
                    <img src="{{ URL::asset('build/images/avatar-5.png') }}" class="flex-none object-cover w-16 h-16 rounded-md"
                        alt="avatar">
                    <img src="{{ URL::asset('build/images/avatar-6.png') }}" class="flex-none object-cover w-12 h-12 rounded-md"
                        alt="avatar">
                    <img src="{{ URL::asset('build/images/avatar-8.png') }}" class="flex-none object-cover w-10 h-10 rounded-md"
                        alt="avatar">
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Avatar With Dots</h2>
                <div class="flex flex-wrap items-center gap-4">
                    <div class="relative w-24 h-24">
                        <img src="{{ URL::asset('build/images/avatar-1.png') }}" class="flex-none object-cover w-24 h-24 rounded-full"
                            alt="avatar">
                        <span
                            class="absolute bottom-0 rounded-full ltr:right-0 rtl:left-0 h-7 w-7 bg-danger ring-2 ring-white dark:ring-darkborder"></span>
                    </div>
                    <div class="relative w-20 h-20">
                        <img src="{{ URL::asset('build/images/avatar-4.png') }}" class="flex-none object-cover w-20 h-20 rounded-full"
                            alt="avatar">
                        <span
                            class="absolute bottom-0 rounded-full ltr:right-0 rtl:left-0 size-6 bg-warning ring-2 ring-white dark:ring-darkborder"></span>
                    </div>
                    <div class="relative w-16 h-16">
                        <img src="{{ URL::asset('build/images/avatar-11.png') }}" class="flex-none object-cover w-16 h-16 rounded-full"
                            alt="avatar">
                        <span
                            class="absolute bottom-0 w-5 h-5 rounded-full ltr:right-0 rtl:left-0 bg-success ring-2 ring-white dark:ring-darkborder"></span>
                    </div>
                    <div class="relative w-12 h-12">
                        <img src="{{ URL::asset('build/images/avatar-13.png') }}" class="flex-none object-cover w-12 h-12 rounded-full"
                            alt="avatar">
                        <span
                            class="absolute bottom-0 rounded-full ltr:right-0 rtl:left-0 size-4 bg-muted ring-2 ring-white dark:ring-darkborder"></span>
                    </div>
                </div>
            </div>

            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Avatar Square With Dots
                </h2>
                <div class="flex flex-wrap items-center gap-4">
                    <div class="relative w-24 h-24">
                        <img src="{{ URL::asset('build/images/avatar-2.png') }}" class="flex-none object-cover w-24 h-24 rounded-md"
                            alt="avatar">
                        <span
                            class="absolute rounded-full -bottom-2 ltr:-right-2 rtl:-left-2 h-7 w-7 bg-danger ring-2 ring-white dark:ring-darkborder"></span>
                    </div>
                    <div class="relative w-20 h-20">
                        <img src="{{ URL::asset('build/images/avatar-3.png') }}" class="flex-none object-cover w-20 h-20 rounded-md"
                            alt="avatar">
                        <span
                            class="absolute rounded-full size-6 -bottom-2 ltr:-right-2 rtl:-left-2 bg-warning ring-2 ring-white dark:ring-darkborder"></span>
                    </div>
                    <div class="relative w-16 h-16">
                        <img src="{{ URL::asset('build/images/avatar-5.png') }}" class="flex-none object-cover w-16 h-16 rounded-md"
                            alt="avatar">
                        <span
                            class="absolute w-5 h-5 rounded-full -bottom-2 ltr:-right-2 rtl:-left-2 bg-success ring-2 ring-white dark:ring-darkborder"></span>
                    </div>
                    <div class="relative w-12 h-12">
                        <img src="{{ URL::asset('build/images/avatar-6.png') }}" class="flex-none object-cover w-12 h-12 rounded-md"
                            alt="avatar">
                        <span
                            class="absolute rounded-full size-4 -bottom-2 ltr:-right-2 rtl:-left-2 bg-muted ring-2 ring-white dark:ring-darkborder"></span>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Avatar group</h2>
                <div class="flex items-center justify-start -space-x-4 rtl:space-x-reverse">
                    <img src="{{ URL::asset('build/images/avatar-2.png') }}"
                        class="flex-none object-cover w-10 h-10 rounded-full ring-2 ring-white dark:ring-darkborder"
                        alt="avatar">
                    <img src="{{ URL::asset('build/images/avatar-3.png') }}"
                        class="flex-none object-cover w-10 h-10 rounded-full ring-2 ring-white dark:ring-darkborder"
                        alt="avatar">
                    <img src="{{ URL::asset('build/images/avatar-5.png') }}"
                        class="flex-none object-cover w-10 h-10 rounded-full ring-2 ring-white dark:ring-darkborder"
                        alt="avatar">
                    <img src="{{ URL::asset('build/images/avatar-6.png') }}"
                        class="flex-none object-cover w-10 h-10 rounded-full ring-2 ring-white dark:ring-darkborder"
                        alt="avatar">
                    <img src="{{ URL::asset('build/images/avatar-8.png') }}"
                        class="flex-none object-cover w-10 h-10 rounded-full ring-2 ring-white dark:ring-darkborder"
                        alt="avatar">
                    <span
                        class="flex items-center justify-center object-cover w-10 h-10 text-xs font-bold text-center rounded-full bg-light ring-2 ring-white dark:ring-darkborder">+99</span>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Avatar with text</h2>
                <div class="flex items-center space-x-2 rtl:space-x-reverse">
                    <img class="w-10 h-10 rounded-full" src="{{ URL::asset('build/images/avatar-1.png') }}" alt="">
                    <div class="font-medium">
                        <h6 class="text-sm dark:text-white">Stevens Lackson</h6>
                        <p class="text-xs text-black/40 dark:text-darkmuted">Frontend Developer</p>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Avatar Square with
                    alphabet</h2>
                <div class="flex flex-wrap gap-4">
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-md bg-purple/20 text-purple">
                        Sl</div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-md bg-info/20 text-info">
                        Sl</div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-md bg-success/20 text-success">
                        Sl</div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-md bg-warning/20 text-warning">
                        Sl</div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-md bg-danger/20 text-danger">
                        Sl</div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold text-black uppercase rounded-md bg-black/20 dark:bg-transparent dark:text-white">
                        Sl</div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-md bg-muted/20 text-muted dark:bg-darkmuted dark:text-white">
                        Sl</div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold text-black uppercase rounded-md bg-light/20 dark:text-white dark:bg-white/5">
                        Sl</div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Avatar Rounded with
                    alphabet</h2>
                <div class="flex flex-wrap gap-4">
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-full bg-purple/20 text-purple">
                        Sl</div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-full bg-info/20 text-info">
                        Sl</div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-full bg-success/20 text-success">
                        Sl</div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-full bg-warning/20 text-warning">
                        Sl</div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-full bg-danger/20 text-danger">
                        Sl</div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold text-black uppercase rounded-full bg-black/20 dark:bg-transparent dark:text-white">
                        Sl</div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-full bg-muted/20 text-muted dark:bg-darkmuted dark:text-white">
                        Sl</div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold text-black uppercase rounded-full bg-light/20 dark:text-white dark:bg-white/5">
                        Sl</div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Avatar with Icon</h2>
                <div class="flex flex-wrap gap-4">
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-full bg-purple/20 text-purple">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mx-auto size-5">
                            <path
                                d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-full bg-info/20 text-info">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mx-auto size-5">
                            <path
                                d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-full bg-success/20 text-success">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mx-auto size-5">
                            <path
                                d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-full bg-warning/20 text-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mx-auto size-5">
                            <path
                                d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-full bg-danger/20 text-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mx-auto size-5">
                            <path
                                d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold text-black uppercase rounded-full bg-black/20 dark:bg-transparent dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mx-auto size-5">
                            <path
                                d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold uppercase rounded-full bg-muted/20 text-muted dark:bg-darkmuted dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mx-auto size-5">
                            <path
                                d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-base font-semibold text-black uppercase rounded-full bg-light/20 dark:text-white dark:bg-white/5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mx-auto size-5">
                            <path
                                d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Avatar With Border</h2>
                <div class="flex flex-wrap items-center gap-4">
                    <img src="{{ URL::asset('build/images/avatar-1.png') }}"
                        class="flex-none object-cover w-16 h-16 p-1 border rounded-full border-purple" alt="avatar">
                    <img src="{{ URL::asset('build/images/avatar-4.png') }}"
                        class="flex-none object-cover w-16 h-16 p-1 border rounded-full border-success" alt="avatar">
                    <img src="{{ URL::asset('build/images/avatar-11.png') }}"
                        class="flex-none object-cover w-16 h-16 p-1 border rounded-full border-warning" alt="avatar">
                    <img src="{{ URL::asset('build/images/avatar-13.png') }}"
                        class="flex-none object-cover w-16 h-16 p-1 border rounded-full border-danger" alt="avatar">
                    <img src="{{ URL::asset('build/images/avatar-19.png') }}"
                        class="flex-none object-cover w-16 h-16 p-1 border border-black rounded-full" alt="avatar">
                    <img src="{{ URL::asset('build/images/avatar-24.png') }}"
                        class="flex-none object-cover w-16 h-16 p-1 border rounded-full border-light" alt="avatar">
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
