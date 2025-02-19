@extends('layouts.master')
@section('title')
    Chart
@endsection
@section('content')
    <x-breadcrumb title="Chart" pagetitle="Sliced" />
    <!-- Start Breadcrumb -->
    <div>
        <nav class="w-full">
            <ul class="space-y-2 detached-breadcrumb">
                <li class="text-xs dark:text-white/80">Sliced</li>
                <li class="text-xl font-semibold text-black dark:text-white">Chart</li>
            </ul>
        </nav>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Line Chart</h2>
                <div id="linechart" dir="ltr"></div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Area Chart</h2>
                <div id="areachart" dir="ltr"></div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Bar Chart</h2>
                <div id="barchart" dir="ltr"></div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Simple Bar</h2>
                <div id="simplebarchart" dir="ltr"></div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Bar Chart</h2>
                <div id="barchartcenter" dir="ltr"></div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Spline Area Charts</h2>
                <div id="apex_area1" dir="ltr"></div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Basic Donut</h2>
                <div id="basicbonut" dir="ltr"></div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Doughnut chart</h2>
                <div id="doughnutchart" dir="ltr"></div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
@section('scripts')
    <!-- ApexCharts js -->
    <script src="{{ URL::asset('build/js/apexcharts.js') }}"></script>
    <script src="{{ URL::asset('build/js/apex.init.js') }}"></script>
@endsection
