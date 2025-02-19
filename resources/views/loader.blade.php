    @extends('layouts.master')
    @section('title')
        Loader
    @endsection
    @section('content')
        <x-breadcrumb title="Loader" pagetitle="Elements" />

        <!-- Start All Card -->
        <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Border Spinner</h2>
                    <div class="flex flex-wrap items-center gap-4">
                        <div
                            class="animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-purple rounded-full">
                        </div>
                        <div
                            class="animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-info rounded-full">
                        </div>
                        <div
                            class="animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-success rounded-full">
                        </div>
                        <div
                            class="animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-warning rounded-full">
                        </div>
                        <div
                            class="animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-danger rounded-full">
                        </div>
                        <div
                            class="animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-black rounded-full">
                        </div>
                        <div
                            class="animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-muted rounded-full">
                        </div>
                        <div
                            class="animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-light rounded-full">
                        </div>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Spinner Sizes</h2>
                    <div class="flex flex-wrap items-center gap-3">
                        <div
                            class="animate-spin inline-block w-10 h-10 border-[3px] border-l-transparent border-purple rounded-full">
                        </div>
                        <div
                            class="animate-spin inline-block w-9 h-9 border-[3px] border-l-transparent border-info rounded-full">
                        </div>
                        <div
                            class="animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-success rounded-full">
                        </div>
                        <div
                            class="animate-spin inline-block w-7 h-7 border-[3px] border-l-transparent border-warning rounded-full">
                        </div>
                        <div
                            class="animate-spin inline-block w-6 h-6 border-[3px] border-l-transparent border-danger rounded-full">
                        </div>
                        <div
                            class="animate-spin inline-block w-5 h-5 border-[3px] border-l-transparent border-black rounded-full">
                        </div>
                        <div
                            class="animate-spin inline-block w-4 h-4 border-[3px] border-l-transparent border-muted rounded-full">
                        </div>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Spinner Sizes</h2>
                    <div class="flex flex-wrap items-center gap-6">
                        <div class="relative">
                            <span class="inline-block w-5 h-5">
                                <span class="inline-flex w-full h-full rounded-full animate-ping bg-purple/50"></span>
                            </span>
                        </div>
                        <div class="relative">
                            <span class="inline-block w-5 h-5">
                                <span class="inline-flex w-full h-full rounded-full animate-ping bg-info/50"></span>
                            </span>
                        </div>
                        <div class="relative">
                            <span class="inline-block w-5 h-5">
                                <span class="inline-flex w-full h-full rounded-full animate-ping bg-success/50"></span>
                            </span>
                        </div>
                        <div class="relative">
                            <span class="inline-block w-5 h-5">
                                <span class="inline-flex w-full h-full rounded-full animate-ping bg-warning/50"></span>
                            </span>
                        </div>
                        <div class="relative">
                            <span class="inline-block w-5 h-5">
                                <span class="inline-flex w-full h-full rounded-full animate-ping bg-danger/50"></span>
                            </span>
                        </div>
                        <div class="relative">
                            <span class="inline-block w-5 h-5">
                                <span class="inline-flex w-full h-full rounded-full animate-ping bg-black/50"></span>
                            </span>
                        </div>
                        <div class="relative">
                            <span class="inline-block w-5 h-5">
                                <span class="inline-flex w-full h-full rounded-full animate-ping bg-muted/50"></span>
                            </span>
                        </div>
                        <div class="relative">
                            <span class="inline-block w-5 h-5">
                                <span class="inline-flex w-full h-full rounded-full animate-ping bg-light/50"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Spinner Custom</h2>
                    <div class="flex flex-wrap items-center justify-center gap-4">
                        <div
                            class="inline-block align-middle border-8 rounded-full animate-spin border-black/10 border-l-purple w-14 h-14">
                        </div>
                        <div
                            class="animate-[spin_2s_linear_infinite] border-8 border-black/10 border-l-purple border-r-black rounded-full w-14 h-14 inline-block align-middle">
                        </div>
                        <div
                            class="animate-[spin_3s_linear_infinite] border-8 border-r-light border-l-purple border-t-black border-b-success rounded-full w-14 h-14 inline-block align-middle">
                        </div>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Spinner Buttons</h2>
                    <div class="flex flex-wrap gap-4">
                        <button type="button"
                            class="btn flex items-center gap-1.5 bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5"
                                fill="none" stroke-linecap="round" stroke-linejoin="round"
                                class="inline-block h-5 w-5 animate-[spin_2s_linear_infinite] align-middle">
                                <line x1="12" y1="2" x2="12" y2="6"></line>
                                <line x1="12" y1="18" x2="12" y2="22"></line>
                                <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                                <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                                <line x1="2" y1="12" x2="6" y2="12"></line>
                                <line x1="18" y1="12" x2="22" y2="12"></line>
                                <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                                <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                            </svg>
                            Primary
                        </button>
                        <button type="button"
                            class="btn flex items-center gap-1.5 bg-success border border-success rounded-md text-white transition-all duration-300 hover:bg-success/[0.85] hover:border-success/[0.85]">
                            <span
                                class="inline-block w-5 h-5 align-middle border-2 border-white rounded-full animate-spin border-l-transparent"></span>
                            Success
                        </button>
                        <button type="button"
                            class="btn flex items-center gap-2 bg-black border border-black rounded-md text-white transition-all duration-300 hover:bg-black/[0.85] hover:border-black/[0.85]">
                            <span
                                class="inline-block w-3 h-3 rounded-full animate-ping bg-white/30 group-hover:bg-white "></span>
                            Black
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End All Card -->
    @endsection
