@extends('admin.layouts.app')
@section('css_after')
    <style>
        .border_right {
            border-right: 2px solid #dee2e6;
        }
    </style>
@endsection
@section('content')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                @include('admin.home.parts.ride.header')
                @include('admin.home.parts.ride.about_ride')
                @include('admin.home.parts.ride.rides')
                @include('admin.home.parts.ride.our_package')
                @include('admin.home.parts.ride.driver_experenice')
                @include('admin.home.parts.ride.driver_information')
                @include('admin.home.parts.ride.ride_plans')
                @include('admin.home.parts.ride.testimonies')
                @include('admin.home.parts.ride.featured')
            </div>
        </section>
    </main>
@endsection
