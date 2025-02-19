<!DOCTYPE html>
<html lang="en" dir="ltr" x-data="{ direction: 'ltr' }" x-bind:dir="direction">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Tailwind CSS Admin & Dashboard Template" />
    <meta name="author" content="SRBThemes" />

    <!-- Site Tiltle -->
    <title>@yield('title') | LUXIMA API BackEnd</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico') }}">

    @yield('css')

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/style.css') }}">
</head>

<body x-data="main" class="relative overflow-x-hidden text-sm antialiased font-normal text-black font-cerebri dark:text-white vertical detached detached-simple" :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.fullscreen ? 'full' : '',$store.app.mode]">

    <!-- Start Layout -->
    <div class="bg-[#f9fbfd] dark:bg-dark dark:text-darkmuted text-black">
        <!-- Start detached bg -->
        <div class="bg-[url('../images/bg-main.png')] bg-black min-h-[220px] sm:min-h-[250px] bg-bottom fixed hidden w-full -z-50 detached-img"></div>
        <!-- End detached bg -->

        <!-- Start Menu Sidebar Olverlay -->
        <div x-cloak class="fixed inset-0 bg-black/60 dark:bg-dark/90 z-[999] lg:hidden" :class="{'hidden' : !$store.app.sidebar}" @click="$store.app.toggleSidebar()"></div>
        <!-- End Menu Sidebar Olverlay -->

        <!-- Start Main Content -->
        <div class="flex mx-auto main-container">
            @include('layouts.sidebar')

            <!-- Start Content Area -->
            <div class="flex-1 main-content">
                @include('layouts.topbar')

                <!-- Start Content -->
                <div
                    class="h-[calc(100vh-60px)]  relative overflow-y-auto overflow-x-hidden p-4 space-y-4 detached-content">

                    @yield('content')

                    @include('layouts.footer')
                </div>
                <!-- End Content -->
            </div>
            <!-- End Content Area -->
        </div>
    </div>
    <!-- End Layout -->

    <button type="button"
        class="fixed z-50 px-4 text-white border-gray-200 shadow-lg h-11 ltr:right-0 rtl:left-0 bg-purple ltr:rounded-l-md rtl:rounded-r-md top-1/3"
        @click="direction = (direction === 'ltr') ? 'rtl' : 'ltr'"><span class="rtl:hidden">RTL</span> <span
            class="ltr:hidden">LTR</span></button>

    <!-- All javascirpt -->
    <!-- Alpine js -->
    <script src="{{ URL::asset('build/js/alpine-collaspe.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/alpine-persist.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/alpine.min.js') }}" defer></script>

    @yield('scripts')

    <!-- Custom js -->
    <script src="{{ URL::asset('build/js/custom.js') }}"></script>

</body>

</html>
