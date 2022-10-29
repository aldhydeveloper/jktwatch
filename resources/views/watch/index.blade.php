@extends('watch.layouts.main')

@section('content')
    <div class="row">

        <div class="col-xxl-9 col-lg-10 col-l2">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        @foreach ($collection as $key => $value)
                            @php $value = (object) $value @endphp
                            <div class="col-lg-3 col-12">
                                <a href="{{ url('collections/form') . '/' . $value->id }}">
                                    <div class="card shadow-sm  my-3 ">
                                        <img class=" card-img-top" width="80%" height="225"
                                            src="{{ asset('storage/' . $value->image_thumbnail) }}" focusable="false"
                                            style="object-fit: cover;">
                                        </img>

                                        <div class="card-body text-center  text-dark">
                                            <div class="fs-4 fw-lighter fw-bold">{{ $value->name }}</div>
                                            <div class="fw-lighter my-1 fst-italic">{{ implode(', ', $value->models) }}
                                                {{ implode(', ', $value->size) }}
                                                {{ implode(', ', $value->brand) }}
                                            </div>
                                            <div class="fw-lighter fw-bold my-2">IDR
                                                {{ number_format($value->price, 0) }}</div>
                                            <p class="fs-4 ">
                                                {{ $value->year }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
