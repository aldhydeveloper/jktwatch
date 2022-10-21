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
                                <a href="{{ url('size/create') }}" class="mdi mdi-keyboard-backspace " id="create_category"
                                    style="font-size:21px"></a>

                                <h4>Create Collection</h4>
                            </div>
                            <form class="forms-sample ">
                                @csrf
                                <input type="hidden" name="id" value="{{ @$collections->id }}" />
                                <div class="form-group mt-4">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control bg-light text-dark" id="name"
                                        name="name" placeholder="name" value="{{ @$collections->name }}">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="name">Price</label>
                                    <input type="text" class="form-control bg-light text-dark" id="price"
                                        name="price" placeholder="price" value="{{ @$collections->price }}">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="name">Description</label>
                                    <input type="text" class="form-control bg-light text-dark" id="desc"
                                        name="desc" placeholder="description" value="">
                                </div>

                                <div class="form-group mt-4">
                                    <label for="name">Year</label>
                                    <input type="text" class="form-control bg-light text-dark" id="Year"
                                        name="Year" placeholder="description" value="{{ @$collections->year }}">
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 ">
                                        <label for="validationTagsThreshold" class="form-label">Tags</label>
                                        <select class="form-select" id="validationTagsThreshold" name="tags[]" multiple
                                            data-allow-clear="true" data-suggestions-threshold="0">
                                            <option selected disabled hidden value="">Choose a tag...</option>
                                            @foreach ($category as $key => $value)
                                                <option class="text-black" value="category-{{ $value->id }}"
                                                    {{ in_array('category-' . $value->id, $tags) ? 'selected' : '' }}>
                                                    {{ $value->cat_name }}
                                                </option>
                                            @endforeach
                                            @foreach ($data_size as $key => $value)
                                                <option class="text-black" value="size-{{ $value->id }}"
                                                    {{ in_array('size-' . $value->id, $tags) ? 'selected' : '' }}>
                                                    {{ $value->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">Please select a valid tag.</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Image Thumbnail</label>
                                    <input type="file" name="image" class="file-upload-default" id="image">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info bg-light text-dark"
                                            id="image" name="image" placeholder="Upload Image"
                                            value="{{ @$collections->image_thumbnail }}" disabled>
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Image Cover 1</label>
                                    <input type="file" name="image_1" class="file-upload-default" id="image-1">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info bg-light text-dark"
                                            id="image" name="image" placeholder="Upload Image"
                                            value="{{ @$collections->image_1 }}" disabled>
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Image Cover 2</label>
                                    <input type="file" name="image_2" class="file-upload-default" id="image-2">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info bg-light text-dark"
                                            id="image" name="image" placeholder="Upload Image"
                                            value="{{ @$collections->image_2 }}" disabled>
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Image Cover 3</label>
                                    <input type="file" name="image_3" class="file-upload-default" id="image-3">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info bg-light text-dark"
                                            id="image" name="image" placeholder="Upload Image"
                                            value="{{ @$collections->image_3 }}" disabled>
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2 mt-2">Submit</button>
                                <button class="btn btn-dark mt-2">Cancel</button>
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
