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
                {{-- @include('admin.home.parts.ride.gallery')
                @include('admin.home.parts.ride.traction')
                @include('admin.home.parts.ride.team')
                @include('admin.home.parts.ride.testimonies')
                @include('admin.home.parts.ride.donation') --}}
            </div>
        </section>
    </main>
@endsection
{{-- these are input feilds --}}

{{--
<div class="row mb-3">
    <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
    <div class="col-sm-10">
        <input class="form-control" type="file" id="formFile">
    </div>
</div>
<div class="row mb-3">
    <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
    <div class="col-sm-10">
        <textarea class="form-control" style="height: 100px"></textarea>
    </div>
</div>
<fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
    <div class="col-sm-10">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios"
                id="gridRadios1" value="option1" checked>
            <label class="form-check-label" for="gridRadios1">
                First radio
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios"
                id="gridRadios2" value="option2">
            <label class="form-check-label" for="gridRadios2">
                Second radio
            </label>
        </div>
    </div>
</fieldset>
<div class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
    <div class="col-sm-10">

        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1">
            <label class="form-check-label" for="gridCheck1">
                Example checkbox
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
            <label class="form-check-label" for="gridCheck2">
                Example checkbox 2
            </label>
        </div>

    </div>
</div>

<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Disabled</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" value="Read only / Disabled"
            disabled>
    </div>
</div>

<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Select</label>
    <div class="col-sm-10">
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
</div>

<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Multi Select</label>
    <div class="col-sm-10">
        <select class="form-select" multiple aria-label="multiple select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
</div> --}}
