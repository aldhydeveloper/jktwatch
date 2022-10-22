@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <form method="POST" action="{{ url('brand') }}">
            @csrf

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Brand</h4>
                        <form class="forms-sample">
                            <div class="form-group  mt-4">
                                <label for="name">Name</label>
                                <input type="text"class="form-control text-light" id="name" name="name"
                                    placeholder="name">
                            </div>
                            <div class="form-group">
                                <label>Image Cover</label>
                                <input type="file" name="image" class="file-upload-default" id="image">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info bg-light text-dark"
                                        id="image" name="image" placeholder="Upload Image" disabled>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                            <button class="btn btn-dark">Cancel</button>

                        </form>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection
