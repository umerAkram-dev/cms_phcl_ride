<div class="col-lg-12">
    <div class="card">
        <div class="row">
            @for ($i = 1; $i <= 3; $i++)
                <div class="col-4">
                    <div class="card-body border_right">
                        <h5 class="card-title">Our Services {{ $i }}</h5>
                        <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="page" value="{{ $page = 'home' }}">
                            <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'our_service_' . $i }}">
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-12">Service Box Image</label>
                                <div class="col-12">
                                    <input class="form-control" name="img[service_box_img_{{ $i }}]"
                                        accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                                </div>
                                <div class="col-12 mt-2">
                                    <img width="100px"
                                        src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/service_box_img_' . $i . '.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-12">Heading</label>
                                <div class="col-12">
                                    <input type="text" name="type[our_service_heading_{{ $i }}]"
                                        class="form-control" value="{{ $data['our_service_heading_' . $i] ?? null }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-12">Link</label>
                                <div class="col-12">
                                    <textarea class="form-control" name="type[service_link_{{$i}}]" required style="height: 50px">{{ $data['service_link_'.$i] ?? null }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-12">Description</label>
                                <div class="col-12">
                                    <textarea class="form-control" name="type[our_services_{{ $i }}_description]" required style="height: 100px">{{ $data['our_services_' . $i . '_description'] ?? null }}</textarea>
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
