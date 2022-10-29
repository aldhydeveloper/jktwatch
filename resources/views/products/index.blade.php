@extends('products.layouts.main')

@section('container')
    <div class="col-lg-12 col-md-12 text-center">
        <a href="{{ route('home') }}"><img src="{{ asset('img/logo_white.png') }}" alt="logo" class="logo-all"></a>
    </div>
    <section class="py-2 text-light">

        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <div class="swiper mySwiper2" style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="card-img-top mb-5 mb-md-0"
                                    src="{{ asset('storage/' . @$collections->image_thumbnail) }}" alt="..." />
                            </div>
                            <div class="swiper-slide">
                                <img class="card-img-top mb-5 mb-md-0"
                                    src="{{ asset('storage/' . @$collections->image_1) }}" alt="..." />
                            </div>
                            <div class="swiper-slide">
                                <img class="card-img-top mb-5 mb-md-0"
                                    src="{{ asset('storage/' . @$collections->image_2) }}" alt="..." />
                            </div>
                            <div class="swiper-slide">
                                <img class="card-img-top mb-5 mb-md-0"
                                    src="{{ asset('storage/' . @$collections->image_3) }}" alt="..." />
                            </div>
                        </div>

                        <div class="swiper-button-next ns-none"></div>
                        <div class="swiper-button-prev ns-none"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="card-img-top mb-5 mb-md-0"
                                    src="{{ asset('storage/' . @$collections->image_thumbnail) }}" />
                            </div>
                            <div class="swiper-slide">
                                <img class="card-img-top mb-5 mb-md-0"
                                    src="{{ asset('storage/' . @$collections->image_1) }}" />
                            </div>
                            <div class="swiper-slide">
                                <img class="card-img-top mb-5 mb-md-0"
                                    src="{{ asset('storage/' . @$collections->image_2) }}" />
                            </div>
                            <div class="swiper-slide">
                                <img class="card-img-top mb-5 mb-md-0"
                                    src="{{ asset('storage/' . @$collections->image_3) }}" />
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- @foreach ($data_brand as $key => $value)
                        <div class="small mb-1">
                            {{ $value->name }}</div>
                    @endforeach --}}
                    <h1 class="display-5 fw-bolder">{{ @$collections->name }}</h1>
                    <div class="fs-5 my-4">
                        <h3>IDR {{ number_format(@$collections->price, 0) }}</h3>
                    </div>
                    <div class="d-flex mb-5">
                        <a href="https://wa.me/6281222998298?text=Hello%20I%20want%20buy%20some%20watch%20{{ @$collections->name }}"
                            class="btn btn-light">SHOP BY WATSHAPP</a>
                    </div>
                    <p class="lead">L{{ @$collections->description }}</p>

                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4 text-light">Related products</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                @csrf

                @foreach ($related as $key => $value)
                    @php $value = (object) $value @endphp
                    <a class="btn" href="{{ url('watch/form') . '/' . $value->id }}">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="{{ asset('storage/' . @$value->image_thumbnail) }}" />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">{{ $value->name }}</h5>
                                        <!-- Product price-->
                                        <p class="fst-italic fw-semibold">{{ implode(', ', $value->models) }}
                                            {{ implode(', ', $value->size) }}
                                            {{ implode(', ', $value->brand) }} {{ implode(', ', $value->gender) }}
                                        </p>
                                        IDR {{ number_format(@$value->price, 0) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

                {{-- <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Special Item</h5>
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sale Item</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Popular Item</h5>
                                $40.00
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Popular Item</h5>
                                $40.00
                            </div>
                        </div>

                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection