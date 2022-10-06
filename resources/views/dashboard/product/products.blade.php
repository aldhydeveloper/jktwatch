@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Product</h1>
        <a href="{{ route('create_product') }}">
            <h1 class="h4">Create</h1>
        </a>

    </div>
@endsection
