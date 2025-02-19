@extends('layouts.master')
@section('title')
Typography
@endsection
@section('content')
    <x-breadcrumb title="Typography" pagetitle="Elements" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Headings</h2>
                <div class="flex flex-col gap-3">
                    <h1 class="text-4xl font-semibold text-black dark:text-darkmuted">Sliced heading</h1>
                    <h2 class="text-3xl font-semibold text-black dark:text-darkmuted">Sliced heading</h2>
                    <h3 class="text-2xl font-semibold text-black dark:text-darkmuted">Sliced heading</h3>
                    <h4 class="text-xl font-semibold text-black dark:text-darkmuted">Sliced Headings</h4>
                    <h5 class="text-lg font-semibold text-black dark:text-darkmuted">Sliced heading</h5>
                    <h6 class="text-sm font-semibold text-black dark:text-darkmuted">Sliced heading</h6>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Font Weight</h2>
                <div class="flex flex-col gap-3">
                    <p class="text-lg font-light">Sliced Tailwind Admin</p>
                    <p class="text-lg font-normal">Sliced Tailwind Admin</p>
                    <p class="text-lg font-medium">Sliced Tailwind Admin</p>
                    <p class="text-lg font-semibold">Sliced Tailwind Admin</p>
                    <p class="text-lg font-bold">Sliced Tailwind Admin</p>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Text Left</h2>
                <div class="ltr:text-left rtl:text-right">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable.</p>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Text Left</h2>
                <div class="text-center">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable.</p>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Text Right</h2>
                <div class="ltr:text-right rtl:text-left">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable.</p>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Text justify</h2>
                <div class="text-justify">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable but the majority have suffered alteration in some form, by injected humour.</p>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Text Color</h2>
                <div class="flex flex-col gap-3">
                    <p class="text-purple">Sliced Tailwind Admin</p>
                    <p class="text-info">Sliced Tailwind Admin</p>
                    <p class="text-success">Sliced Tailwind Admin</p>
                    <p class="text-warning">Sliced Tailwind Admin</p>
                    <p class="text-danger">Sliced Tailwind Admin</p>
                    <p class="text-black">Sliced Tailwind Admin</p>
                    <p class="text-muted">Sliced Tailwind Admin</p>
                    <p class="text-light">Sliced Tailwind Admin</p>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Text Decoration</h2>
                <div class="flex flex-col gap-3">
                    <p class="underline">Sliced Tailwind Admin</p>
                    <p class="overline">Sliced Tailwind Admin</p>
                    <p class="line-through">Sliced Tailwind Admin</p>
                    <p class="underline decoration-double">Sliced Tailwind Admin</p>
                    <p class="underline decoration-wavy">Sliced Tailwind Admin</p>
                    <p class="underline decoration-4">Sliced Tailwind Admin</p>
                    <p class="underline decoration-dotted">Sliced Tailwind Admin</p>
                    <p class="underline decoration-dashed">Sliced Tailwind Admin</p>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Text Transforming</h2>
                <div class="flex flex-col gap-3">
                    <p class="normal-case">Sliced Tailwind Admin</p>
                    <p class="uppercase">Sliced Tailwind Admin</p>
                    <p class="lowercase">Sliced Tailwind Admin</p>
                    <p class="capitalize">Sliced Tailwind Admin</p>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Text Indent</h2>
                <div>
                    <p class="indent-10">So I started to walk into the water. I won't lie to you boys, I was terrified. But
                        I pressed on, and as I made my way past the breakers a strange calm came over me. I don't know if it
                        was divine intervention or the kinship of all living things but I tell you Jerry at that moment, I
                        was a marine biologist.</p>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Text Truncate</h2>
                <div>
                    <p class="overflow-hidden truncate whitespace-nowrap">So I started to walk into the water. I won't lie
                        to you boys, I was terrified. But I pressed on, and as I made my way past the breakers a strange
                        calm came over me. I don't know if it was divine intervention or the kinship of all living things
                        but I tell you Jerry at that moment, I was a marine biologist.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
