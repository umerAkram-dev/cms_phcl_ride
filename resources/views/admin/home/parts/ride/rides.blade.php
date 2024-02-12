<div class="col-lg-12">
    <div class="card">
        <div class="row">
            @for ($i = 1; $i < 4; $i++)
                <div class="col-4">
                    <div class="card-body border_right">
                        <h5 class="card-title">Our Rides {{ $i }}</h5>
                        <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="page" value="{{ $page = 'ride' }}">
                            <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'ride_' . $i . '' }}">
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-12">Rides Box
                                    Image</label>
                                <div class="col-12">
                                    <input class="form-control" name="img[ride_box_img_{{ $i }}]"
                                        accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                                </div>
                                <div class="col-12 mt-2">
                                    <img width="100px"
                                        src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/ride_box_img_' . $i . '.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-12">Heading</label>
                                <div class="col-12">
                                    <input type="text" name="type[ride_heading_{{ $i }}]"
                                        class="form-control" value="{{ $data['ride_heading_' . $i . ''] ?? null }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-12">Description</label>
                                <div class="col-12">
                                    <textarea class="form-control" name="type[ride_{{ $i }}_description]" required style="height: 100px">{{ $data['ride_' . $i . '_description'] ?? null }}</textarea>
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
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="card">
        <div class="row">
            @for ($i = 1; $i < 4; $i++)
                <div class="col-4">
                    <div class="card-body border_right">
                        <h5 class="card-title">Our Service {{ $i }}</h5>
                        <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="page" value="{{ $page = 'ride' }}">
                            <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'Service_' . $i . '' }}">
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-12">Service Box
                                    Image</label>
                                <div class="col-12">
                                    <input class="form-control" name="img[service_img_{{ $i }}]"
                                        accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                                </div>
                                <div class="col-12 mt-2">
                                    <img width="100px"
                                        src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/service_img_' . $i . '.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-12">Heading</label>
                                <div class="col-12">
                                    <input type="text" name="type[service_heading_{{ $i }}]"
                                        class="form-control" value="{{ $data['service_heading_' . $i . ''] ?? null }}">
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
            <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="page" value="{{ $page = 'ride' }}">
                <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'Service' }}">
                <div class="row mb-3">
                    <label class="col-12">Bottom Description</label>
                    <div class="col-12">
                        <textarea class="form-control" name="type[service_description]" required style="height: 100px">{{ $data['service_description'] ?? null }}</textarea>
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
</div>
