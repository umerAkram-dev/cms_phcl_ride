<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">About PCHL</h5>
            <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="page" value="{{ $page = 'home' }}">
                <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'about' }}">
                <div class="row mb-3">
                    <label for="inputPassword" class="col-12">Description</label>
                    <div class="col-12">
                        <textarea class="form-control" name="type[about_pchl_description]" required style="height: 100px">{{ $data['about_pchl_description'] ?? null }}</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword" class="col-12">Vedio Link</label>
                    <div class="col-12">
                        <textarea class="form-control" name="type[about_pchl_link]" required style="height: 100px">{{ $data['about_pchl_link'] ?? null }}</textarea>
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
