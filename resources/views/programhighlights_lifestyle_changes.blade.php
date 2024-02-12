@extends('layouts.app')
@section('css_after')
    <style>
        .navbar_bg {
            background-image: url('{{ asset('frontend/programhighlights/header/header_background_img.png') }}') !important;
        }
    </style>
      <style>
        .navbar_bg::before {
            background: url('{{ asset('header_bg.png') }}') center/cover no-repeat;
            z-index: -1;
            height: 41.7em;
        }

        .navbar_bg::after {
            background: url('{{ asset('frontend/programhighlights/header/header_background_img.png') }}') center/cover no-repeat !important;
            z-index: -2;
            height: 41.5em;
        }
    </style>
@endsection
@section('content')
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
                                    {{ $data['header_heading'] ?? null }} Life style changes
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

<!-- About PHCL  -->
{{-- @dd($data) --}}
<section>
    <div class="about_phcl_page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <img src="{{asset('frontend/programhighlights/programhighlight/programhighlights_img.png')}}" class="mb-lg-4 mb-md-3 mb-3" alt="">
                        <h3 class="highlights_phcl_h3 pb-3">{{ $data['programhighlights_heading'] ?? null }}</h3>
                        <p class="about_phcl_p">{{ $data['programhighlights_description'] ?? null }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Donate Page Cards  -->

<section>
    <div class="container mb-lg-5 pb-lg-3">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <h3 class="highlights_phcl_h3 pt-lg-5 pt-md-4 py-3">Advantages</h3>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-3 col-md-3 col-12">
                <div class="donation_box_page mt-lg-5 mt-md-3 mt-3 mx-lg-2">
                    <div>
                        <img src="{{asset('frontend/programhighlights/advantages_1/our_traction_img_1.png')}}" class="mt-2" alt="">
                        <h3 class="donation_page_mission_class pt-4">{{ $data['programhighlights_1'] ?? null }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="donation_box_page mt-lg-5 mt-md-3 mt-3 mx-lg-2">
                    <div>
                        <img src="{{asset('frontend/programhighlights/advantages_2/our_traction_img_2.png')}}" class="mt-2" alt="">
                        <h3 class="donation_page_mission_class pt-4">{{ $data['programhighlights_2'] ?? null }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="donation_box_page mt-lg-5 mt-md-3 mt-3 mx-lg-2">
                    <div>
                        <img src="{{asset('frontend/programhighlights/advantages_3/our_traction_img_3.png')}}" class="mt-2" alt="">
                        <h3 class="donation_page_mission_class pt-4">{{ $data['programhighlights_3'] ?? null }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="donation_box_page mt-lg-5 mt-md-3 mt-3 mx-lg-2">
                    <div>
                        <img src="{{asset('frontend/programhighlights/advantages_3/our_traction_img_3.png')}}" class="mt-2" alt="">
                        <h3 class="donation_page_mission_class pt-4">{{ $data['programhighlights_4'] ?? null }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
