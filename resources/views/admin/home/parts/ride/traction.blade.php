<div class="col-lg-12">
    <div class="card">
        <div class="row">
            @for ($i = 1; $i < 5; $i++)
                <div class="col-4 ">
                    <div class="card-body {{ $i == 4 ? '': 'border_right' }}">
                        <h5 class="card-title">Our Traction {{ $i }}</h5>
                        <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="page" value="{{ $page = 'home' }}">
                            <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'our_traction_'.$i.'' }}">
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-12">Our Traction
                                    Image</label>
                                <div class="col-12">
                                    <input class="form-control" name="img[our_traction_img_{{ $i }}]"
                                        accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                                </div>
                                <div class="col-12 mt-2">
                                    <img width="100px"
                                        src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/our_traction_img_'.$i.'.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-12">Heading</label>
                                <div class="col-12">
                                    <input type="text" name="type[our_traction_heading_{{ $i }}]" class="form-control"
                                        value="{{ $data['our_traction_heading_'.$i.''] ?? null }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-12">Description</label>
                                <div class="col-12">
                                    <textarea class="form-control" name="type[our_traction_{{ $i }}_description]" required style="height: 100px">{{ $data['our_traction_'.$i.'_description'] ?? null }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            @endfor
            {{-- <div class="col-4 ">
                <div class="card-body border_right">
                    <h5 class="card-title">Our Traction 2</h5>
                    <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="page" value="{{ $page = 'home' }}">
                        <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'our_traction_2' }}">
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-12">Our Traction
                                Image</label>
                            <div class="col-12">
                                <input class="form-control" name="img[our_traction_img_2]"
                                    accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                            </div>
                            <div class="col-12 mt-2">
                                <img width="100px"
                                    src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/our_traction_img_2.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-12">Heading</label>
                            <div class="col-12">
                                <input type="text" name="type[our_traction_heading_2]" class="form-control"
                                    value="{{ $data['our_traction_heading_2'] ?? null }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-12">Description</label>
                            <div class="col-12">
                                <textarea class="form-control" name="type[our_traction_2_description]" required style="height: 100px">{{ $data['our_traction_2_description'] ?? null }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <div class="card-body border_right">
                    <h5 class="card-title">Our Traction 3</h5>
                    <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="page" value="{{ $page = 'home' }}">
                        <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'our_traction_3' }}">
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-12">Our Traction
                                Image</label>
                            <div class="col-12">
                                <input class="form-control" name="img[our_traction_img_3]"
                                    accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                            </div>
                            <div class="col-12 mt-2">
                                <img width="100px"
                                    src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/our_traction_img_3.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-12">Heading</label>
                            <div class="col-12">
                                <input type="our_traction_heading_3" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-12">Description</label>
                            <div class="col-12">
                                <textarea class="form-control" name="our_traction_3_description" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <div class="card-body">
                    <h5 class="card-title">Our Traction 4</h5>
                    <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="page" value="{{ $page = 'home' }}">
                        <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'our_traction_4' }}">
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-12">Our Traction
                                Image</label>
                            <div class="col-12">
                                <input class="form-control" name="img[our_traction_img_4]"
                                    accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                            </div>
                            <div class="col-12 mt-2">
                                <img width="100px"
                                    src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/our_traction_img_4.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-12">Heading</label>
                            <div class="col-12">
                                <input type="our_traction_heading_4" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-12">Description</label>
                            <div class="col-12">
                                <textarea class="form-control" name="our_traction_4_description" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}
        </div>
    </div>
</div>
