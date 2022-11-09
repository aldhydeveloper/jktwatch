@extends('home.layouts.main')

@section('container')
    <div class="container marketing">

        <!-- START THE FEATURETTES -->

        <img class="cover-img-about-us" src="{{ asset('img/cover_about_us.jpg') }}" alt="cover">
        <div class="col-12 col-md-auto mb-2 align-items-center justify-content-center">
            <h3 class="text-center text-light">About Us</h3>
        </div>

        <hr>

        

        {{-- <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll
                        blow your mind.</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero voluptatibus nisi accusantium obcaecati
                    molestias fugit nemo dolorum modi, iste veritatis magni tenetur perspiciatis maxime totam velit odio
                    molestiae! Consectetur suscipit voluptatibus consequatur sit eligendi veniam doloremque, reprehenderit
                    dolore, libero dolores eius a minus, cupiditate iure? Deleniti, omnis nam. Itaque, necessitatibus hic.
                    Facere alias quas, sit iusto inventore accusantium? Voluptatum voluptates dolorum eaque! Corporis, at
                    repellat dolorem harum deserunt enim expedita laudantium hic, sit id ad dolores quis, ipsam quibusdam.
                    Dolore consequuntur qui corrupti. Dolore dolorum debitis adipisci quo, consequuntur quibusdam rerum
                    laudantium delectus temporibus animi, unde error incidunt velit voluptatem.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#aaa" /><text x="50%" y="50%" fill="#fff"
                        dy=".3em">500x500</text>
                </svg>

            </div>
        </div> --}}

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
@endsection
