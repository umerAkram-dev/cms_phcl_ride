<div class="col-auto">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Gallery</h5>
            <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="page" value="{{ $page = 'home' }}">
                <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'gallery' }}">
                <div class="row mb-3">
                    <label for="inputPassword" class="col-12">Description</label>
                    <div class="col-12">
                        <textarea class="form-control" name="type[gallery_description]" required style="height: 100px">{{ $data['gallery_description'] ?? null }}</textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            <div class="row">

                @php
                    use Illuminate\Support\Facades\File;
                @endphp
                @for ($i = 1; $i < 4; $i++)
                    <div class="col-4 border_right">
                        <h5 class="card-title">Column {{ $i }} Images</h5>
                        @php
                            $folderPath = public_path('frontend/home/gallery_col_' . $i);
                            if (!is_dir($folderPath)) {
                                if (!mkdir($folderPath, 0777, true)) {
                                    die('Failed to create folder...');
                                }
                            }
                            $files = File::files($folderPath);
                        @endphp
                        @if (count($files) > 0)
                            @foreach ($files as $key => $file)
                                @include('admin.home.parts.gallery.gallery_form')
                            @endforeach
                        @else
                            @include('admin.home.parts.gallery.gallery_form')
                        @endif
                        <button id="addFormBtn" class="btn btn-success" onclick="add_image({{ $i }})">Add Another Image</button>
                    </div>
                @endfor
            </div>

        </div>
    </div>
</div>
<script>
    function add_image(col) {
        var newForm = $(`.dynamic-form-${col}:last`).clone();
        var newKey = Math.random();
        newForm.find('input[name^="img"]').attr('name', `img[gallery_img_col_${col}_${newKey}]`);
        newForm.find('img').attr('src', '').attr('alt', '');
        $(`.dynamic-form-${col}:last`).after(newForm);
    }
</script>
