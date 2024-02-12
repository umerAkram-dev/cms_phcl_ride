<div class="col-lg-12">
    <div class="card">
        <div class="row">
            <div class="col-12">
                <div class="card-body">
                    <h5 class="card-title">Contact Information</h5>
                    <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="page" value="{{ $page = 'footer' }}">
                        <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'contact_info' }}">
                        @for ($i = 1; $i <= 3; $i++)
                            <div class="row mb-3">
                                <label class="col-12">Contact Info {{ $i }}</label>
                                <div class="col-12">
                                    <input type="text" name="type[contact_info_{{ $i }}]"
                                        class="form-control" value="{{ $data['contact_info_' . $i] ?? null }}">
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
