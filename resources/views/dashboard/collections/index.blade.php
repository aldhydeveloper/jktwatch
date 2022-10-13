@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper ">
        <div class="col-12 grid-margin">
            <div class="card py-2 px-2">
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <h4>{{ $title }}</h4>
                    <a href="{{ url('collections/create') }}" class="btn btn-info btn-fw text-center" id="create_category"
                        style="width: 30px; ">+</a>
                </div>
            </div>
        </div>

        <a href="{{ url()->current() }}" class="btn  my-3 {{ !request()->size ? 'btn-dark' : 'btn-light' }}">All</a>
        @foreach ($data_size as $key => $value)
            <a href="{{ url()->current() }}?size={{ $value->id }}"
                class="btn  my-3 {{ request()->size == $value->id ? 'btn-dark' : 'btn-light' }}">{{ $value->name }}</a>
        @endforeach

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
                            <a>IDR {{ number_format($value->price, 0) }}</a>
                            <p>2022</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
