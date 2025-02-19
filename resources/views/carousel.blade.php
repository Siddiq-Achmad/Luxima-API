@extends('layouts.master')
@section('title')
    Carousel
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/css/swiper-bundle.css') }}" />
@endsection
@section('content')
    <x-breadcrumb title="Carousel" pagetitle="Components" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Basic Carousel</h2>
                <div class="swiper SwiperDefault" dir="ltr">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-1.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-2.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-3.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-4.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-5.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Basic Carousel With Arrow
                </h2>
                <div class="swiper SwiperwithArrows" dir="ltr">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-6.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-7.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-2.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-4.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-5.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                    </div>
                    <div class="text-white swiper-button-next"></div>
                    <div class="text-white swiper-button-prev"></div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Basic Carousel With
                    pagination</h2>
                <div class="swiper SwiperwithPagination" dir="ltr">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-5.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-4.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-2.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-6.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-7.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Basic Carousel With
                    progress</h2>
                <div class="swiper SwiperwithProgress" dir="ltr">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-4.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-3.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-2.jpg') }}" alt="slider"
                                class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-6.jpg') }}"
                                alt="slider" class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-7.jpg') }}"
                                alt="slider" class="object-cover w-full max-h-96" /></div>
                    </div>
                    <div class="text-white swiper-button-next"></div>
                    <div class="text-white swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Basic Carousel With
                    Multiple slides</h2>
                <div class="swiper SwiperMultiple" dir="ltr">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-7.jpg') }}"
                                alt="slider" class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-6.jpg') }}"
                                alt="slider" class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-2.jpg') }}"
                                alt="slider" class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-4.jpg') }}"
                                alt="slider" class="object-cover w-full max-h-96" /></div>
                        <div class="swiper-slide"><img src="{{ URL::asset('build/images/images-3.jpg') }}"
                                alt="slider" class="object-cover w-full max-h-96" /></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
@section('scripts')
    <!-- Swiper Slider Js -->
    <script src="{{ URL::asset('build/js/swiper-bundle.min.js') }}"></script>
    <script>
        var swiper = new Swiper(".SwiperDefault", {});
        var swiper = new Swiper(".SwiperwithArrows", {
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        var swiper = new Swiper(".SwiperwithPagination", {
            pagination: {
                el: ".swiper-pagination",
            },
        });
        var swiper = new Swiper(".SwiperwithProgress", {
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        var swiper = new Swiper(".SwiperMultiple", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
                }
            }
        });
    </script>
@endsection
