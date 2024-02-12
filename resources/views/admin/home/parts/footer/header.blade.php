<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Header</h5>
            <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="page" value="{{ $page = 'footer' }}">
                <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'header' }}">
                <div class="row mb-3">
                    <label for="inputNumber" class="col-12">Logo</label>
                    <div class="col-12">
                        <input class="form-control" name="img[logo_footer]"
                            accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                    </div>
                    <div class="col-12 mt-2">
                        <img width="150px"
                            src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/logo_footer.png') }}"
                            alt="">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-12">Description</label>
                    <div class="col-12">
                        <textarea class="form-control" name="type[footer_description]" required style="height: 100px">{{ $data['footer_description'] ?? null }}</textarea>
                    </div>
                </div>
                @for ($i = 1; $i < 4; $i++)
                    <div class="row mb-3">
                        <label class="col-12">link {{ $i }}</label>
                        <div class="col-12">
                            <input type="text" name="type[social_link_{{$i}}]" class="form-control"
                                value="{{ $data['social_link_' . $i . ''] ?? null }}">
                        </div>
                    </div>
                @endfor
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
