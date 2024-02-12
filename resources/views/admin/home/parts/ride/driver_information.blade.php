<div class="col-lg-12">
    <div class="card">
        <div class="card-body ">
            <h5 class="card-title">Driver Information</h5>
            <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="page" value="{{ $page = 'ride' }}">
                <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'driver_information' }}">
                <div class="row mb-3">
                    <label for="inputNumber" class="col-12">Top Image</label>
                    <div class="col-12">
                        <input class="form-control" name="img[driver_information]"
                            accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                    </div>
                    <div class="col-12 mt-2">
                        <img width="150px"
                            src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/driver_information.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <hr>
        <div class="col-lg-12">
            <div class="m-4">
                <div class="row">
                    @for ($i = 1; $i < 5; $i++)
                        <div class="col-4 ">
                            <div class="card-body {{$i == 4 ? "" : "border_right"}}">
                                <h5 class="card-title">Driver Information {{ $i }}</h5>
                                <form action="{{ route('admin.update_content') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="page" value="{{ $page = 'ride' }}">
                                    <input type="hidden" name="page_subtype"
                                        value="{{ $page_subtype = 'driver_information' }}">
                                    <div class="row mb-3">
                                        <label for="inputNumber" class="col-12">Driver Information Image</label>
                                        <div class="col-12">
                                            <input class="form-control"
                                                name="img[driver_information_img_{{ $i }}]"
                                                accept="image/png, image/jpeg, image/jpg, image/svg," type="file">

                                        </div>
                                        <div class="col-12 mt-2">
                                            <img width="150px"
                                                src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/driver_information_img_' . $i . '.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-12">Heading</label>
                                        <div class="col-12">
                                            <input type="text" name="type[driver_information_{{ $i }}]"
                                                class="form-control"
                                                value="{{ $data['driver_information_' . $i . ''] ?? null }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-12">Description</label>
                                        <div class="col-12">
                                            <textarea class="form-control" name="type[driver_information_{{ $i }}_description]" required
                                                style="height: 100px">{{ $data['driver_information_' . $i . '_description'] ?? null }}</textarea>
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
        <hr>
            <div class="card-body ">
                <h5 class="card-title">Driver Information</h5>
                <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="page" value="{{ $page = 'ride' }}">
                    <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'driver_information' }}">
                    <div class="row mb-3">
                        <label class="col-12">Bottom Description</label>
                        <div class="col-12">
                            <textarea class="form-control" name="type[driver_information_bottom_description]" required
                                style="height: 100px">{{ $data['driver_information_bottom_description'] ?? null }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</div>
