@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <h4>All Colection</h4>
                        <a href="{{ url('collections/create') }}" class="btn btn-info btn-rounded btn-fw" id="create_category"
                            style="width: 40px; font-size:21px">+</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">

            @foreach ($data_collection as $key => $value)
                <?php $size = [];
                foreach ($data_size as $key => $s) {
                    if ($value->size_id === $s->id) {
                        $size = $s;
                    }
                } ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class=" card-img-top" width="80%" height="225"
                            src="{{ asset('storage/' . $value->image) }}" focusable="false">
                        </img>

                        <div class="card-body text-center">
                            <h4>{{ $value->name }}</h4>
                            <h5>{{ $value->color }} - {{ $size->name }}</h5>
                            <a href="/collections/Man">IDR {{ $value->price }}</a>
                            <input type="text" value={{ request('sizee') }} name="sizee">
                            <p>2022</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
