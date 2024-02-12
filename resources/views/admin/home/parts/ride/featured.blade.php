    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Featured By</h5>
                <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="page" value="{{ $page = 'ride' }}">
                    <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'featured' }}">
                    @for ($i = 1; $i < 4; $i++)
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-12">Image {{ $i }}</label>
                            <div class="col-12">                    <input class="form-control" name="img[featured_img_{{$i}}]"
                                    accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                            </div>
                            <div class="col-12 mt-2">
                                <img width="150px"
                                    src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/featured_img_'.$i.'.png') }}"
                                    alt="">
                            </div>
                        </div>
                    @endfor
                    <div class="row mb-3">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
