@extends('home.layouts.main')

@section('container')
    <div class="header-all">
        <video src="{{ asset('video/cinematic-2_Trim.mp4') }}" autoplay loop muted class="back-video">
        </video>
        <div class="content">
            <div class="heading-all">LUXURY WATCH</div>
            <div class="sub-heading-all">COLLECTION</div>
        </div>
    </div>

    <div class="container marketing">
        <div id="myCarousel" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img" width="100%" height="100%"
                        src="{{ @asset('img/banner/banner-1.jpg') }}">
                    </img>

                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="100%"
                        src="{{ @asset('img/banner/banner-2.jpg') }}">
                    </img>

                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="100%"
                        src="{{ @asset('img/banner/banner-3.jpg') }}">
                    </img>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="swiper mySwiper mt-5">
            <h2 class="text-light mb-3">New Collection</h2>
            <hr class="mt-4" style="border-top: 3px solid;color: #ffffff;">
            <div class="swiper-wrapper hover01">
                @csrf

                @foreach ($collections as $key => $value)
                    <a class="btn p-0 text-light swiper-slide" href="{{ url('watch/form') . '/' . $value->id }}">
                        <div class="card card-watch ">
                            <figure><img class="rounded-circle" src="{{ asset('storage/' . $value->image_thumbnail) }}"
                                    alt="">
                            </figure>
                            <div class="card-body px-0">
                                <div class="card-text collection-name">{{ $value->name }}</div>
                                <div class="card-text collection-year">{{ $value->year }}</div>
                            </div>
                        </div>

                    </a>
                @endforeach

            </div>

            <div class="d-block d-lg-none">
                <div class="swiper-button-next fs-4 text-light"></div>
                <div class="swiper-button-prev fs-4 text-light"></div>
            </div>
            <hr class="mb-4" style="border-top: 3px solid;color: #ffffff;">
        </div>

    </div>

    <div class="container marketing d-lg-block d-none">

        <div class="gender-body">

            <div class="row hover01 text-light  ">

                @foreach ($man as $value)
                    <?php $cover = 'img/man-home.jpg';
                    if ($value->cover) {
                        $cover = 'storage/' . $value->cover;
                    }
                    ?>
                    <a href="watch/all?category={{ $value->id }}">
                        <div class="banner">
                            <img class="img-xs" src="{{ asset('img/Men_s Collection.jpg') }}">

                            <span class="collection-title">M E N ' S</span>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="row hover01 text-light mt-2">

                @foreach ($sporty as $value)
                    <?php $cover = 'img/sporty-home.jpg';
                    if ($value->cover) {
                        $cover = 'storage/' . $value->cover;
                    }
                    ?>
                    <a href="watch/all?category={{ $value->id }}">
                        <div class="banner">
                            <img class="img-xs" src="{{ asset('img/Sports Collection.jpg') }}">

                            <span class="collection-title text-light">S P O R T S</span>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="row  hover01 text-light  mt-2">

                @foreach ($women as $value)
                    <?php $cover = 'img/women-home.jpeg';
                    if ($value->cover) {
                        $cover = 'storage/' . $value->cover;
                    }
                    ?>
                    <a href="watch/all?category={{ $value->id }}">
                        <div class="banner">
                            <img class="img-xs" src="{{ asset('img/Women_s Collection.jpg') }}">

                            <span class="collection-title">W O M E N ' S</span>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
    </div>

    <div class="gender-body d-lg-none d-block ">

        <div class="hover01 text-light  ">

            @foreach ($man as $value)
                <?php $cover = 'img/man-home.jpg';
                if ($value->cover) {
                    $cover = 'storage/' . $value->cover;
                }
                ?>
                <a href="watch/all?category={{ $value->id }}">
                    <div class="banner">
                        <img class="img-xs" src="{{ asset('img/Men_s Collection.jpg') }}">

                        <span class="collection-title">MEN'S</span>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="hover01 text-light mt-2">

            @foreach ($sporty as $value)
                <?php $cover = 'img/sporty-home.jpg';
                if ($value->cover) {
                    $cover = 'storage/' . $value->cover;
                }
                ?>
                <a href="watch/all?category={{ $value->id }}">
                    <div class="banner">
                        <img class="img-xs" src="{{ asset('img/Sports Collection.jpg') }}">

                        <span class="collection-title text-light">SPORTS</span>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="hover01 text-light  mt-2">

            @foreach ($women as $value)
                <?php $cover = 'img/women-home.jpeg';
                if ($value->cover) {
                    $cover = 'storage/' . $value->cover;
                }
                ?>
                <a href="watch/all?category={{ $value->id }}">
                    <div class="banner">
                        <img class="img-xs" src="{{ asset('img/Women_s Collection.jpg') }}">

                        <span class="collection-title">WOMEN'S</span>
                    </div>
                </a>
            @endforeach
        </div>

    </div>

    <div class="container marketing">
        <div class="text-light text-center" style="margin-top: 70px; max-height= 340px">
            <img class="" src="{{ asset('img/banner/banner-poster.jpg') }}" width="100%" height="100%"
                style="object-fit: cover">
        </div>

        <div class="swiper mySwiper category-body align-items-center">
            <div class="d-flex flex-row justify-content-between ">
                <h2 class="text-light ">Available Brands</h2>
                <a href="{{ route('avaible_brand') }}" class=" btn">More ></a>
            </div>
            <hr class="mt-4" style="border-top: 3px solid;color: #ffffff;">
            <div class="swiper-wrapper">
                <div class="swiper-slide  h100-m">
                    <div class="m333">

                        {{-- <a href="/watch/all?brand={{ $value->id }}" class=""> --}}
                        <a href="/watch/all?brand=1" class="">
                            <img class="img-brand  mx-3" src="{{ asset('img/brands/rolex.png') }}" alt=""
                                style="border-radius: 100px" width="100%"></a>

                    </div>
                </div>
                <div class="swiper-slide h100-m">
                    <div class="m333">

                        {{-- <a href="/watch/all?brand={{ $value->id }}" class=""> --}}
                        <a href="/watch/all?brand=2" class="">
                            <img class="img-brand  mx-3" src="{{ asset('img/brands/piguet.png') }}" alt=""
                                style="border-radius: 100px" width="100%"></a>

                    </div>
                </div>
                <div class="swiper-slide h100-m">
                    <div class="m333">

                        {{-- <a href="/watch/all?brand={{ $value->id }}" class=""> --}}
                        <a href="/watch/all?brand=3" class="">
                            <img class="img-brand  mx-3" src="{{ asset('img/brands/Patek.png') }}" alt=""
                                style="border-radius: 100px" width="100%"></a>

                    </div>
                </div>
                <div class="swiper-slide h100-m">
                    <div class="m333">

                        {{-- <a href="/watch/all?brand={{ $value->id }}" class=""> --}}
                        <a href="/watch/all?brand=4" class="">
                            <img class="img-brand mx-3" src="{{ asset('img/brands/richard mille.png') }}" alt=""
                                style="border-radius: 100px" width="100%"></a>

                    </div>
                </div>
                <div class="swiper-slide h100-m">
                    <div class="m333">

                        {{-- <a href="/watch/all?brand={{ $value->id }}" class=""> --}}
                        <a href="/watch/all?brand=5" class="">
                            <img class="img-brand  mx-3" src="{{ asset('img/brands/penarai.png') }}" alt=""
                                style="border-radius: 100px" width="100%"></a>

                    </div>
                </div>
                <div class="swiper-slide h100-m">
                    <div class="m333">

                        {{-- <a href="/watch/all?brand={{ $value->id }}" class=""> --}}
                        <a href="/watch/all?brand=6" class="">
                            <img class="img-brand mx-3" src="{{ asset('img/brands/iwc.png') }}" alt=""
                                style="border-radius: 100px" width="100%"></a>

                    </div>
                </div>
            </div>
            <div class="d-block d-lg-none">
                <div class="swiper-button-next fs-4 text-light"></div>
                <div class="swiper-button-prev fs-4 text-light"></div>
            </div>
        </div>

        <hr class="my-5" style="border-top: 3px solid;">
        <div class=" mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-6">
                    <h2 class="text-light mx-2">Contact Us </h2>
                    <div class="d-flex flex-start w-100">
                        <img class="img-contact-us" src="{{ asset('img/Contactus.jpg') }}" alt="avatar" />
                        <div class="w-100 text-light">
                            <div class="fw-bold">
                                Sedang Mencari Jam tertentu?
                            </div>
                            <div class="fw-bold mt-2">
                                Ada pertanyaan yang kami bisa bantu?
                            </div>

                            <div class="mt-2 fw-lighter">
                                Silahkan hubungi kami!
                                Tim expert kami akan langsung melayani Anda.
                            </div>

                            <div style="width: 100%" class="">
                                <a href="https://wa.me/628118089992?text=Halo,%20Saya%20Ingin%20bertanya%20tentang%20Jam%20yang%20ada."
                                    class="btn btn-wa-cs mt-3 ">
                                    Contact Via WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
