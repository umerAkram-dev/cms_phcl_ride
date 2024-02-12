<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Header</h5>
            <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="page" value="{{ $page = 'header' }}">
                <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'header' }}">
                <div class="row mb-3">
                    <label for="inputNumber" class="col-12">Tittle Icon</label>
                    <div class="col-12">
                        <input class="form-control" name="img[tittle_icon]"
                            accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                    </div>
                    <div class="col-12 mt-2">
                        <img width="150px"
                            src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/tittle_icon.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-12">Logo</label>
                    <div class="col-12">
                        <input class="form-control" name="img[logo_header]"
                            accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                    </div>
                    <div class="col-12 mt-2">
                        <img width="150px"
                            src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/logo_header.png') }}"
                            alt="">
                    </div>
                </div>
                    <div class="row mb-3">
                        <label class="col-12">Header Text</label>
                        <div class="col-12">
                            <input type="text" name="type[header_text]" class="form-control"
                                value="{{ $data['header_text'] ?? null }}">
                        </div>
                    </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
