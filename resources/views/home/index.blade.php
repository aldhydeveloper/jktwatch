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

        <div class="py-5 text-light justify-content-md-center" style="text-align:center ">
            @csrf
            <h1>NEW COLLECTION</h1>
            <div class="container text-center">
                <div class="row  my-5  hover01 ">

                    @foreach ($collections as $key => $value)
                        <div class="col ">

                            <a href="{{ url('watch/form') . '/' . $value->id }}">
                                <figure><img class="img-xs rounded-circle mx-3"
                                        src="{{ asset('storage/' . $value->image_thumbnail) }}" alt=""
                                        width="100%">
                                </figure>
                            </a>
                            <div class="collection-name">{{ $value->name }}</div>
                        </div>
                    @endforeach

                </div>
                {{-- <div class="col">
                    <a href="/product">
                        <figure><img class="img-xs rounded-circle mx-3" src="{{ asset('img/rolex.jpg') }}" alt=""
                                width="100%"></figure>
                    </a>
                    <div class="collection-name">Rolex - 123456</div>
                </div>
                <div class="col">
                    <a href="/product">
                        <figure><img class="img-xs rounded-circle mx-3" src="{{ asset('img/rolex2.jpg') }}"
                                alt="" width="100%"></figure>
                    </a>

                    <div class="collection-name">Rolex daytona - 123456</div>
                </div> --}}
            </div>
        </div>
        <div class="row text-start hover01 text-light" style="margin-top: 10%">
            <div class="col-6 ">
                <h3>WOMEN</h3>
                <a href="watch/all?category=2">
                    <div class="banner"> <img class="img-xs  mx-3" src="{{ asset('img/women-home.jpeg') }}" alt=""
                            width="100%" style="border-radius: 35px"></div>
                </a>
            </div>
            <div class="col-6">
                <h3>MEN</h3>
                <a href="watch/all?category=1">
                    <div class="banner"> <img class="img-xs  mx-3" src="{{ asset('img/man-home.jpg') }}" alt=""
                            width="100%" style="border-radius: 35px"></div>
                </a>
            </div>
        </div>
        <div class="row text-start mt-5 hover01 text-light">
            <h3>SPORTY</h3>
            <div class="col-12">
                <a href="watch/all?category=3">
                    <div class="banner">
                        <img class="img-xs  mx-3" src="{{ asset('img/sporty-home.jpg') }}" alt="" width="100%"
                            height="400vh" style="border-radius: 35px; object-fit: cover;">
                    </div>
                </a>
            </div>
        </div>

        <div class="text-light text-center" style="margin-top: 2%">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In nisi hic veritatis quia quas ullam eius
                aut
                atque ab nam veniam provident dignissimos aliquam eveniet, perferendis ut ex ipsum amet quis
                eligendi
                iusto earum sequi? Accusamus eligendi perspiciatis harum veniam explicabo quisquam obcaecati odit,
                ea
                possimus alias vel libero, adipisci pariatur illum fugiat sit tenetur ipsum, commodi repellendus
                maxime
                omnis ipsam! Architecto aspernatur necessitatibus quam eius aut suscipit magnam, deserunt neque
                fugiat
                similique culpa aliquid nobis deleniti ad dolorem sit! Quidem numquam vero facilis ex quasi ut ea
                consequuntur, voluptate animi, labore possimus at saepe? Sed porro dolorum cupiditate consequatur
                eos
                enim voluptas iure laborum doloribus! Ipsam, dolore neque. Voluptatibus aut eligendi deleniti harum
                ducimus vel. Ipsa voluptates, necessitatibus fuga omnis nesciunt quo. Optio fugit cum culpa ad
                quisquam
                non sed odit corrupti dolor quia unde molestias, voluptate dolore qui id eveniet omnis velit, saepe
                aliquam vitae. Repellat repellendus dignissimos voluptates praesentium odit sint dicta cum quae
                eveniet
                fuga, explicabo, optio est error reprehenderit esse. Tenetur eligendi a ipsa molestiae expedita
                cupiditate beatae, architecto iste, vel suscipit rem asperiores magnam? Ex non, ullam, nobis
                similique
                in doloremque iste reiciendis officia unde minima error veritatis? Incidunt suscipit consectetur ex,
                asperiores unde ipsam ipsum vel autem! Mollitia sint veniam dolor harum excepturi minus maiores
                repellendus magnam laboriosam libero reprehenderit, commodi earum repudiandae iusto accusantium,
                blanditiis voluptate vitae unde ut rem a culpa! Eaque veritatis quas fugiat. Corporis dicta modi
                ducimus
                quod eum enim officiis molestiae iusto. Suscipit, harum veritatis molestias provident molestiae
                alias
                neque repudiandae. Magnam similique ipsum tempora? Assumenda accusantium, voluptatum consectetur ex
                debitis fugiat repellat saepe iure porro modi ipsam quis, ab eveniet obcaecati dolor fuga, quae
                tenetur
                dolorem. Dignissimos, tenetur et magni doloribus perspiciatis quos architecto error deserunt, quo
                nam
                iste ducimus sequi nihil consequuntur vitae nostrum corrupti pariatur eum sint debitis, blanditiis
                asperiores? Eveniet deleniti veritatis repudiandae aut minus atque corrupti sunt ab incidunt
                consectetur
                fugit ullam ipsa nobis sit quas nulla vel, eaque itaque suscipit, laborum iusto! Ratione repellendus
                dolorum voluptatum? Ipsam dicta expedita voluptatibus natus iusto quas at voluptatem dolorem
                numquam,
                accusantium nemo inventore a commodi, error eaque facilis quisquam quibusdam omnis magnam, iste
                totam
                ut. Suscipit praesentium fuga facilis unde natus temporibus nihil corporis veniam placeat minima
                velit
                corrupti excepturi neque magni, ipsum eum itaque labore. Molestiae laboriosam et explicabo deleniti.
                Cum, eveniet. Inventore exercitationem excepturi illo aut animi molestiae fuga magnam. Accusantium,
                laudantium voluptatibus.</p>
        </div>

        <div class="swiper mySwiper mt-5">
            <h1 class="text-light text-center ">CATEGORY</h1>
            <div class="swiper-wrapper">
                @csrf
                <div class="swiper-slide">
                    <div>
                        <img class=" mx-3" src="{{ asset('img/man-home.jpg') }}" alt=""
                            style="border-radius: 35px">
                        <p class="mt-3 text-light">All Category</p>
                        <a href="/watch/all" class="btn btn-secondary btn-details">View Details >></a>
                    </div>
                </div>
                @foreach ($category as $key => $value)
                    <div class="swiper-slide">
                        <div>
                            <img class=" mx-3" src="{{ asset('img/man-home.jpg') }}" alt=""
                                style="border-radius: 35px">
                            <p class="mt-3 text-light">{{ $value->cat_name }}</p>
                            <a href="/watch/all?category={{ $value->id }}" class="btn btn-secondary ">View Details
                                >></a>
                        </div>
                    </div>
                @endforeach
                @foreach ($data_size as $key => $value)
                    <div class="swiper-slide">
                        <div>
                            <img class=" mx-3" src="{{ asset('img/man-home.jpg') }}" alt=""
                                style="border-radius: 35px">
                            <p class="mt-3 text-light">{{ $value->name }}</p>
                            <a href="/watch/all?size={{ $value->id }}" class="btn btn-secondary ">View Details >></a>
                        </div>
                    </div>
                @endforeach
                @foreach ($data_model as $key => $value)
                    <div class="swiper-slide">
                        <div>
                            <img class=" mx-3" src="{{ asset('img/man-home.jpg') }}" alt=""
                                style="border-radius: 35px">
                            <p class="mt-3 text-light">{{ $value->name }}</p>
                            <a href="/watch/all?models={{ $value->id }}" class="btn btn-secondary ">View Details
                                >></a>
                        </div>
                    </div>
                @endforeach
                @foreach ($data_brand as $key => $value)
                    <div class="swiper-slide">
                        <div>
                            <img class=" mx-3" src="{{ asset('img/man-home.jpg') }}" alt=""
                                style="border-radius: 35px">
                            <p class="mt-3 text-light">{{ $value->name }}</p>
                            <a href="/watch/all?brand={{ $value->id }}" class="btn btn-secondary ">View Details >></a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="swiper-button-next text-light ns-none"></div>
            <div class="swiper-button-prev text-light ns-none"></div>
        </div>
    </div>
@endsection
