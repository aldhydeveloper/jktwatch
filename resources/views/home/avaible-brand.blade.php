@extends('home.layouts.main')

@section('container')
    <div class="container">

        <!-- START THE FEATURETTES -->

        <div class="col-12 col-md-auto mb-2 align-items-center justify-content-center mt-5">
            <h3 class="text-center text-light">Available Brands</h3>
        </div>

        <hr class="my-2 text-light mx-5">

        <img class="cover-img-available-brand" src="{{ asset('img/brands/Brands.jpg') }}" alt="cover">

        <hr class="my-2 text-light  mx-5">
        <div class="available-brand ">
            @csrf
            @foreach ($data_brand as $item)
                <div><a class="text-light">{{ $item->name }}</a>
                </div>
            @endforeach
        </div>
        <hr class="my-4">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
@endsection
