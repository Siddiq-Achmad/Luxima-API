@extends('layouts.master')
@section('title')
    Images
@endsection
@section('css')
    <!-- Icon Css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/remixicon.css') }}" />
@endsection
@section('content')
    <x-breadcrumb title="Images" pagetitle="Elements" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Images Responsive</h2>
                <div>
                    <img src="{{ URL::asset('build/images/images-6.jpg') }}" class="object-cover w-full md:h-72" alt="">
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Images Rounded</h2>
                <div>
                    <img src="{{ URL::asset('build/images/images-2.jpg') }}" class="object-cover w-full rounded-md md:h-72" alt="">
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Images Circle</h2>
                <div>
                    <img src="{{ URL::asset('build/images/images-3.jpg') }}" class="mx-auto rounded-full h-44 w-44" alt="">
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Images With Ring</h2>
                <div>
                    <img src="{{ URL::asset('build/images/images-4.jpg') }}"
                        class="object-cover w-full rounded ring-offset-4 ring-2 ring-light dark:ring-darkborder md:h-72"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
