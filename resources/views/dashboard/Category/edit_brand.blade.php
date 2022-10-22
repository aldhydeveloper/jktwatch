@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="col-md-12
            grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <a href="{{ url('category') }}" class="mdi mdi-keyboard-backspace " id="create_category"
                            style="font-size:21px"></a>

                        <h4>Edit Brand</h4>
                    </div>
                    <form method="POST" action="/brand/{{ $brand->id }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <form class="forms-sample">
                            <div class="form-group  mt-4">
                                <label for="name">Name</label>
                                <input type="text"class="form-control text-light" id="name" name="name"
                                    placeholder="name" value="{{ $brand->name }}">
                            </div>
                            <div class="form-group">
                                <label>Image Cover</label>
                                <input type="file" name="cover" class="file-upload-default" id="cover">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info bg-light text-dark"
                                        id="image" name="image" placeholder="Upload Image" value="{{ $brand->cover }}"
                                        disabled>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Save</button>

                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
