@extends('layouts.master')
@section('title')
    Tooltips
@endsection
@section('content')
    <x-breadcrumb title="Tooltips" pagetitle="Elements" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Tootlip Basic</h2>
                <div class="flex flex-wrap gap-4">
                    <button type="button" data-tippy-content="Tooltip on top" data-tippy-arrow="true"
                        data-tippy-placement="top"
                        class="transition-all duration-300 border rounded-md tippy-tooltip btn text-purple border-purple hover:bg-purple hover:text-white">Tooltip
                        on top</button>
                    <button type="button" data-tippy-content="Tooltip on right" data-tippy-arrow="true"
                        data-tippy-placement="right"
                        class="transition-all duration-300 border rounded-md tippy-tooltip btn text-purple border-purple hover:bg-purple hover:text-white">Tooltip
                        on right</button>
                    <button type="button" data-tippy-content="Tooltip on bottom" data-tippy-arrow="true"
                        data-tippy-placement="bottom"
                        class="transition-all duration-300 border rounded-md tippy-tooltip btn text-purple border-purple hover:bg-purple hover:text-white">Tooltip
                        on bottom</button>
                    <button type="button" data-tippy-content="Tooltip on left" data-tippy-arrow="true"
                        data-tippy-placement="left"
                        class="transition-all duration-300 border rounded-md tippy-tooltip btn text-purple border-purple hover:bg-purple hover:text-white">Tooltip
                        on left</button>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Tootlip animation</h2>
                <div class="flex flex-wrap gap-4">
                    <button type="button" data-tippy-content="Tooltip animation" data-tippy-arrow="true"
                        data-tippy-animation="scale"
                        class="text-black transition-all duration-300 border rounded-md tippy-tooltip btn border-light hover:bg-light hover:text-black dark:text-white dark:hover:text-black">Tooltip
                        animation</button>
                    <button type="button" data-tippy-content="Tooltip animation" data-tippy-arrow="true"
                        data-tippy-animation="shift-toward"
                        class="text-black transition-all duration-300 border rounded-md tippy-tooltip btn border-light hover:bg-light hover:text-black dark:text-white dark:hover:text-black">Tooltip
                        animation</button>
                    <button type="button" data-tippy-content="Tooltip animation" data-tippy-arrow="true"
                        data-tippy-animation="perspective"
                        class="text-black transition-all duration-300 border rounded-md tippy-tooltip btn border-light hover:bg-light hover:text-black dark:text-white dark:hover:text-black">Tooltip
                        animation</button>
                    <button type="button" data-tippy-content="Tooltip animation" data-tippy-arrow="true"
                        data-tippy-animation="shift-away"
                        class="text-black transition-all duration-300 border rounded-md tippy-tooltip btn border-light hover:bg-light hover:text-black dark:text-white dark:hover:text-black">Tooltip
                        animation</button>

                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Tootlip on click</h2>
                <div class="flex flex-wrap gap-4">
                    <button type="button" data-tippy-content="Tooltip on top" data-tippy-arrow="true"
                        data-tippy-placement="top" data-tippy-trigger="click"
                        class="transition-all duration-300 border rounded-md tippy-tooltip btn text-purple border-purple hover:bg-purple hover:text-white">Tooltip
                        on top</button>
                    <button type="button" data-tippy-content="Tooltip on right" data-tippy-arrow="true"
                        data-tippy-placement="right" data-tippy-trigger="click"
                        class="transition-all duration-300 border rounded-md tippy-tooltip btn text-purple border-purple hover:bg-purple hover:text-white">Tooltip
                        on right</button>
                    <button type="button" data-tippy-content="Tooltip on bottom" data-tippy-arrow="true"
                        data-tippy-placement="bottom" data-tippy-trigger="click"
                        class="transition-all duration-300 border rounded-md tippy-tooltip btn text-purple border-purple hover:bg-purple hover:text-white">Tooltip
                        on bottom</button>
                    <button type="button" data-tippy-content="Tooltip on left" data-tippy-arrow="true"
                        data-tippy-placement="left" data-tippy-trigger="click"
                        class="transition-all duration-300 border rounded-md tippy-tooltip btn text-purple border-purple hover:bg-purple hover:text-white">Tooltip
                        on left</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
@section('scripts')
    <!-- Tooltip JS -->
    <script src="{{ URL::asset('build/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/tippy.min.js') }}"></script>
@endsection
