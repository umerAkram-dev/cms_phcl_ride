<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">About PCHL</h5>
            <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="page" value="{{ $page = 'footer' }}">
                <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'about' }}">
                @for ($i = 1; $i < 4; $i++)
                    <div class="row mb-3">
                        <label class="col-12">Name {{ $i }}</label>
                        <div class="col-12">
                            <input type="text" name="type[about_name_{{ $i }}]" class="form-control"
                                value="{{ $data['about_name_' . $i] ?? null }}">
                        </div>
                    </div>
                @endfor
                @for ($i = 1; $i < 4; $i++)
                    <div class="row mb-3">
                        <label class="col-12">Link {{ $i }}</label>
                        <div class="col-12">
                            <input type="text" name="type[about_link_{{ $i }}]" class="form-control"
                                value="{{ $data['about_link_' . $i . ''] ?? null }}">
                        </div>
                    </div>
                @endfor
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
