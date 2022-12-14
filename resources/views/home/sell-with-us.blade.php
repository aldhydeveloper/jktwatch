@extends('home.layouts.main')

@section('container')
    <div class="container">

        <!-- START THE FEATURETTES -->
        <img class="cover-img-sell-us" src="{{ asset('img/lwk banner.jpg') }}" alt="cover">
        <div class="text-center text-light card-sell-with-us">
            <div class="headline-title">Ingin menjual jam anda tanpa ribet dan cepat ?</div>
            <div class="headline-body">Jual jam anda dengan Jakarta Luxury watch. Kontak staff kami melaui WhatsApp, jelaskan
                ingin menjual
                jam. Kirimkan detail jam, sepeti tahun dan kondisi, lalu kirimkan foto foto yang jelas.

            </div>
            <div class="headline-body"> Kami akan datang untuk verifikasi barang, jika semua sesuai deskripsi. Transaksi akan
                kami proses, kami
                akan transfer dan barang akan kami bawa.
            </div>
            <div class="headline-body">Terjamin, cepat dan tidak banyak komplikasi.
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="text-center text-light">
            <div class="headline-title">Kesulitan mencari jam idaman?</div>
            <div class="headline-body mx-3">Kontak sales representative kami melalui WhatsApp, dan kami akan bantu carikan
                jam
                impian anda. Kami akan mencarikan jam secepat mungkin dan menyiapkannya untuk anda bawa pulang.
            </div>

            <a href="https://wa.me/628118089992?text=Halo,%20Saya%20Ingin%20menjual%20Jam%20saya." class="btn btn-wa my-5">
                Contact Via WhatsApp
            </a>

        </div>
    </div>


    <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
@endsection
