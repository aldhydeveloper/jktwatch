@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <form method="POST" action="/category/{{ $category->id }}">
            @method('PUT')
            @csrf

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Category</h4>
                        <form class="forms-sample">
                            <div class="form-group  mt-4">
                                <label for="name">Name</label>
                                <input type="text"class="form-control text-light" id="cat_name" name="cat_name"
                                    placeholder="name" value="{{ $category->cat_name }}">
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
