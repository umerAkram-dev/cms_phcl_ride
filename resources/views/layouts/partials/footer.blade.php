@php
    $data = [];
    $contents = \App\Content::where('page', 'footer')->get();
    foreach ($contents as $value) {
        $data[$value->type] = $value->content;
    }
    $social_media_logos = ['youtube', 'facebook', 'whatapp'];
@endphp
<footor>
    <div class="footor-link">
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <img src="{{ asset('frontend/footer/header/logo_footer.png') }}" alt="">
                        <p class="footer_p_link pt-lg-4 pt-md-3 pt-3">{{ $data['footer_description'] ?? null }}</p>
                        <div class="pt-3 pb-3">
                            @foreach ($social_media_logos as $key => $social_media_logo)
                                <?php $indexedKey = $key + 1; ?>
                                <a href="{{ $data['social_link_' . $indexedKey . ''] ?? null }}" style="text-decoration: none">
                                    <img src="./assets/images/{{ $social_media_logo }}.png" class="me-4"
                                        alt="">
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">

                        <h3 class="pchl_info pt-4">PCHL Info</h3>
                        @for ($i = 1; $i < 4; $i++)
                            <a href="{{ $data['about_link_' . $i . ''] ?? null }}" style="text-decoration: none">
                                <p class="pchl_info_p pt-lg-3 pt-md-3 pt-3 mb-2">{{ $data['about_name_' . $i] ?? null}}
                                </p>
                            </a>
                        @endfor
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="ps-lg-5">
                            <h3 class="pchl_info pt-4">Contact Info</h3>
                            @for ($i = 1; $i < 4; $i++)
                                <p class="pchl_info_p pt-lg-3 pt-md-3 pt-3 mb-2">{{ $data['contact_info_' . $i ]??null }}
                                </p>
                            @endfor

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class=" border_bottom_white mt-3">
                <div class="footer_copy_right">
                    <div class="footer_logo">
                        <a class="me-5" style="text-decoration: none" href="https://azsic.live/">

                            <img width="60px" src="{{ asset('assets/images/PPI_Logo.png') }}"
                                alt="logo">
                        </a>
                        <a href="https://azsic.live/">
                            <img width="60px" src="{{ asset('frontend/footer/bottom_imgs/bottom_img_2.png') }}"
                                alt="logo">
                        </a>
                    </div>
                    &nbsp;
                    <p>Designed &amp; Developed by PivotPoint Innovation © All Rights Reserved 2023</p>
                </div>
            </div>
        </div>
    </div>
</footor>
