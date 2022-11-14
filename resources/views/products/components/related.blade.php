<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .img-ns-related {
        height: 350px !important;
    }

    .text-collections-name {
        font-size: 21px
    }

    .text-collections-price {
        margin-top: 5px;
        font-size: 18px
    }

    @media (max-width: 760px) {
        .swiper-button-next-related {
            right: 20px;
            transform: rotate(90deg);
        }

        .swiper-button-prev-related {
            left: 20px;
            transform: rotate(90deg);
        }

        .img-ns-related {
            height: 115px !important;
        }

        .text-collections-name {
            font-size: 12px;
        }

        .text-collections-price {
            font-size: 12px;
        }

        .hx-100 {
            height: 230px;
            width: 115px;
            text-align: center;
            align-items: center;
        }
    }
</style>
<section class="py-1">
    <div class="container px-2 px-lg-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="swiper mt-5">
                <h2 class="text-light mb-3 px-3">Related Products</h2>
                <div class="swiper-wrapper ">
                    @csrf

                    @foreach ($related as $key => $value)
                        @php $value = (object) $value @endphp
                        <div class="swiper-slide ">
                            <a class="btn" href="{{ url('watch/form') . '/' . $value->id }}">
                                <div class="col mb-5 align-item-center">
                                    <div class=" bg-grey hx-100">
                                        <!-- Product image-->
                                        <img class="card-img-top img-ns-related"
                                            src="{{ asset('storage/' . @$value->image_thumbnail) }}" />
                                        <!-- Product details-->
                                        <div class="card-body px-1 py-4">
                                            <!-- Product name-->
                                            <div class="text-collections-name text-center">{{ $value->name }}</div>
                                            <!-- Product price-->
                                            <div class="text-collections-price">IDR {{ @$value->price_text }}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>
    </div>
</section>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var widthMobile = 900;
    var spv = 0;
    if (screen.width > widthMobile) {
        spv = 4;
    } else {
        spv = 3;
    }
    var swiper = new Swiper('.swiper', {
        slidesPerView: spv,
        direction: getDirection(),
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        on: {
            resize: function() {
                swiper.changeDirection(getDirection());
            },
        },
    });

    function getDirection() {
        var windowWidth = window.innerWidth;
        var direction = window.innerWidth <= 760 ? 'horizontal' : 'horizontal';

        return direction;
    }
</script>
