@extends('products.layouts.main')

@section('container')
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
                        <h3>IDR {{ @$collections->price_text }}</h3>
                    </div>
                    <div class="d-flex mb-5">
                        <a href="https://wa.me/628118089992?text=Halo,%20Saya%20Ingin%20bertanya%20tentang%20Jam%20{{ @$collections->name }}"
                            class="btn btn-wa ">SHOP BY WHATSHAPP</a>
                    </div>
                    <div class="lead">{!! @$collections->description !!}</div>

                </div>
            </div>
        </div>
    </section>


    @include('products.components.related')
@endsection
