@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <x-breadcrumb title="Sliced" pagetitle="Dashboard" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Basic Accordion</h2>
                <div class="space-y-2" x-data="{ current: 1 }">
                    <div class="border rounded border-black/10 dark:border-darkborder">
                        <button type="button" class="flex items-center w-full p-4 text-muted dark:text-darkmuted"
                            :class="{ '!text-black dark:!text-white': current === 1 }"
                            x-on:click="current === 1 ? current = null : current = 1">
                            Accordion Item #1
                            <div class="ltr:ml-auto rtl:mr-auto" :class="{ 'rotate-180': current === 1 }">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5">
                                    <path fill="currentColor"
                                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                    </path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 1" x-collapse>
                            <div
                                class="p-4 space-y-2 border-t text-muted border-black/10 dark:border-darkborder dark:text-darkmuted">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="border rounded border-black/10 dark:border-darkborder">
                        <button type="button" class="flex items-center w-full p-4 text-muted dark:text-darkmuted"
                            :class="{ '!text-black dark:!text-white': current === 2 }"
                            x-on:click="current === 2 ? current = null : current = 2">
                            Accordion Item #2
                            <div class="ltr:ml-auto rtl:mr-auto" :class="{ 'rotate-180': current === 2 }">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5">
                                    <path fill="currentColor"
                                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                    </path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 2" x-collapse>
                            <div
                                class="p-4 space-y-2 border-t text-muted border-black/10 dark:border-darkborder dark:text-darkmuted">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="border rounded border-black/10 dark:border-darkborder">
                        <button type="button" class="flex items-center w-full p-4 text-muted dark:text-darkmuted"
                            :class="{ '!text-black dark:!text-white': current === 3 }"
                            x-on:click="current === 3 ? current = null : current = 3">
                            Accordion Item #3
                            <div class="ltr:ml-auto rtl:mr-auto" :class="{ 'rotate-180': current === 3 }">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5">
                                    <path fill="currentColor"
                                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                    </path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 3" x-collapse>
                            <div
                                class="p-4 space-y-2 border-t text-muted border-black/10 dark:border-darkborder dark:text-darkmuted">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Accordion Without Spacing
                </h2>
                <div class="border divide-y rounded border-black/10 dark:border-darkborder dark:divide-darkborder divide-black/10"
                    x-data="{ current: 1 }">
                    <div class="">
                        <button type="button" class="flex items-center w-full p-4 text-muted dark:text-darkmuted"
                            :class="{ '!text-black dark:!text-white': current === 1 }"
                            x-on:click="current === 1 ? current = null : current = 1">
                            Accordion Item #1
                            <div class="ltr:ml-auto rtl:mr-auto" :class="{ 'rotate-180': current === 1 }">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5">
                                    <path fill="currentColor"
                                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                    </path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 1" x-collapse>
                            <div
                                class="p-4 space-y-2 border-t text-muted border-black/10 dark:border-darkborder dark:text-darkmuted">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <button type="button" class="flex items-center w-full p-4 text-muted dark:text-darkmuted"
                            :class="{ '!text-black dark:!text-white': current === 2 }"
                            x-on:click="current === 2 ? current = null : current = 2">
                            Accordion Item #2
                            <div class="ltr:ml-auto rtl:mr-auto" :class="{ 'rotate-180': current === 2 }">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5">
                                    <path fill="currentColor"
                                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                    </path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 2" x-collapse>
                            <div
                                class="p-4 space-y-2 border-t text-muted border-black/10 dark:border-darkborder dark:text-darkmuted">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <button type="button" class="flex items-center w-full p-4 text-muted dark:text-darkmuted"
                            :class="{ '!text-black dark:!text-white': current === 3 }"
                            x-on:click="current === 3 ? current = null : current = 3">
                            Accordion Item #3
                            <div class="ltr:ml-auto rtl:mr-auto" :class="{ 'rotate-180': current === 3 }">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5">
                                    <path fill="currentColor"
                                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                    </path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 3" x-collapse>
                            <div
                                class="p-4 space-y-2 border-t text-muted border-black/10 dark:border-darkborder dark:text-darkmuted">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Accordion With color</h2>
                <div class="space-y-2" x-data="{ current: 1 }">
                    <div class="overflow-hidden border rounded border-black/10 dark:border-darkborder">
                        <button type="button"
                            class="flex items-center w-full p-4 text-black bg-black/5 dark:bg-white/5 dark:text-darkmuted"
                            :class="{ '!text-purple !bg-purple/20': current === 1 }"
                            x-on:click="current === 1 ? current = null : current = 1">
                            Accordion Item #1
                            <div class="ltr:ml-auto rtl:mr-auto" :class="{ 'rotate-180': current === 1 }">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5">
                                    <path fill="currentColor"
                                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                    </path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 1" x-collapse>
                            <div
                                class="p-4 space-y-2 border-t text-muted border-black/10 dark:text-darkmuted dark:border-darkborder">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden border rounded border-black/10 dark:border-darkborder">
                        <button type="button"
                            class="flex items-center w-full p-4 text-black bg-black/5 dark:bg-white/5 dark:text-darkmuted"
                            :class="{ '!text-purple !bg-purple/20': current === 2 }"
                            x-on:click="current === 2 ? current = null : current = 2">
                            Accordion Item #2
                            <div class="ltr:ml-auto rtl:mr-auto" :class="{ 'rotate-180': current === 2 }">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5">
                                    <path fill="currentColor"
                                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                    </path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 2" x-collapse>
                            <div
                                class="p-4 space-y-2 border-t text-muted border-black/10 dark:text-darkmuted dark:border-darkborder">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden border rounded border-black/10 dark:border-darkborder">
                        <button type="button"
                            class="flex items-center w-full p-4 text-black bg-black/5 dark:bg-white/5 dark:text-darkmuted"
                            :class="{ '!text-purple !bg-purple/20': current === 3 }"
                            x-on:click="current === 3 ? current = null : current = 3">
                            Accordion Item #3
                            <div class="ltr:ml-auto rtl:mr-auto" :class="{ 'rotate-180': current === 3 }">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5">
                                    <path fill="currentColor"
                                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                    </path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 3" x-collapse>
                            <div
                                class="p-4 space-y-2 border-t text-muted border-black/10 dark:text-darkmuted dark:border-darkborder">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Accordion With Icons</h2>
                <div class="space-y-2" x-data="{ current: 1 }">
                    <div class="border rounded border-black/10 dark:border-darkborder">
                        <button type="button" class="flex items-center w-full p-4 text-muted dark:text-darkmuted"
                            :class="{ '!text-black dark:!text-white': current === 1 }"
                            x-on:click="current === 1 ? current = null : current = 1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="size-5 ltr:mr-2 rtl:ml-2 shrink-0">
                                <path fill="currentColor"
                                    d="M14 18V20L16 21V22H8L7.99639 21.0036L10 20V18H2.9918C2.44405 18 2 17.5511 2 16.9925V4.00748C2 3.45107 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44892 22 4.00748V16.9925C22 17.5489 21.5447 18 21.0082 18H14ZM4 5V14H20V5H4Z">
                                </path>
                            </svg>
                            Accordion Item #1
                            <div class="ltr:ml-auto rtl:mr-auto" :class="{ 'rotate-180': current === 1 }">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5">
                                    <path fill="currentColor"
                                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                    </path>
                                </svg>
                            </div>
                        </button>
                        <div x-show="current === 1" x-collapse="">
                            <div
                                class="p-4 space-y-2 border-t text-muted border-black/10 dark:text-darkmuted dark:border-darkborder">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="border rounded border-black/10 dark:border-darkborder">
                        <button type="button" class="flex items-center w-full p-4 text-muted dark:text-darkmuted"
                            :class="{ '!text-black dark:!text-white': current === 2 }"
                            x-on:click="current === 2 ? current = null : current = 2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="size-5 ltr:mr-2 rtl:ml-2 shrink-0">
                                <path fill="currentColor"
                                    d="M12 1L21.5 6.5V17.5L12 23L2.5 17.5V6.5L12 1ZM5.49388 7.0777L12.0001 10.8444L18.5062 7.07774L12 3.311L5.49388 7.0777ZM4.5 8.81329V16.3469L11.0001 20.1101V12.5765L4.5 8.81329ZM13.0001 20.11L19.5 16.3469V8.81337L13.0001 12.5765V20.11Z">
                                </path>
                            </svg>
                            Accordion Item #2
                            <div class="ltr:ml-auto rtl:mr-auto" :class="{ 'rotate-180': current === 2 }">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5">
                                    <path fill="currentColor"
                                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                    </path>
                                </svg>
                            </div>
                        </button>
                        <div x-show="current === 2" x-collapse="" style="display: none; height: 0px; overflow: hidden;"
                            hidden="">
                            <div
                                class="p-4 space-y-2 border-t text-muted border-black/10 dark:text-darkmuted dark:border-darkborder">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="border rounded border-black/10 dark:border-darkborder">
                        <button type="button" class="flex items-center w-full p-4 text-muted dark:text-darkmuted"
                            :class="{ '!text-black dark:!text-white': current === 3 }"
                            x-on:click="current === 3 ? current = null : current = 3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="size-5 ltr:mr-2 rtl:ml-2 shrink-0">
                                <path fill="currentColor"
                                    d="M19 22H5C3.34315 22 2 20.6569 2 19V3C2 2.44772 2.44772 2 3 2H17C17.5523 2 18 2.44772 18 3V15H22V19C22 20.6569 20.6569 22 19 22ZM18 17V19C18 19.5523 18.4477 20 19 20C19.5523 20 20 19.5523 20 19V17H18ZM16 20V4H4V19C4 19.5523 4.44772 20 5 20H16ZM6 7H14V9H6V7ZM6 11H14V13H6V11ZM6 15H11V17H6V15Z">
                                </path>
                            </svg>
                            Accordion Item #3
                            <div class="ltr:ml-auto rtl:mr-auto" :class="{ 'rotate-180': current === 3 }">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5">
                                    <path fill="currentColor"
                                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                    </path>
                                </svg>
                            </div>
                        </button>
                        <div x-show="current === 3" x-collapse="" style="display: none; height: 0px; overflow: hidden;"
                            hidden="">
                            <div
                                class="p-4 space-y-2 border-t text-muted border-black/10 dark:text-darkmuted dark:border-darkborder">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Accordion Without Arrow
                </h2>
                <div class="space-y-2" x-data="{ current: 1 }">
                    <div class="border rounded border-black/10 dark:border-darkborder">
                        <button type="button" class="w-full p-4 text-start text-muted dark:text-darkmuted"
                            :class="{ '!text-black dark:!text-white': current === 1 }"
                            x-on:click="current === 1 ? current = null : current = 1">
                            Accordion Item #1
                        </button>
                        <div x-cloak x-show="current === 1" x-collapse>
                            <div
                                class="p-4 space-y-2 border-t text-muted border-black/10 dark:text-darkmuted dark:border-darkborder">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="border rounded border-black/10 dark:border-darkborder">
                        <button type="button" class="w-full p-4 text-start text-muted dark:text-darkmuted"
                            :class="{ '!text-black dark:!text-white': current === 2 }"
                            x-on:click="current === 2 ? current = null : current = 2">
                            Accordion Item #2
                        </button>
                        <div x-cloak x-show="current === 2" x-collapse>
                            <div
                                class="p-4 space-y-2 border-t text-muted border-black/10 dark:text-darkmuted dark:border-darkborder">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="border rounded border-black/10 dark:border-darkborder">
                        <button type="button" class="w-full p-4 text-start text-muted dark:text-darkmuted"
                            :class="{ '!text-black dark:!text-white': current === 3 }"
                            x-on:click="current === 3 ? current = null : current = 3">
                            Accordion Item #3
                        </button>
                        <div x-cloak x-show="current === 3" x-collapse>
                            <div
                                class="p-4 space-y-2 border-t text-muted border-black/10 dark:text-darkmuted dark:border-darkborder">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
