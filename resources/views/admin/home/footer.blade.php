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
                @include('admin.home.parts.footer.header')
                @include('admin.home.parts.footer.about')
                @include('admin.home.parts.footer.contact_info')
                @include('admin.home.parts.footer.bottom_img')
            </div>
        </section>
    </main>
@endsection
