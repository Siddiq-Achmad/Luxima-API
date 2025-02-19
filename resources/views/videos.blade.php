@extends('layouts.master')
@section('title')
    Videos
@endsection
@section('content')
    <x-breadcrumb title="Videos" pagetitle="Elements" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Aspect Auto Videos</h2>
                <div>
                    <iframe class="w-full md:aspect-video lg:aspect-auto"
                        src="https://www.youtube.com/embed/-GfNEDs3ERw"></iframe>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Aspect Videos</h2>
                <div>
                    <iframe class="w-full md:aspect-square lg:aspect-video"
                        src="https://www.youtube.com/embed/-GfNEDs3ERw"></iframe>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Aspect Square Videos</h2>
                <div>
                    <iframe class="w-full aspect-square" src="https://www.youtube.com/embed/-GfNEDs3ERw"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
