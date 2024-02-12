<div class="col-lg-12">
    <div class="card">
        <div class="card-body ">
            <h5 class="card-title">Driver Experenice</h5>
            <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="page" value="{{ $page = 'ride' }}">
                <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'driver_experenice' }}">
                <div class="row mb-3">
                    <label for="inputNumber" class="col-12">Top Image</label>
                    <div class="col-12">
                        <input class="form-control" name="img[driver_experenice]"
                            accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                    </div>
                    <div class="col-12 mt-2">
                        <img width="150px"
                            src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/driver_experenice.png') }}"
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
                    @for ($i = 1; $i < 4; $i++)
                        <div class="col-4 ">
                            <div class="card-body border_right">
                                <h5 class="card-title">Driver Experenice {{ $i }}</h5>
                                <form action="{{ route('admin.update_content') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="page" value="{{ $page = 'ride' }}">
                                    <input type="hidden" name="page_subtype"
                                        value="{{ $page_subtype = 'driver_experenice_'.$i.'' }}">
                                    <div class="row mb-3">
                                        <label for="inputNumber" class="col-12">Driver Experenice Image</label>
                                        <div class="col-12">
                                            <input class="form-control"
                                                name="img[driver_experenice_img_{{ $i }}]"
                                                accept="image/png, image/jpeg, image/jpg, image/svg," type="file">

                                        </div>
                                        <div class="col-12 mt-2">
                                            <img width="150px"
                                                src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/driver_experenice_img_' . $i . '.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-12">Heading</label>
                                        <div class="col-12">
                                            <input type="text" name="type[driver_experenice_{{ $i }}]"
                                                class="form-control"
                                                value="{{ $data['driver_experenice_' . $i] ?? null }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-12">Description</label>
                                        <div class="col-12">
                                            <textarea class="form-control" name="type[driver_experenice_{{ $i }}_description]" required
                                                style="height: 100px">{{ $data['driver_experenice_' . $i . '_description'] ?? null }}</textarea>
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
        @for ($i = 1; $i < 4; $i++)
            <div class="card-body ">
                <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="page" value="{{ $page = 'ride' }}">
                    <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'driver_experenice' }}">
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-12">Bottom Image</label>
                        <div class="col-12">
                            <input class="form-control" name="img[driver_experenice_bottom_img{{$i}}]"
                                accept="image/png, image/jpeg, image/jpg, image/svg," type="file">

                        </div>
                        <div class="col-12 mt-2">
                            <img width="150px"
                                src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/driver_experenice_bottom_img'.$i.'.png') }}"
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
        @endfor
    </div>
</div>
