<div class="col-lg-12">
    <div class="card">
        <div class="row">
            <div class="col-12">
                <div class="card-body">
                    <h5 class="card-title">Bottom Images</h5>
                    <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="page" value="{{ $page = 'footer' }}">
                        <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'bottom_imgs' }}">
                        @for ($i = 1; $i < 3; $i++)
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-12">Bottom Img {{$i}}</label>
                                <div class="col-12">
                                    <input class="form-control" name="img[bottom_img_{{$i}}]"
                                        accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                                </div>
                                <div class="col-12 mt-2">
                                    <img width="150px"
                                        src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/bottom_img_'.$i.'.png') }}"
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
    </div>
</div>
