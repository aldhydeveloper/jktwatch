@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <form action="{{ url('collections') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <a href="{{ url('collections/all') }}" class="mdi mdi-keyboard-backspace "
                                    id="create_category" style="font-size:21px"></a>

                                <h4>Create Collection</h4>
                            </div>
                            <form class="forms-sample ">
                                @csrf
                                <input type="hidden" name="id" value="{{ @$collections->id }}" />
                                <div class="form-group mt-4">
                                    <label for="name">Name</label>
                                    <input type="text"
                                        class="form-control @error('name') is-invalid @enderror bg-light text-dark"
                                        id="name" name="name" placeholder="name" value="{{ @$collections->name }}">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="price">Price</label>
                                    <input type="text"
                                        class="form-control @error('price') is-invalid @enderror bg-light text-dark"
                                        id="price" name="price" placeholder="price"
                                        value="{{ @$collections->price }}">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="desc">Description</label>
                                    <textarea type="text" class="form-control  @error('desc') is-invalid @enderror bg-light text-dark" id="desc"
                                        name="desc" placeholder="description" rows="3" value=""></textarea>
                                </div>

                                <div class="form-group mt-4">
                                    <label for="year">Year</label>
                                    <input type="text"
                                        class="form-control @error('year') is-invalid @enderror bg-light text-dark"
                                        id="year" name="year" placeholder="year" value="{{ @$collections->year }}">
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 ">
                                        <label for="validationTagsThreshold" class="form-label">Tags</label>
                                        <select class="form-select  @error('tags[]') is-invalid @enderror"
                                            id="validationTagsThreshold" name="tags[]" multiple data-allow-clear="true"
                                            data-suggestions-threshold="0">
                                            <option selected disabled hidden value="">Choose a tag...</option>
                                            @foreach ($category as $key => $value)
                                                <option class="text-black" value="category-{{ $value->id }}">
                                                    {{ $value->cat_name }}
                                                </option>
                                            @endforeach
                                            @foreach ($data_size as $key => $value)
                                                <option class="text-black" value="size-{{ $value->id }}">
                                                    {{ $value->name }}
                                                </option>
                                            @endforeach
                                            @foreach ($data_model as $key => $value)
                                                <option class="text-black" value="models-{{ $value->id }}">
                                                    {{ $value->name }}
                                                </option>
                                            @endforeach
                                            @foreach ($data_brand as $key => $value)
                                                <option class="text-black" value="brand-{{ $value->id }}">
                                                    {{ $value->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">Please select a valid tag.</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Image Thumbnail</label>
                                    <input type="file" name="image" class="file-upload-default " id="image">
                                    <div class="input-group col-xs-12">
                                        <input type="text"
                                            class="form-control @error('image') is-invalid @enderror  file-upload-info bg-light text-dark"
                                            id="image" name="image" placeholder="Upload Image  "
                                            value="{{ @$collections->image_thumbnail }}" disabled>
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                        <div class="invalid-feedback ">Please insert image Thumbnail</div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>Image Cover 1</label>
                                    <input type="file" name="image_1" class="file-upload-default" id="image_1">
                                    <div class="input-group col-xs-12">
                                        <input type="text"
                                            class="form-control @error('image_1') is-invalid @enderror  file-upload-info bg-light text-dark"
                                            id="image_1" name="image_1" placeholder="Upload Image"
                                            value="{{ @$collections->image_1 }}" disabled>
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                        <div class="invalid-feedback ">Please insert image Cover 1</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Image Cover 2</label>
                                    <input type="file" name="image_2" class="file-upload-default" id="image_2">
                                    <div class="input-group col-xs-12">
                                        <input type="text"
                                            class="form-control  @error('image_2') is-invalid @enderror  file-upload-info bg-light text-dark"
                                            id="image_2" name="image_2" placeholder="Upload Image"
                                            value="{{ @$collections->image_2 }}" disabled>
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                        <div class="invalid-feedback ">Please insert image Cover 2</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Image Cover 3</label>
                                    <input type="file" name="image_3" class="file-upload-default" id="image_3">
                                    <div class="input-group col-xs-12">
                                        <input type="text"
                                            class="form-control @error('image_3') is-invalid @enderror file-upload-info bg-light text-dark"
                                            id="image_3" name="image_3" placeholder="Upload Image"
                                            value="{{ @$collections->image_3 }}" disabled>
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                        <div class="invalid-feedback ">Please insert image Cover 3</div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2 mt-2">Submit</button>
                                {{-- <button class="btn btn-dark mt-2">Cancel</button> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js" type="module"></script>

    <script type="module">
    import Tags from "https://cdn.jsdelivr.net/gh/lekoala/bootstrap5-tags@master/tags.js";
    Tags.init("select");
  </script>
@endsection
