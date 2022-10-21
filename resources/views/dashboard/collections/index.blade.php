@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper ">

        <div class="row">
            <div class="col-xxl-9 col-lg-10 col-l2">
                <div class="row">

                    {{-- <div class="col-12 grid-margin">
                        <div class="card py-2 px-2">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <h4>{{ $title }}</h4>
                                <a href="{{ url('collections/create') }}" class="btn btn-info btn-fw text-center"
                                    id="create_category" style="width: 30px; ">+</a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-12">
                        <div class="row">
                            @foreach ($collection as $key => $value)
                                @php $value = (object) $value @endphp
                                <div class="col-lg-3 col-12">
                                    <a href="{{ url('collections/form') . '/' . $value->id }}">
                                        <div class="card shadow-sm  my-3">
                                            <img class=" card-img-top" width="80%" height="225"
                                                src="{{ asset('storage/' . $value->image_thumbnail) }}" focusable="false">
                                            </img>

                                            <div class="card-body text-center">
                                                <h4>{{ $value->name }}</h4>
                                                <h5>{{ $value->color }} - {{ implode(', ', $value->size) }}</h5>
                                                <a>IDR {{ number_format($value->price, 0) }}</a>
                                                <p>2022</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xxl-3 col-lg-2 col-l2">
                <div class="wrap-tag py-4 px-3">
                    <a class="btn text-center text-white" href="{{ url('collections/all') }}">Reset</a>
                    <hr />
                    <div class="row">
                        <div class="col-12 mb-2">
                            <p class="mb-1">Size :</p>
                            <a href="{{ url()->current() }}{{ $category ? '?category=' . $category . ($dial ? '&' : '') : ($dial ? '?' : '') }}{{ $dial ? 'dial=' . $dial . ($type ? '&' : '') : ($type ? '?' : '') }}{{ $type ? '&type=' . $type : '' }}"
                                class="btn  mb-3 {{ !$size ? 'btn-dark' : 'btn-light' }}">All</a>
                            @foreach ($tags->size as $key => $value)
                                <a href="{{ url()->current() }}?size={{ $key }}{{ $category ? '&category=' . $category : '' }}{{ $dial ? '&dial=' . $dial : '' }}{{ $type ? '&type=' . $type : '' }}"
                                    class="btn  mb-3 {{ $size == $key ? 'btn-dark' : 'btn-light' }}">{{ $value }}</a>
                            @endforeach
                        </div>
                        <div class="col-12 mb-2">
                            <p class="mb-1">Kategori :</p>
                            <a href="{{ url()->current() }}{{ $size ? '?size=' . $size . ($dial ? '&' : '') : ($dial ? '?' : '') }}{{ $dial ? 'dial=' . $dial . ($type ? '&' : '') : ($type ? '?' : '') }}{{ $type ? 'type=' . $type : '' }}"
                                class="btn  mb-3 {{ !$category ? 'btn-dark' : 'btn-light' }}">All</a>
                            @foreach ($tags->category as $key => $value)
                                <a href="{{ url()->current() }}?category={{ $key }}{{ $size ? '&size=' . $size : '' }}{{ $dial ? '&dial=' . $dial : '' }}{{ $type ? '&type=' . $type : '' }}"
                                    class="btn  mb-3 {{ $category == $key ? 'btn-dark' : 'btn-light' }}">{{ $value }}</a>
                            @endforeach
                        </div>
                        <div class="col-12 mb-2">
                            <p class="mb-1">Dial :</p>
                            <a href="{{ url()->current() }}{{ $category ? '?category=' . $category . ($size ? '&' : '') : ($size ? '?' : '') }}{{ $size ? 'size=' . $size . ($type ? '&' : '') : ($type ? '?' : '') }}{{ $type ? 'type=' . $type : '' }}"
                                class="btn  mb-3 {{ !$dial ? 'btn-dark' : 'btn-light' }}">All</a>
                            @foreach ($tags->dial as $key => $value)
                                <a href="{{ url()->current() }}?dial={{ $key }}{{ $size ? '&size=' . $size : '' }}{{ $category ? '&category=' . $category : '' }}{{ $type ? '&type=' . $type : '' }}"
                                    class="btn  mb-3 {{ $dial == $key ? 'btn-dark' : 'btn-light' }}">{{ $value }}</a>
                            @endforeach
                        </div>
                        {{-- <div class="col-12 mb-2">
                            <p class="mb-1">Type :</p>
                            <a href="{{ url()->current() }}{{ $category ? '&category=' . $category : '' }}{{ $dial ? '&dial=' . $dial : '' }}{{ $size ? '&category=' . $size : '' }}"
                                class="btn  mb-3 {{ !$type ? 'btn-dark' : 'btn-light' }}">All</a>
                            @foreach ($data->type as $key => $value)
                                <a href="{{ url()->current() }}?type={{ $key }}{{ $size ? '&size=' . $size : '' }}{{ $category ? '&category=' . $category : '' }}{{ $dial ? '&category=' . $dial : '' }}"
                                    class="btn  mb-3 {{ $type == $key ? 'btn-dark' : 'btn-light' }}">{{ $value }}</a>
                            @endforeach
                        </div> --}}
                    </div>
                    <a href="{{ url('collections/create') }}" class="btn btn-info d-block position-absolute">Create</a>
                </div>
            </div>
        </div>


    </div>
@endsection
