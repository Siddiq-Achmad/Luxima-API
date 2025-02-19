@extends('layouts.master')
@section('title')
    Calender
@endsection
@section('content')
    <x-breadcrumb title="Calender" pagetitle="Pages" />

    <div id='calendar'></div>
@endsection
@section('scripts')
    <script src='{{ URL::asset('build/js/index.global.min.js') }}'></script>
    <script src='{{ URL::asset('build/js/calender.js') }}'></script>
@endsection
