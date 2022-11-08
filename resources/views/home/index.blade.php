@extends('home.layouts.main')

@section('container')
    <div class="header-all">
        <video src="{{ asset('video/cinematic.mp4') }}" autoplay loop muted class="back-video">
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
                        src="{{ @asset('img/asset 1 6oktober.jpg') }}">
                    </img>

                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="100%"
                        src="{{ @asset('img/asset 2 6oktober.jpg') }}">
                    </img>

                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="100%"
                        src="{{ @asset('img/asset 4 6oktober.jpg') }}">
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
                    <a class="btn text-light swiper-slide" href="{{ url('watch/form') . '/' . $value->id }}">
                        <div class="card card-watch ">
                            <figure><img class="rounded-circle" src="{{ asset('storage/' . $value->image_thumbnail) }}"
                                    alt="">
                            </figure>
                            <div class="card-body">
                                <div class="card-text collection-name">{{ $value->name }}</div>
                                <div class="card-text">{{ $value->year }}</div>
                            </div>
                        </div>

                    </a>
                @endforeach

            </div>

            <hr class="mb-4" style="border-top: 3px solid;color: #ffffff;">
        </div>

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
                            <img class="img-xs" src="{{ asset($cover) }}" width="100%" height="100%">

                            <span class="collection-title">M A N ' S</span>
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
                            <img class="img-xs" src="{{ asset($cover) }}" width="100%" height="100%">

                            <span class="collection-title">W O M E N ' S</span>
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
                            <img class="img-xs" src="{{ asset($cover) }}" width="100%" height="100%">

                            <span class="collection-title">S P O R T S</span>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
        <div class="text-light text-center" style="margin-top: 70px; max-height= 340px">
            <img class="" src="{{ asset('img/poster-example.jpg') }}" width="100%" height="100%"
                style="object-fit: cover">
        </div>

        <div class="swiper mySwiper category-body">
            <h2 class="text-light ">Watch Category</h2>
            <hr class="mt-4" style="border-top: 3px solid;color: #ffffff;">
            <div class="swiper-wrapper">
                @csrf
                <div class="swiper-slide">
                    <div class="m333">
                        <img class=" mx-3" src="{{ asset('img/man-home.jpg') }}" alt=""
                            style="border-radius: 100px" width="100%">
                        <p class="mt-3 text-light  category-name">All Category</p>
                        <a href="/watch/all" class="btn btn-secondary btn-details view-detail">View Details >></a>
                    </div>
                </div>
                @foreach ($category as $key => $value)
                    <?php $cover = 'img/man-home.jpg';
                    if ($value->cover) {
                        $cover = 'storage/' . $value->cover;
                    }
                    ?>
                    <div class="swiper-slide">
                        <div class="m333">
                            <img class=" mx-3" src="{{ asset($cover) }}" alt="" style="border-radius: 100px"
                                width="100%">
                            <p class="mt-3 text-light category-name">{{ $value->cat_name }}</p>
                            <a href="/watch/all?category={{ $value->id }}" class="btn btn-secondary view-detail">View
                                Details
                                >></a>
                        </div>
                    </div>
                @endforeach
                @foreach ($data_size as $key => $value)
                    <?php $cover = 'img/man-home.jpg';
                    if ($value->cover) {
                        $cover = 'storage/' . $value->cover;
                    }
                    ?>
                    <div class="swiper-slide">
                        <div class="m333">
                            <img class=" mx-3" src="{{ asset($cover) }}" alt="" style="border-radius: 100px;"
                                width="100%">
                            <p class="mt-3 text-light  category-name">{{ $value->name }}</p>
                            <a href="/watch/all?size={{ $value->id }}" class="btn btn-secondary view-detail ">View
                                Details >></a>
                        </div>
                    </div>
                @endforeach
                @foreach ($data_model as $key => $value)
                    <?php $cover = 'img/man-home.jpg';
                    if ($value->cover) {
                        $cover = 'storage/' . $value->cover;
                    }
                    ?>
                    <div class="swiper-slide">
                        <div class="m333">
                            <img class=" mx-3" src="{{ asset($cover) }}" alt="" style="border-radius: 100px"
                                width="100%">
                            <p class="mt-3 text-light  category-name">{{ $value->name }}</p>
                            <a href="/watch/all?models={{ $value->id }}" class="btn btn-secondary view-detail">View
                                Details
                                >></a>
                        </div>
                    </div>
                @endforeach
                @foreach ($data_brand as $key => $value)
                    <?php $cover = 'img/man-home.jpg';
                    if ($value->cover) {
                        $cover = 'storage/' . $value->cover;
                    }
                    ?>
                    <div class="swiper-slide">
                        <div class="m333">
                            <img class=" mx-3" src="{{ asset($cover) }}" alt="" style="border-radius: 100px"
                                width="100%">
                            <p class="mt-3 text-light category-name">{{ $value->name }}</p>
                            <a href="/watch/all?brand={{ $value->id }}" class="btn btn-secondary view-detail ">View
                                Details >></a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="swiper-button-next text-light ns-none"></div>
            <div class="swiper-button-prev text-light ns-none"></div>
        </div>

        <hr class="my-5" style="border-top: 3px solid;color: #ffffff;">
        <div class="container mb-5">
            <div class="row d-flex justify-content-center text-dark">
                <div class="col-md-10 col-lg-8 col-xl-6">
                    <h2 class="text-light">Contact Us </h2>
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="d-flex flex-start w-100">
                                <img class="rounded-circle shadow-1-strong me-3"
                                    src="{{ asset('img/logo_white_circle_black.png') }}" alt="avatar" width="65"
                                    height="65" />
                                <div class="w-100">
                                    <div class="form-outline">
                                        <label class="form-label" for="textAreaExample">What is your view?</label>
                                        <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <div></div>
                                        <a type="button" class="btn btn-success">
                                            Send to whatsapp
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
