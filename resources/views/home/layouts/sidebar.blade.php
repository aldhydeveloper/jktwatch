 <nav class="sidebar sidebar-offcanvas " id="sidebar">

     <ul class="nav my-5 px-3">
         <div class="d-flex flex-row justify-content-between align-items-center ">
             <h4>Filter</h4>
             <a class="btn btn-outline-secondary text-center" href="{{ url('watch/all') }}">Reset</a>
         </div>
         <hr class="mt-4" />
         <div class="row">

             {{-- <div class="col-12 mb-2">
                            <p class="mb-1">brand :</p>
                            <a href="{{ url()->current() }}{{ $category ? '&category=' . $category : '' }}{{ $models ? '&models=' . $models : '' }}{{ $size ? '&category=' . $size : '' }}"
                                class="btn  mb-3 {{ !$brand ? 'btn-dark' : 'btn-light' }}">All</a>
                            @foreach ($data->brand as $key => $value)
                                <a href="{{ url()->current() }}?brand={{ $key }}{{ $size ? '&size=' . $size : '' }}{{ $category ? '&category=' . $category : '' }}{{ $models ? '&category=' . $models : '' }}"
                                    class="btn  mb-3 {{ $brand == $key ? 'btn-dark' : 'btn-light' }}">{{ $value }}</a>
                            @endforeach
                        </div> --}}
         </div>
     </ul>
 </nav>
