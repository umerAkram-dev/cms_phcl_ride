    <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data" class="dynamic-form-{{ $i }}">
        @csrf
        @php
            try {
                $image_name = $file->getFilename();
                $image_name = str_replace('.png', '', $image_name);
            } catch (\Throwable $th) {
                $image_name = 'gallery_img_col_' . $i . '_' . rand();
            }
            $image_name_full = $image_name . '.png';
        @endphp
        <input type="hidden" name="page" value="{{ $page = 'home' }}">
        <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'gallery_col_' . $i }}">
        <div class="row mb-3">
            <label for="inputNumber" class="col-12">Background Image</label>
            <div class="col-12">
                <input class="form-control" name="img[{{ $image_name }}]"
                    accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
            </div>
            <div class="col-12 mt-2">
                <img width="150px"
                    src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/' . $image_name_full) }}"
                    alt="">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger"
                    href="{{ route('admin.delete_img', [$page_subtype, $image_name_full]) }}">Delete</a>
            </div>
        </div>
    </form>
