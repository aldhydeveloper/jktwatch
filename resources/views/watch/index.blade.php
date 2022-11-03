@extends('watch.layouts.main')

@section('content')
    <?php $num = 0; ?>
    @foreach ($collection as $key => $value)
        <?php $num++; ?>
    @endforeach
    <div class=" ml-4 d-lg-block d-none ">{{ $num }} product</div>
    <main class="grid">
        @csrf

        @foreach ($collection as $key => $value)
            <article>
                <a href="{{ url('watch/form') . '/' . $value->id }}" class="btn">
                    <img src="{{ asset('storage/' . @$value->image_thumbnail) }}" class="img-ns" />
                    <div class="description">
                        <div class="watch-tags">{{ implode(', ', $value->models) }}
                            {{ implode(', ', $value->size) }}
                            {{ implode(', ', $value->brand) }}</div>
                        <div class="watch-title">{{ $value->name }}</div>
                        <div class="watch-price">IDR
                            {{ number_format($value->price, 0) }}</div>
                        <div class="watch-year"> {{ $value->year }}</div>
                    </div>
                </a>
            </article>
        @endforeach

        @foreach ($collection as $key => $value)
            <article>
                <a href="{{ url('watch/form') . '/' . $value->id }}" class="btn">
                    <img src="{{ asset('storage/' . @$value->image_thumbnail) }}" class="img-ns" />
                    <div class="description">
                        <div class="watch-tags">{{ implode(', ', $value->models) }}
                            {{ implode(', ', $value->size) }}
                            {{ implode(', ', $value->brand) }}</div>
                        <div class="watch-title">{{ $value->name }}</div>
                        <div class="watch-price">IDR
                            {{ number_format($value->price, 0) }}</div>
                        <div class="watch-year"> {{ $value->year }}</div>
                    </div>
                </a>
            </article>
        @endforeach
    </main>
@endsection
