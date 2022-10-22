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
                                                <h5>{{ implode(', ', $value->models) }} {{ implode(', ', $value->size) }}
                                                    {{ implode(', ', $value->brand) }}
                                                </h5>
                                                <a>IDR {{ number_format($value->price, 0) }}</a>
                                                <p>{{ $value->year }}</p>
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

                    <div class="d-flex flex-row justify-content-between align-items-center ">
                        <h4>Filter</h4>
                        <a class="btn btn-outline-secondary text-center" href="{{ url('collections/all') }}">Reset</a>
                    </div>
                    <hr class="mt-4" />
                    <div class="row">
                        <div class="col-12 mb-2 mt-3">

                            <p class="mb-1">Brand :</p>
                            <select class="form-select " aria-label="Default select example"
                                onchange="window.location.href=this.value;">
                                <option
                                    value=" {{ url()->current() }}{{ $category ? '&category=' . $category : '' }}{{ $models ? '&models=' . $models : '' }}{{ $size ? '&category=' . $size : '' }}">
                                    All</option>

                                @foreach ($tags->brand as $key => $value)
                                    <option
                                        value="{{ url()->current() }}?brand={{ $key }}{{ $size ? '&size=' . $size : '' }}{{ $category ? '&category=' . $category : '' }}{{ $models ? '&category=' . $models : '' }}"
                                        {{ $brand == $key ? 'selected' : '' }}>
                                        {{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mb-2 mt-3">
                            <p class="mb-1">Gender :</p>
                            <a href="{{ url()->current() }}{{ $size ? '?size=' . $size . ($models ? '&' : '') : ($models ? '?' : '') }}{{ $models ? 'models=' . $models . ($brand ? '&' : '') : ($brand ? '?' : '') }}{{ $brand ? 'brand=' . $brand : '' }}"
                                class="btn  mb-3 {{ !$category ? 'btn-light' : 'btn-dark' }}">All</a>
                            @foreach ($tags->category as $key => $value)
                                <a href="{{ url()->current() }}?category={{ $key }}{{ $size ? '&size=' . $size : '' }}{{ $models ? '&models=' . $models : '' }}{{ $brand ? '&brand=' . $brand : '' }}"
                                    class="btn  mb-3 {{ $category == $key ? 'btn-light' : 'btn-dark' }}">{{ $value }}</a>
                            @endforeach
                        </div>
                        <div class="col-12 mb-2">
                            <p class="mb-1">Size :</p>
                            <a href="{{ url()->current() }}{{ $category ? '?category=' . $category . ($models ? '&' : '') : ($models ? '?' : '') }}{{ $models ? 'models=' . $models . ($brand ? '&' : '') : ($brand ? '?' : '') }}{{ $brand ? '&brand=' . $brand : '' }}"
                                class="btn  mb-3 {{ !$size ? 'btn-light' : 'btn-dark' }}">All</a>
                            @foreach ($tags->size as $key => $value)
                                <a href="{{ url()->current() }}?size={{ $key }}{{ $category ? '&category=' . $category : '' }}{{ $models ? '&models=' . $models : '' }}{{ $brand ? '&brand=' . $brand : '' }}"
                                    class="btn  mb-3 {{ $size == $key ? 'btn-light' : 'btn-dark' }}">{{ $value }}</a>
                            @endforeach
                        </div>
                        <div class="col-12 mb-2">
                            <p class="mb-1">Model :</p>
                            <a href="{{ url()->current() }}{{ $category ? '?category=' . $category . ($size ? '&' : '') : ($size ? '?' : '') }}{{ $size ? 'size=' . $size . ($brand ? '&' : '') : ($brand ? '?' : '') }}{{ $brand ? 'brand=' . $brand : '' }}"
                                class="btn  mb-3 {{ !$models ? 'btn-light' : 'btn-dark' }}">All</a>
                            @foreach ($tags->models as $key => $value)
                                <a href="{{ url()->current() }}?models={{ $key }}{{ $size ? '&size=' . $size : '' }}{{ $category ? '&category=' . $category : '' }}{{ $brand ? '&brand=' . $brand : '' }}"
                                    class="btn  mb-3 {{ $models == $key ? 'btn-light' : 'btn-dark' }}">{{ $value }}</a>
                            @endforeach
                        </div>
                        {{-- <div class="col-12 mb-2">
                            <p class="mb-1">brand :</p>
                            <a href="{{ url()->current() }}{{ $category ? '&category=' . $category : '' }}{{ $models ? '&models=' . $models : '' }}{{ $size ? '&category=' . $size : '' }}"
                                class="btn  mb-3 {{ !$brand ? 'btn-dark' : 'btn-light' }}">All</a>
                            @foreach ($data->brand as $key => $value)
                                <a href="{{ url()->current() }}?brand={{ $key }}{{ $size ? '&size=' . $size : '' }}{{ $category ? '&category=' . $category : '' }}{{ $models ? '&category=' . $models : '' }}"
                                    class="btn  mb-3 {{ $brand == $key ? 'btn-dark' : 'btn-light' }}">{{ $value }}</a>
                            @endforeach
                        </div> --}}
                    </div>
                    <a href="{{ url('collections/create') }}" class="btn btn-info d-block position-absolute">Create</a>
                </div>
            </div>
        </div>


    </div>
@endsection
