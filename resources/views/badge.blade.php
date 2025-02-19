@extends('layouts.master')
@section('title')
    Badges
@endsection
@section('content')
    <x-breadcrumb title="Badges" pagetitle="Elements" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Badges</h2>
                <div class="flex flex-wrap items-center gap-4">
                    <div class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-purple text-white">
                        Primary</div>
                    <div class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-info text-white">
                        Info</div>
                    <div class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-success text-white">
                        Succcess</div>
                    <div
                        class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-warning text-white">
                        Warning</div>
                    <div class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-danger text-white">
                        Danger</div>
                    <div class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-black text-white">
                        Black</div>
                    <div
                        class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-muted text-white dark:bg-darkmuted">
                        Secondary</div>
                    <div class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-light text-black">
                        Light</div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Badges Rounded</h2>
                <div class="flex flex-wrap items-center gap-4">
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 bg-purple text-white">
                        Primary</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 bg-info text-white">
                        Info</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 bg-success text-white">
                        Succcess</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 bg-warning text-white">
                        Warning</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 bg-danger text-white">
                        Danger</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 bg-black text-white">
                        Black</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 bg-muted text-white dark:bg-darkmuted">
                        Secondary</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 bg-light text-black">
                        Light</div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Badges Lighten</h2>
                <div class="flex flex-wrap items-center gap-4">
                    <div
                        class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-purple/20 text-purple">
                        Primary</div>
                    <div class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-info/20 text-info">
                        Info</div>
                    <div
                        class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-success/20 text-success">
                        Succcess</div>
                    <div
                        class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-warning/20 text-warning">
                        Warning</div>
                    <div
                        class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-danger/20 text-danger">
                        Danger</div>
                    <div
                        class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-black/20 text-black dark:text-white">
                        Black</div>
                    <div
                        class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-muted/20 text-muted">
                        Secondary</div>
                    <div
                        class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-light/20 text-black dark:text-white">
                        Light</div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Badges Lighten Rounded
                </h2>
                <div class="flex flex-wrap items-center gap-4">
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 bg-purple/20 text-purple">
                        Primary</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 bg-info/20 text-info">
                        Info</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 bg-success/20 text-success">
                        Succcess</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 bg-warning/20 text-warning">
                        Warning</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 bg-danger/20 text-danger">
                        Danger</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 bg-black/20 text-black dark:text-white">
                        Black</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 bg-muted/20 text-muted">
                        Secondary</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 bg-light/20 text-black dark:text-white">
                        Light</div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Badges Glow</h2>
                <div class="flex flex-wrap items-center gap-4">
                    <div
                        class="inline-flex items-center rounded shadow-md shadow-purple/50 text-xs justify-center px-1.5 py-0.5 bg-purple text-white">
                        Primary</div>
                    <div
                        class="inline-flex items-center rounded shadow-md shadow-info/50 text-xs justify-center px-1.5 py-0.5 bg-info text-white">
                        Info</div>
                    <div
                        class="inline-flex items-center rounded shadow-md shadow-success/50 text-xs justify-center px-1.5 py-0.5 bg-success text-white">
                        Succcess</div>
                    <div
                        class="inline-flex items-center rounded shadow-md shadow-warning/50 text-xs justify-center px-1.5 py-0.5 bg-warning text-white">
                        Warning</div>
                    <div
                        class="inline-flex items-center rounded shadow-md shadow-danger/50 text-xs justify-center px-1.5 py-0.5 bg-danger text-white">
                        Danger</div>
                    <div
                        class="inline-flex items-center rounded shadow-md shadow-black/50 text-xs justify-center px-1.5 py-0.5 bg-black text-white">
                        Black</div>
                    <div
                        class="inline-flex items-center rounded shadow-md shadow-muted/50 text-xs justify-center px-1.5 py-0.5 bg-muted text-white dark:bg-darkmuted dark:shadow-darkmuted/50">
                        Secondary</div>
                    <div
                        class="inline-flex items-center rounded shadow-md shadow-light/50 text-xs justify-center px-1.5 py-0.5 bg-light text-black">
                        Light</div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Badges Glow Rounded</h2>
                <div class="flex flex-wrap items-center gap-4">
                    <div
                        class="inline-flex items-center rounded-full shadow-md shadow-purple/50 text-xs justify-center px-1.5 py-0.5 bg-purple text-white">
                        Primary</div>
                    <div
                        class="inline-flex items-center rounded-full shadow-md shadow-info/50 text-xs justify-center px-1.5 py-0.5 bg-info text-white">
                        Info</div>
                    <div
                        class="inline-flex items-center rounded-full shadow-md shadow-success/50 text-xs justify-center px-1.5 py-0.5 bg-success text-white">
                        Succcess</div>
                    <div
                        class="inline-flex items-center rounded-full shadow-md shadow-warning/50 text-xs justify-center px-1.5 py-0.5 bg-warning text-white">
                        Warning</div>
                    <div
                        class="inline-flex items-center rounded-full shadow-md shadow-danger/50 text-xs justify-center px-1.5 py-0.5 bg-danger text-white">
                        Danger</div>
                    <div
                        class="inline-flex items-center rounded-full shadow-md shadow-black/50 text-xs justify-center px-1.5 py-0.5 bg-black text-white">
                        Black</div>
                    <div
                        class="inline-flex items-center rounded-full shadow-md shadow-muted/50 text-xs justify-center px-1.5 py-0.5 bg-muted text-white dark:bg-darkmuted dark:shadow-darkmuted/50">
                        Secondary</div>
                    <div
                        class="inline-flex items-center rounded-full shadow-md shadow-light/50 text-xs justify-center px-1.5 py-0.5 bg-light text-black">
                        Light</div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Badges Outline</h2>
                <div class="flex flex-wrap items-center gap-4">
                    <div
                        class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 border border-purple text-purple">
                        Primary</div>
                    <div
                        class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 border border-info text-info">
                        Info</div>
                    <div
                        class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 border border-success text-success">
                        Succcess</div>
                    <div
                        class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 border border-warning text-warning">
                        Warning</div>
                    <div
                        class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 border border-danger text-danger">
                        Danger</div>
                    <div
                        class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 border border-black text-black dark:text-white dark:border-darkborder">
                        Black</div>
                    <div
                        class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 border border-muted text-muted dark:text-darkmuted dark:border-darktext-darkmuted">
                        Secondary</div>
                    <div
                        class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 border border-light text-black dark:text-white">
                        Light</div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Badges Outline Rounded
                </h2>
                <div class="flex flex-wrap items-center gap-4">
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 border border-purple text-purple">
                        Primary</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 border border-info text-info">
                        Info</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 border border-success text-success">
                        Succcess</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 border border-warning text-warning">
                        Warning</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 border border-danger text-danger">
                        Danger</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 border border-black text-black dark:text-white dark:border-darkborder">
                        Black</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 border border-muted text-muted dark:text-darkmuted dark:border-darktext-darkmuted">
                        Secondary</div>
                    <div
                        class="inline-flex items-center rounded-full text-xs justify-center px-1.5 py-0.5 border border-light text-black dark:text-white">
                        Light</div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Badges With Dots</h2>
                <div class="flex flex-wrap items-center gap-4">
                    <div class="inline-flex items-center text-xs justify-center px-1.5 py-0.5 text-purple">
                        <span class="h-1.5 w-1.5 rounded-full bg-current ltr:mr-1.5 rtl:ml-1.5"></span>
                        <span>Primary</span>
                    </div>
                    <div class="inline-flex items-center text-xs justify-center px-1.5 py-0.5 text-info">
                        <span class="h-1.5 w-1.5 rounded-full bg-current ltr:mr-1.5 rtl:ml-1.5"></span>
                        <span>Info</span>
                    </div>
                    <div class="inline-flex items-center text-xs justify-center px-1.5 py-0.5 text-success">
                        <span class="h-1.5 w-1.5 rounded-full bg-current ltr:mr-1.5 rtl:ml-1.5"></span>
                        <span>Succcess</span>
                    </div>
                    <div class="inline-flex items-center text-xs justify-center px-1.5 py-0.5 text-warning">
                        <span class="h-1.5 w-1.5 rounded-full bg-current ltr:mr-1.5 rtl:ml-1.5"></span>
                        <span>Warning</span>
                    </div>
                    <div class="inline-flex items-center text-xs justify-center px-1.5 py-0.5 text-danger">
                        <span class="h-1.5 w-1.5 rounded-full bg-current ltr:mr-1.5 rtl:ml-1.5"></span>
                        <span>Danger</span>
                    </div>
                    <div class="inline-flex items-center text-xs justify-center px-1.5 py-0.5 text-black dark:text-white">
                        <span class="h-1.5 w-1.5 rounded-full bg-current ltr:mr-1.5 rtl:ml-1.5"></span>
                        <span>Black</span>
                    </div>
                    <div class="inline-flex items-center text-xs justify-center px-1.5 py-0.5 text-muted">
                        <span class="h-1.5 w-1.5 rounded-full bg-current ltr:mr-1.5 rtl:ml-1.5"></span>
                        <span>Secondary</span>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Badges with size</h2>
                <div class="flex flex-wrap items-center gap-4">
                    <div><span class="bg-purple text-white text-[10px] px-1.5 py-0.5 rounded"><span
                                class="relative inline-block w-1 h-1 bg-white rounded-full ltr:mr-1 rtl:ml-1 -top-px"></span>
                            Small</span></div>
                    <div><span class="bg-info text-white text-[10px] px-2 py-1 text-xs rounded"><span
                                class="h-1.5 w-1.5 relative -top-px rounded-full bg-white inline-block ltr:mr-1 rtl:ml-1"></span>
                            Small</span></div>
                    <div><span class="bg-success text-white text-[10px] px-1.5 py-0.5 rounded"><span
                                class="relative inline-block w-1 h-1 bg-white rounded-full ltr:mr-1 rtl:ml-1 -top-px"></span>
                            Small</span></div>
                    <div><span class="bg-warning text-white text-[10px] px-2 py-1 text-xs rounded"><span
                                class="h-1.5 w-1.5 relative -top-px rounded-full bg-white inline-block ltr:mr-1 rtl:ml-1"></span>
                            Small</span></div>
                    <div><span class="bg-danger text-white text-[10px] px-1.5 py-0.5 rounded-full"><span
                                class="relative inline-block w-1 h-1 bg-white rounded-full ltr:mr-1 rtl:ml-1 -top-px"></span>
                            Small</span></div>
                    <div><span class="bg-black text-white text-[10px] px-2 py-1 text-xs rounded-full"><span
                                class="h-1.5 w-1.5 relative -top-px rounded-full bg-white inline-block ltr:mr-1 rtl:ml-1"></span>
                            Small</span></div>
                    <div><span
                            class="bg-muted text-white dark:text-white dark:bg-darkmuted text-[10px] px-1.5 py-0.5 rounded-full"><span
                                class="relative inline-block w-1 h-1 bg-white rounded-full ltr:mr-1 rtl:ml-1 -top-px dark:bg-white"></span>
                            Small</span></div>
                    <div><span class="bg-light text-black text-[10px] px-2 py-1 text-xs rounded-full"><span
                                class="h-1.5 w-1.5 relative -top-px rounded-full bg-black inline-block ltr:mr-1 rtl:ml-1"></span>
                            Small</span></div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Badges in Buttons</h2>
                <div class="flex flex-wrap items-center gap-4">
                    <button type="button"
                        class="btn relative bg-black border border-black rounded-md text-white transition-all duration-300 hover:bg-black/[0.85] hover:border-black/[0.85]">Messages
                        <span
                            class="absolute top-0 w-3 h-3 -translate-y-1/2 border border-white rounded-full ltr:-translate-x-1/2 ltr:left-full rtl:translate-x-1/2 rtl:right-full bg-purple"></span>
                    </button>
                    <button type="button"
                        class="btn bg-black border border-black rounded-md text-white transition-all duration-300 hover:bg-black/[0.85] hover:border-black/[0.85]">Notifications
                        <span class="px-1 text-white rounded ltr:ml-1 rtl:mr-1 bg-purple">4</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
