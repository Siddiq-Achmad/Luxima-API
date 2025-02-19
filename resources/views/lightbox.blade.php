@extends('layouts.master')
@section('title')
    Lightbox
@endsection
@section('css')
    <!-- Fancybox Css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/fancybox.css') }}" />
@endsection
@section('content')
    <x-breadcrumb title="Lightbox" pagetitle="Components" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Example</h2>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
                    <a href="{{ URL::asset('build/images/images-1.jpg') }}" data-fancybox="gallery">
                        <img src="{{ URL::asset('build/images/images-1.jpg') }}" class="rounded-xl" />
                    </a>
                    <a href="{{ URL::asset('build/images/images-2.jpg') }}" data-fancybox="gallery">
                        <img src="{{ URL::asset('build/images/images-2.jpg') }}" class="rounded-xl" />
                    </a>
                    <a href="{{ URL::asset('build/images/images-3.jpg') }}" data-fancybox="gallery">
                        <img src="{{ URL::asset('build/images/images-3.jpg') }}" class="rounded-xl" />
                    </a>
                    <a href="{{ URL::asset('build/images/images-4.jpg') }}" data-fancybox="gallery">
                        <img src="{{ URL::asset('build/images/images-4.jpg') }}" class="rounded-xl" />
                    </a>
                    <a href="{{ URL::asset('build/images/images-6.jpg') }}" data-fancybox="gallery">
                        <img src="{{ URL::asset('build/images/images-6.jpg') }}" class="rounded-xl" />
                    </a>
                    <a href="{{ URL::asset('build/images/images-7.jpg') }}" data-fancybox="gallery">
                        <img src="{{ URL::asset('build/images/images-7.jpg') }}" class="rounded-xl" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
@section('scripts')
    <!-- Facncybox Js -->
    <script src="{{ URL::asset('build/js/fancybox.umd.js') }}"></script>

    <script>
        Fancybox.bind('[data-fancybox="gallery"]', {});
    </script>
@endsection
