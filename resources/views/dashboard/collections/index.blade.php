@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper ">
        <div class="col-12 grid-margin">
            <div class="card py-2 px-2">
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <h4>COLLECTIONS</h4>
                    <a href="{{ url('collections/create') }}" class="btn btn-info btn-fw text-center" id="create_category"
                        style="width: 30px; ">+</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-12">
                <span>Size :</span>
                <a href="{{ url()->current() }}{{ $category ? '?category=' . $category : '' }}{{ $dial ? '&dial=' . $dial : '' }}{{ $type ? '&category=' . $type : '' }}"
                    class="btn  my-3 {{ !$size ? 'btn-dark' : 'btn-light' }}">All</a>
                @foreach ($data->size as $key => $value)
                    <a href="{{ url()->current() }}?size={{ $key }}{{ $category ? '&category=' . $category : '' }}{{ $dial ? '&dial=' . $dial : '' }}{{ $type ? '&category=' . $type : '' }}"
                        class="btn  my-3 {{ $size == $key ? 'btn-dark' : 'btn-light' }}">{{ $value }}</a>
                @endforeach
            </div>
            <div class="col-lg-3 col-12">
                <span>Kategori :</span>
                <a href="{{ url()->current() }}{{ $size ? '&size=' . $category : '' }}{{ $dial ? '&dial=' . $dial : '' }}{{ $type ? '&category=' . $type : '' }}"
                    class="btn  my-3 {{ !$category ? 'btn-dark' : 'btn-light' }}">All</a>
                @foreach ($data->category as $key => $value)
                    <a href="{{ url()->current() }}?category={{ $key }}{{ $size ? '&size=' . $size : '' }}{{ $dial ? '&dial=' . $dial : '' }}{{ $type ? '&category=' . $type : '' }}"
                        class="btn  my-3 {{ $category == $key ? 'btn-dark' : 'btn-light' }}">{{ $value }}</a>
                @endforeach
            </div>
            <div class="col-lg-3 col-12">
                <span>Dial :</span>
                <a href="{{ url()->current() }}{{ $category ? '&category=' . $category : '' }}{{ $size ? '&dial=' . $size : '' }}{{ $type ? '&category=' . $type : '' }}"
                    class="btn  my-3 {{ !$dial ? 'btn-dark' : 'btn-light' }}">All</a>
                @foreach ($data->dial as $key => $value)
                    <a href="{{ url()->current() }}?dial={{ $key }}{{ $size ? '&size=' . $size : '' }}{{ $category ? '&category=' . $category : '' }}{{ $type ? '&type=' . $type : '' }}"
                        class="btn  my-3 {{ $dial == $key ? 'btn-dark' : 'btn-light' }}">{{ $value }}</a>
                @endforeach
            </div>
            <div class="col-lg-3 col-12">
                <span>Type :</span>
                <a href="{{ url()->current() }}{{ $category ? '&category=' . $category : '' }}{{ $dial ? '&dial=' . $dial : '' }}{{ $size ? '&category=' . $size : '' }}"
                    class="btn  my-3 {{ !$type ? 'btn-dark' : 'btn-light' }}">All</a>
                @foreach ($data->type as $key => $value)
                    <a href="{{ url()->current() }}?type={{ $key }}{{ $size ? '&size=' . $size : '' }}{{ $category ? '&category=' . $category : '' }}{{ $dial ? '&category=' . $dial : '' }}"
                        class="btn  my-3 {{ $type == $key ? 'btn-dark' : 'btn-light' }}">{{ $value }}</a>
                @endforeach
            </div>
        </div>


        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">

            @foreach ($data->collection as $key => $value)
                @php $value = (object) $value @endphp
                <div class="col">
                    <div class="card shadow-sm">
                        <img class=" card-img-top" width="80%" height="225"
                            src="{{ asset('storage/' . $value->image_thumbnail) }}" focusable="false">
                        </img>

                        <div class="card-body text-center">
                            <h4>{{ $value->name }}</h4>
                            <h5>{{ $value->color }} - {{ $value->size['name'] }}</h5>
                            <a>IDR {{ number_format($value->price, 0) }}</a>
                            <p>2022</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
