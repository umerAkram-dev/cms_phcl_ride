@extends('layouts.app')
@section('css_after')
    <style>
        .navbar_bg::before {
            background: url('{{ asset('header_bg.png') }}') center/cover no-repeat;
            z-index: -1;
            height: 41.7em;
        }

        .navbar_bg::after {
            background: url('{{ asset('frontend/donation/header/header_background_img.png') }}') center/cover no-repeat !important;
            z-index: -2;
            height: 41.5em;
        }
    </style>
@endsection
@section('content')
    {{-- @dd($data) --}}
    <section>
        <div class="navbar_bg">
            <nav class="navbar navbar-expand-lg bg-transparent">
                @include('layouts.partials.navbar')
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="">
                            <div class="">
                                <div>
                                    <h3 class="rehabilitation_box_h3_about">
                                        {{ $data['header_heading'] ?? null }}
                                    </h3>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12"></div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Donations Section  -->

    <section>
        <div>
            <div class="container pt-lg-5 mt-lg-4 pb-lg-5">
                <div class="row align-items-center h-100">
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="text-center">

                            <img src="{{ asset('frontend/donation/header/donation_img.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="text-center">
                            <h3 class="cooking_classes_h3 py-lg-5 py-md-4 py-3">Your donations help countless <br> lives
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Progress bar Section  -->

    <section>
        <div class="container">
            <div class="row pb-4">
                <div class="col-12">
                    <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="18"
                        aria-valuemin="0" aria-valuemax="100" style="height: 33px;">
                        <div class="progress-bar progress_gray_bg" style="width: {{ $data['percentage'] ?? null }}%">
                            {{ $data['percentage'] ?? null }}%</div>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6 col-md-6 col-12 pe-lg-0">
                    <div class="first_half_bar text-center py-2">
                        <span class="">
                            {{ $data['donation_amount'] ?? null }}
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 ps-lg-0">
                    <div class="second_half_bar text-center py-2">
                        <span class="">
                            {{ $data['donation_amount_2'] ?? null }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-12">
                    <a href="{{ $data['btn_link'] ?? '' }}" style="text-decoration: none;">
                        <div class="donate_bar text-center">
                            <span class="">Donate</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Donate Page Cards  -->

    <section>
        <div class="container mb-lg-5 pb-lg-4">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h3 class="donations_classes_h3 py-lg-5 py-md-4  py-3">What your donations <br> Accomplish</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-4 mb-5">
                @for ($i = 1; $i < 5; $i++)
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="donation_box_page mt-lg-5 mt-md-3 mt-3 mx-lg-2">
                            <div>
                                <img src="{{ asset('frontend/donation/donations_accomplish_' . $i . '/donations_accomplish_img_' . $i . '.png') }}"
                                    alt="">
                                <h3 class="donation_page_mission_class pt-4">
                                    {{ $data['donations_accomplish_heading_' . $i . ''] ?? null }}</h3>
                                <p class="donations_phcl_p_about_page pt-2 pb-3">
                                    {{ $data['donations_accomplish_' . $i . '_description'] ?? null }}</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
