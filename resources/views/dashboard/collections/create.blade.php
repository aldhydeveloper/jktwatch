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
                                <div class="form-group mt-4">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control bg-light text-dark" id="name"
                                        name="name" placeholder="name">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="name">Price</label>
                                    <input type="text" class="form-control bg-light text-dark" id="price"
                                        name="price" placeholder="price">
                                </div>
                                <div class="form-group">
                                    <label for="category">Color</label>
                                    <select class="form-control form-control-lg bg-light" id="color" name="color">
                                        <option class="text-black" value="Black">Black</option>
                                        <option class="text-black" value="Silver">Silver</option>
                                        <option class="text-black" value="Gold">Gold</option>
                                        <option class="text-black" value="Navi">Navi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control form-control-lg bg-light" id="category" name="category">

                                        @foreach ($category as $key => $value)
                                            <option class="text-black" value="{{ $value->id }}">{{ $value->cat_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="size">Size</label>
                                    <select class="form-control form-control-lg bg-light" id="size" name="size">

                                        @foreach ($data_size as $key => $value)
                                            <option class="text-black" value="{{ $value->id }}">{{ $value->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" name="image" class="file-upload-default" id="image">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info bg-light text-dark"
                                            id="image" name="image" placeholder="Upload Image" disabled>
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
