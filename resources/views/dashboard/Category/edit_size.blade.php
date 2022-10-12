@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <form method="POST" action="/size/{{ $size->id }}">
            @method('PUT')
            @csrf

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Size</h4>
                        <form class="forms-sample">
                            <div class="form-group  mt-4">
                                <label for="name">Name</label>
                                <input type="text"class="form-control text-light" id="name" name="name"
                                    placeholder="name" value="{{ $size->name }}">
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
