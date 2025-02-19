@extends('layouts.master')
@section('title')
Radio
@endsection
@section('css')
    <!-- Icon Css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/remixicon.css') }}" />
@endsection
@section('content')
    <x-breadcrumb title="Radio" pagetitle="Forms" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Radio Default</h2>
                <div class="grid grid-cols-1 gap-3">
                    <label class="inline-flex">
                        <input type="radio" name="default_radio" class="form-radio text-purple" checked />
                        <span>Primary</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="default_radio" class="form-radio text-info" checked />
                        <span>Info</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="default_radio" class="form-radio text-success" />
                        <span>Success</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="default_radio" class="form-radio text-warning" />
                        <span>Warning</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="default_radio" class="form-radio text-danger" />
                        <span>Danger</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="default_radio" class="text-black form-radio" />
                        <span>Black</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="default_radio" class="form-radio text-muted" />
                        <span>Muted</span>
                    </label>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Radio Square</h2>
                <div class="grid grid-cols-1 gap-3">
                    <label class="inline-flex">
                        <input type="radio" name="square_radio" class="rounded form-radio text-purple" checked />
                        <span>Primary</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="square_radio" class="rounded form-radio text-info" />
                        <span>Info</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="square_radio" class="rounded form-radio text-success" />
                        <span>Success</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="square_radio" class="rounded form-radio text-warning" />
                        <span>Warning</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="square_radio" class="rounded form-radio text-danger" />
                        <span>Danger</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="square_radio" class="text-black rounded form-radio" />
                        <span>Black</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="square_radio" class="rounded form-radio text-muted" />
                        <span>Muted</span>
                    </label>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Radio Outline</h2>
                <div class="grid grid-cols-1 gap-3">
                    <label class="inline-flex">
                        <input type="radio" name="outline_radio" class="form-radio outborder-purple" />
                        <span>Primary</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="outline_radio" class="form-radio outborder-info" checked />
                        <span>Info</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="outline_radio" class="form-radio outborder-success" />
                        <span>Success</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="outline_radio" class="form-radio outborder-warning" />
                        <span>Warning</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="outline_radio" class="form-radio outborder-danger" />
                        <span>Danger</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="outline_radio" class="form-radio outborder-black" />
                        <span>Black</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="outline_radio" class="form-radio outborder-muted" />
                        <span>Muted</span>
                    </label>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Radio Outline Square</h2>
                <div class="grid grid-cols-1 gap-3">
                    <label class="inline-flex">
                        <input type="radio" name="outline_square_radio" class="rounded form-radio outborder-purple"
                            checked />
                        <span>Primary</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="outline_square_radio" class="rounded form-radio outborder-info" />
                        <span>Info</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="outline_square_radio" class="rounded form-radio outborder-success" />
                        <span>Success</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="outline_square_radio" class="rounded form-radio outborder-warning" />
                        <span>Warning</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="outline_square_radio" class="rounded form-radio outborder-danger" />
                        <span>Danger</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="outline_square_radio" class="rounded form-radio outborder-black" />
                        <span>Black</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="outline_square_radio" class="rounded form-radio outborder-muted" />
                        <span>Muted</span>
                    </label>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Radio Outline With Text
                    Color</h2>
                <div class="grid grid-cols-1 gap-3">
                    <label class="inline-flex">
                        <input type="radio" name="rounded_color_radio" class="form-radio peer outborder-purple" />
                        <span class="peer-checked:text-purple">Primary</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="rounded_color_radio" class="form-radio peer outborder-info"
                            checked />
                        <span class="peer-checked:text-info">Info</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="rounded_color_radio" class="form-radio peer outborder-success" />
                        <span class="peer-checked:text-success">Success</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="rounded_color_radio" class="form-radio peer outborder-warning" />
                        <span class="peer-checked:text-warning">Warning</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="rounded_color_radio" class="form-radio peer outborder-danger" />
                        <span class="peer-checked:text-danger">Danger</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="rounded_color_radio" class="form-radio peer outborder-black" />
                        <span class="peer-checked:text-black">Black</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="rounded_color_radio" class="form-radio peer outborder-muted" />
                        <span class="peer-checked:text-muted">Muted</span>
                    </label>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Radio Outline With Text
                    Color</h2>
                <div class="grid grid-cols-1 gap-3">
                    <label class="inline-flex">
                        <input type="radio" name="square_color_radio"
                            class="rounded form-radio peer outborder-purple" />
                        <span class="peer-checked:text-purple">Primary</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="square_color_radio" class="rounded form-radio peer outborder-info"
                            checked />
                        <span class="peer-checked:text-info">Info</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="square_color_radio"
                            class="rounded form-radio peer outborder-success" />
                        <span class="peer-checked:text-success">Success</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="square_color_radio"
                            class="rounded form-radio peer outborder-warning" />
                        <span class="peer-checked:text-warning">Warning</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="square_color_radio"
                            class="rounded form-radio peer outborder-danger" />
                        <span class="peer-checked:text-danger">Danger</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="square_color_radio"
                            class="rounded form-radio peer outborder-black" />
                        <span class="peer-checked:text-black">Black</span>
                    </label>
                    <label class="inline-flex">
                        <input type="radio" name="square_color_radio"
                            class="rounded form-radio peer outborder-muted" />
                        <span class="peer-checked:text-muted">Muted</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
