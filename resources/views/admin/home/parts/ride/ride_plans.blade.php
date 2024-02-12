<div class="col-lg-12">
    <div class="card">

        <div class="col-lg-12">
            <div class="m-4">
                <div class="row">
                    @for ($i = 1; $i < 4; $i++)
                        <div class="col-4">
                            <div class="card-body {{ $i == 4 ? '' : 'border_right' }}">
                                <h5 class="card-title">Float Packages {{ $i }}</h5>
                                <form action="{{ route('admin.update_content') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="page" value="{{ $page = 'ride' }}">
                                    <input type="hidden" name="page_subtype"
                                        value="{{ $page_subtype = 'pricing_plan_' . $i}}">

                                    <div class="row mb-3">
                                        <label class="col-12">Name</label>
                                        <div class="col-12">
                                            <input type="text" name="type[plan_name_{{ $i }}]"
                                                class="form-control"
                                                value="{{ $data['plan_name_' . $i] ?? null }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-12">Pricing</label>
                                        <div class="col-12">
                                            <input type="text" name="type[pricing_{{ $i }}]"
                                                class="form-control" value="{{ $data['pricing_' . $i] ?? null }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-12">Description</label>
                                        <div class="col-12">
                                            <input type="text" name="type[pricing_description_{{ $i }}]"
                                                class="form-control"
                                                value="{{ $data['pricing_description_' . $i] ?? null }}">
                                        </div>
                                    </div>

                                        <div class="row mb-3">
                                            <label class="col-12">Features 1</label>
                                            <div class="col-12">
                                                <input type="text" name="type[features_{{ $i }}_1]"
                                                    class="form-control"
                                                    value="{{ $data['features_'.$i.'_1'] ?? null }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-12">Features 2</label>
                                            <div class="col-12">
                                                <input type="text" name="type[features_{{ $i }}_2]"
                                                    class="form-control"
                                                    value="{{ $data['features_'.$i.'_2'] ?? null }}">
                                            </div>
                                        </div>
                                    <div class="row mb-3">
                                        <label for="inputNumber" class="col-12">Package Image</label>
                                        <div class="col-12">
                                            <input class="form-control" name="img[pricing_plan{{ $i }}]"
                                                accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                                        </div>
                                        <div class="col-12 mt-2">
                                            <img width="150px"
                                                src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/pricing_plan' . $i . '.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-12">Swift Ride Pro</label>
                                        <div class="col-12">
                                            <input type="text" name="type[plan_information_{{ $i }}]"
                                                class="form-control"
                                                value="{{ $data['plan_information_' . $i . ''] ?? null }}">
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
                    @endfor
                </div>
            </div>
        </div>
        <hr>
    </div>
</div>
