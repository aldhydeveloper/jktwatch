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

    </div>
@endsection
