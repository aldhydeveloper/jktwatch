@extends('watch.layouts.main')

@section('content')
    <?php $num = 0; ?>
    @foreach ($collection as $key => $value)
        <?php $num++; ?>
    @endforeach
    <div class="text-center mb-3">{{ $num }} product</div>

    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 ">

        @csrf

        @foreach ($collection as $key => $value)
            @php $value = (object) $value @endphp
            <a class="btn" href="{{ url('watch/form') . '/' . $value->id }}">
                <div class="col">
                    <div class="card">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('storage/' . @$value->image_thumbnail) }}" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="card-body text-center  text-dark">
                                <div class="watches-name">{{ $value->name }}</div>
                                <div class="watches-tags">{{ implode(', ', $value->models) }}
                                    {{ implode(', ', $value->size) }}
                                    {{ implode(', ', $value->brand) }}
                                </div>
                                <div class="watches-price">IDR
                                    {{ number_format($value->price, 0) }}</div>
                                <p class="watches-years">
                                    {{ $value->year }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    {{-- <div class="row">

        @foreach ($collection as $key => $value)
            @php $value = (object) $value @endphp
            <a class="btn watches-card" href="{{ url('watch/form') . '/' . $value->id }}">
                <div class="card">
                    <img class=" card-img-top" src="{{ asset('storage/' . $value->image_thumbnail) }}" focusable="false"
                        style="object-fit: cover;">
                    </img>

                    <div class="card-body text-center  text-dark">
                        <div class="watches-name">{{ $value->name }}</div>
                        <div class="watches-tags">{{ implode(', ', $value->models) }}
                            {{ implode(', ', $value->size) }}
                            {{ implode(', ', $value->brand) }}
                        </div>
                        <div class="watches-price">IDR
                            {{ number_format($value->price, 0) }}</div>
                        <p class="watches-years">
                            {{ $value->year }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div> --}}
@endsection
