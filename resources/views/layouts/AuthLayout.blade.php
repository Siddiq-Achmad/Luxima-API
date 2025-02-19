
<!DOCTYPE html>
<html lang="en" dir="ltr" x-data="{ direction: 'ltr' }" x-bind:dir="direction">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Tailwind CSS Admin & Dashboard Template" />
    <meta name="author" content="SRBThemes" />

    <!-- Site Tiltle -->
    <title>@yield('title') | LUXIMA - Luxima API BackEnd</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico') }}">

    <!-- Icon Css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/remixicon.css') }}" />

    @yield('css')

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/style.css') }}">
</head>

<body x-data="main" class="relative overflow-x-hidden text-sm antialiased font-normal text-black font-cerebri dark:text-white vertical" :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.fullscreen ? 'full' : '',$store.app.mode]">


    <!-- Start Layout -->
    <div class="bg-[#f9fbfd] dark:bg-dark text-black min-h-screen relative z-10">

        <!-- Start Background Images -->
        <div class="bg-[url('../images/bg-main.png')] bg-black dark:bg-purple min-h-[220px] sm:min-h-[50vh] bg-bottom w-full -z-10 absolute"></div>
        <!-- End Background Images -->

        @include('layouts.authHeader')
        
        @yield('content')

        @include('layouts.authFooter')

    </div>
    <!-- End Layout -->

    {{-- <button type="button" class="fixed z-50 px-4 text-white border-gray-200 shadow-lg h-11 ltr:right-0 rtl:left-0 bg-purple ltr:rounded-l-md rtl:rounded-r-md top-1/3" @click="direction = (direction === 'ltr') ? 'rtl' : 'ltr'"><span class="rtl:hidden">RTL</span> <span class="ltr:hidden">LTR</span></button> --}}

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