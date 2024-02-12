<div class="col-lg-12">
    <div>
        <div class="row">
            @for ($i = 1; $i < 5; $i++)
                <div class="col-4 ">
                    <div class="card-body {{ $i == 4 ? '': 'border_right' }}">
                        <h5 class="card-title">Advantages {{ $i }}</h5>
                        <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="page" value="{{ $page = 'programhighlights_'.$type.'' }}">
                            <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'advantages_'.$i.'' }}">
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-12">Advantages
                                    Image</label>
                                <div class="col-12">
                                    <input class="form-control" name="img[our_traction_img_{{ $i }}]"
                                        accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                                </div>
                                <div class="col-12 mt-2">
                                    <img width="100px"
                                        src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/our_traction_img_'.$i.'.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-12">Heading</label>
                                <div class="col-12">
                                    <input type="text" name="type[programhighlights_{{ $i }}]" class="form-control"
                                        value="{{ $data['programhighlights_'.$i.''] ?? null }}">
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
