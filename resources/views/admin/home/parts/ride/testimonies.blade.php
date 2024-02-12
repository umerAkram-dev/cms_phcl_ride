<div class="col-lg-12">
    <div class="card">
        <div class="card-body ">
            <h5 class="card-title">Testimonies</h5>
            <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="page" value="{{ $page = 'ride' }}">
                <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'testimonies' }}">
                <div class="row mb-3">
                    <label class="col-12">Heading</label>
                    <div class="col-12">
                        <input type="text" name="type[testimonies_heading]" class="form-control"
                            value="{{ $data['testimonies_heading'] ?? null }}">
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
                        <div class="col-4 ">
                            <div class="card-body">
                                <h5 class="card-title">Testimonies</h5>
                                <form action="{{ route('admin.update_content') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="page" value="{{ $page = 'ride' }}">
                                    <input type="hidden" name="page_subtype"
                                        value="{{ $page_subtype = 'our_client'}}">
                                    <div class="row mb-3">
                                        <label class="col-12">Description</label>
                                        <div class="col-12">
                                            <textarea class="form-control" name="type[our_client_description]" required style="height: 100px">{{ $data['our_client_description'] ?? null }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputNumber" class="col-12">Client
                                            Image</label>
                                        <div class="col-12">
                                            <input class="form-control" name="img[our_client_img]"
                                                accept="image/png, image/jpeg, image/jpg, image/svg," type="file">

                                        </div>
                                        <div class="col-12 mt-2">
                                            <img width="150px"
                                                src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/our_client_img.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-12">Name</label>
                                        <div class="col-12">
                                            <input type="text" name="type[our_client_name]"
                                                class="form-control"
                                                value="{{ $data['our_client_name'] ?? null }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="row mb-3">
                                                <label for="inputNumber" class="col-12">Role</label>
                                                <div class="col-12">
                                                    <input type="text"
                                                        name="type[our_client_role]"
                                                        class="form-control"
                                                        value="{{ $data['our_client_role'] ?? null }}">
                                                </div>
                                            </div>
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
            </div>
        </div>
    </div>
</div>
