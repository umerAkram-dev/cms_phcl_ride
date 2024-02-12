@extends('layouts.app')
@section('css_after')
    {{-- <style>
        .navbar_bg {
            background-image: url('{{ asset('frontend/about_us/header/header_background_img.png') }}') !important;
        }
    </style> --}}
      <style>
        .navbar_bg::before {
            background: url('{{ asset('header_bg.png') }}') center/cover no-repeat;
            z-index: -1;
            height: 41.7em;
        }

        .navbar_bg::after {
            background: url('{{ asset('frontend/about_us/header/header_background_img.png') }}') center/cover no-repeat;
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

    <!-- About PHCL  -->

    <section>
        <div class="about_phcl_page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <h3 class="about_phcl_h3">About PCHL</h3>
                            <p class="about_phcl_p">{{ $data['about_description'] ?? null }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Page Cards  -->

    <section>
        <div class="container">
            <div class="row mt-lg-4">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about_page_box mt-lg-5 mt-md-3 mt-3">
                        <div>
                            <img src="{{ asset('frontend/about_us/about_pchl_1/about_pchl_img_1.png') }}" alt="">
                            <h3 class="about_page_mission_class pt-4">{{ $data['about_pchl_heading_1'] ?? null }}</h3>
                            <p class="about_phcl_p_about_page pt-2">{{ $data['about_pchl_1_description'] ?? null }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about_page_box mt-lg-5 mt-md-3 mt-3">
                        <div>
                            <img src="{{ asset('frontend/about_us/about_pchl_2/about_pchl_img_2.png') }}" alt="">
                            <h3 class="about_page_mission_class pt-4">{{ $data['about_pchl_heading_2'] ?? null }}</h3>
                            <p class="about_phcl_p_about_page pt-2">{{ $data['about_pchl_2_description'] ?? null }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet Our Teem Section  -->

    <section>
        <div class="gallery_top_bottom_space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h3 class="cooking_classes_h3">Meet our Team</h3>
                            <p class="cooking_classes_p pb-lg-5 pb-3">{{ $data['our_team_description'] ?? null }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="text-center">
                            <img src="{{ asset('frontend/about_us/out_team1/our_teammate_img_1.png') }}" alt="">
                        </div>
                        <div class="team_box">
                            <div class="d-flex align-items-start h-100">
                                <div>
                                    <img src="./assets/images/Group 9416.png" alt="">
                                </div>
                                <div>
                                    <h3 class="team_member_name mt-3">{{ $data['our_teammate_heading_1'] ?? null }}</h3>
                                    <p class="cooking_classes_p mb-3">{{ $data['our_teammate_1_description'] ?? null }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="text-center">
                            <img src="{{ asset('frontend/about_us/out_team1/our_teammate_img_1.png') }}" alt="">
                        </div>
                        <div class="team_box">
                            <div class="d-flex align-items-start h-100">
                                <div>
                                    <img src="./assets/images/Group 9416.png" alt="">
                                </div>
                                <div>
                                    <h3 class="team_member_name mt-3">{{ $data['our_teammate_heading_2'] ?? null }}</h3>
                                    <p class="cooking_classes_p mb-3">{{ $data['our_teammate_2_description'] ?? null }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="text-center">
                            <img src="{{ asset('frontend/about_us/out_team3/our_teammate_img_3.png') }}" alt="">
                        </div>
                        <div class="team_box">
                            <div class="d-flex align-items-start h-100">
                                <div>
                                    <img src="./assets/images/Group 9416.png" alt="">
                                </div>
                                <div>
                                    <h3 class="team_member_name mt-3">{{ $data['our_teammate_heading_3'] ?? null }}</h3>
                                    <p class="cooking_classes_p mb-3">{{ $data['our_teammate_3_description'] ?? null }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section  -->

    <section class="mb-5">
             <div class="gallery_top_bottom_space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h3 class="cooking_classes_h3">Gallery</h3>
                            <p class="cooking_classes_p pb-lg-5 pb-3">{{ $data['gallery_description'] ?? null }}</p>
                        </div>
                    </div>
                </div>
                @php
                    use Illuminate\Support\Facades\File;
                @endphp
                <div class="row">
                    <div class="col-12">

                        <div class="parent-container">
                            @for ($i = 1; $i < 4; $i++)
                                @php
                                    $folderPath = public_path('frontend/home/gallery_col_'.$i);
                                    if (!is_dir($folderPath)) {
                                        if (!mkdir($folderPath, 0777, true)) {
                                            die('Failed to create folder...');
                                        }
                                    }
                                    $files = File::files($folderPath);
                                @endphp

                                <div class="child-container">
                                    @foreach ($files as $file)
                                    <a href="{{ asset('frontend/home/gallery_col_'.$i.'/' . $file->getFilename()) }}"  target="_blank">
                                        <img src="{{ asset('frontend/home/gallery_col_'.$i.'/' . $file->getFilename()) }}"
                                            width="100%" height="auto">
                                        </a>
                                    @endforeach
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
