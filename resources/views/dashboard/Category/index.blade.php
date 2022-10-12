@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between">
                            <h4 class="card-title">Category</h4>

                            <a href="{{ url('category/create') }}" class="btn btn-info btn-rounded btn-fw" id="create_category"
                                style="width: 40px; font-size:21px">+</a>
                        </div>
                        <div class="table-responsive">
                            {!! $dataTable->table() !!}
                            {{-- <table class="table">
                                <thead>
                                    <tr>
                                        <th> No. </th>
                                        <th> Name </th>
                                        <th> Edit </th>
                                        <th> Delete </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $key => $value)
                                        <tr>
                                            <td> {{ $value->id }} </td>
                                            <td> {{ $value->cat_name }} </td>
                                            <td> <a href="/category/{{ $value->id }}/edit" class="btn  btn-primary "
                                                    id="update" style="width: 40px; font-size:12px"><i
                                                        class="bi bi-pencil-fill" style="margin-left: 0 "></i></a>
                                            </td>
                                            <td>
                                                <form action="/category/{{ $value->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn  btn-danger "
                                                        onclick="return confirm('Are you sure ?')"><i class="bi bi-trash"
                                                            style="margin-right: 0"></i></button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">

                        <div class="d-flex flex-row justify-content-between">
                            <h4 class="card-title">Size</h4>
                            <a href="{{ url('size/create') }}" class="btn btn-info btn-rounded btn-fw" id="create_category"
                                style="width: 40px; font-size:21px">+</a>
                        </div>
                        <div class="table-responsive">
                            {{-- <table class="table">
                                <thead>
                                    <tr>
                                        <th> No. </th>
                                        <th> Name </th>
                                        <th> Edit </th>
                                        <th> Delete </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $num = 0; ?>
                                    @foreach ($data_size as $key => $value)
                                        <?php $num++; ?>
                                        <tr>
                                            <td> {{ $num }} </td>
                                            <td> {{ $value->name }} </td>
                                            <td> <a href="/size/{{ $value->id }}/edit" class="btn  btn-primary "
                                                    id="update" style="width: 40px; font-size:12px"><i
                                                        class="bi bi-pencil-fill" style="margin-left: 0 "></i></a>
                                            </td>
                                            <td>
                                                <form action="/size/{{ $value->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn  btn-danger "
                                                        onclick="return confirm('Are you sure ?')"><i class="bi bi-trash"
                                                            style="margin-right: 0"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
