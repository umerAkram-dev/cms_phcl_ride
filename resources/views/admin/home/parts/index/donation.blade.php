<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Donations</h5>
            <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="page" value="{{ $page = 'home' }}">
                <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'donation' }}">
                <div class="row mb-3">
                    <label class="col-12">Donation Amount</label>
                    <div class="col-12">
                        <input type="text" name="type[donation_amount]" class="form-control"
                            value="{{ $data['donation_amount'] ?? null }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-12">Donation Amount 2</label>
                    <div class="col-12">
                        <input type="text" name="type[donation_amount_2]" class="form-control"
                            value="{{ $data['donation_amount_2'] ?? null }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-12">Image</label>
                    <div class="col-12">
                        <input class="form-control" name="img[donation_img]"
                            accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                    </div>
                    <div class="col-12 mt-2">
                        <img width="150px" src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/donation_img.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-12">Btn Link </label>
                    <div class="col-12">
                        <input type="text" name="type[btn_link]" class="form-control"
                            value="{{ $data['btn_link'] ?? null }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-12">Percentage </label>
                    <div class="col-12">
                        <input type="number" name="type[percentage]" class="form-control"
                            value="{{ $data['percentage'] ?? null }}">
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
