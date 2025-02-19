@extends('layouts.master')
@section('title')
Validation
@endsection
@section('css')
    <!-- Icon Css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/remixicon.css') }}" />
@endsection
@section('content')
    <x-breadcrumb title="Validation" pagetitle="Forms" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Validation Wrong</h2>
                <form class="space-y-4">
                    <div>
                        <input type="text" placeholder="First Name"
                            class="form-input text-danger !border-danger placeholder:text-danger" required />
                        <p class="mt-1 text-danger">Please fill the Name</p>
                    </div>
                    <div>
                        <input type="email" placeholder="Email Type" class="form-input" required />
                    </div>
                    <div>
                        <input type="password" placeholder="Password" class="form-input" required />
                    </div>
                    <div>
                        <input type="password" placeholder="Confirm Password" class="form-input" required />
                    </div>
                    <div>
                        <input type="submit"
                            class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]"
                            value="Submit">
                    </div>
                </form>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Validation Complate</h2>
                <form class="space-y-4">
                    <div>
                        <input type="text" placeholder="First Name"
                            class="form-input text-success !border-success placeholder:text-success" required />
                        <p class="mt-1 text-success">Please fill the Name</p>
                    </div>
                    <div>
                        <input type="email" placeholder="Email Type" class="form-input" required />
                    </div>
                    <div>
                        <input type="password" placeholder="Password" class="form-input" required />
                    </div>
                    <div>
                        <input type="password" placeholder="Confirm Password" class="form-input" required />
                    </div>
                    <div>
                        <input type="submit"
                            class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]"
                            value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
