 <nav class="sidebar sidebar-offcanvas position-fixed " id="sidebar">
     {{-- <a href="{{ route('home') }}"
         class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top"
         style="padding-top: 30px">
         <img src="{{ asset('img/logo_white.png') }}" alt="logo" width="50%">
     </a> --}}

     <button id="close" type="button" class="btn text-white d-block m-2 d-lg-none" data-toggle="offcanvas">X</button>
     <ul class="nav my-3 px-3">
         <div class="d-flex flex-row justify-content-between align-items-center ">
             <h4>Filter</h4>
             <a class="btn btn-outline-secondary text-center" href="{{ url('watch/all') }}">Reset</a>
         </div>
         <hr class="mt-4" />
         <div class="row">
             <div class="col-12 mb-2 mt-3">

                 <p class="mb-1">Brand :</p>
                 <select class="form-select " aria-label="Default select example"
                     onchange="window.location.href=this.value;">
                     <option
                         value=" {{ url()->current() }}{{ $category ? '&category=' . $category : '' }}{{ $models ? '&models=' . $models : '' }}{{ $size ? '&category=' . $size : '' }}">
                         All</option>

                     @foreach ($tags->brand as $key => $value)
                         <option
                             value="{{ url()->current() }}?brand={{ $key }}{{ $size ? '&size=' . $size : '' }}{{ $category ? '&category=' . $category : '' }}{{ $models ? '&category=' . $models : '' }}"
                             {{ $brand == $key ? 'selected' : '' }}>
                             {{ $value }}</option>
                     @endforeach
                 </select>
             </div>
             <div class="col-12 mb-2 mt-3">
                 <p class="mb-1">Gender :</p>
                 <a href="{{ url()->current() }}{{ $size ? '?size=' . $size . ($models ? '&' : '') : ($models ? '?' : '') }}{{ $models ? 'models=' . $models . ($brand ? '&' : '') : ($brand ? '?' : '') }}{{ $brand ? 'brand=' . $brand : '' }}"
                     class="btn  mb-3 {{ !$category ? 'btn-light' : 'btn-dark' }}">All</a>
                 @foreach ($tags->category as $key => $value)
                     <a href="{{ url()->current() }}?category={{ $key }}{{ $size ? '&size=' . $size : '' }}{{ $models ? '&models=' . $models : '' }}{{ $brand ? '&brand=' . $brand : '' }}"
                         class="btn  mb-3 {{ $category == $key ? 'btn-light' : 'btn-dark' }}">{{ $value }}</a>
                 @endforeach
             </div>
             <div class="col-12 mb-2">
                 <p class="mb-1">Size :</p>
                 <a href="{{ url()->current() }}{{ $category ? '?category=' . $category . ($models ? '&' : '') : ($models ? '?' : '') }}{{ $models ? 'models=' . $models . ($brand ? '&' : '') : ($brand ? '?' : '') }}{{ $brand ? '&brand=' . $brand : '' }}"
                     class="btn  mb-3 {{ !$size ? 'btn-light' : 'btn-dark' }}">All</a>
                 @foreach ($tags->size as $key => $value)
                     <a href="{{ url()->current() }}?size={{ $key }}{{ $category ? '&category=' . $category : '' }}{{ $models ? '&models=' . $models : '' }}{{ $brand ? '&brand=' . $brand : '' }}"
                         class="btn  mb-3 {{ $size == $key ? 'btn-light' : 'btn-dark' }}">{{ $value }}</a>
                 @endforeach
             </div>
             <div class="col-12 mb-2">
                 <p class="mb-1">Model :</p>
                 <a href="{{ url()->current() }}{{ $category ? '?category=' . $category . ($size ? '&' : '') : ($size ? '?' : '') }}{{ $size ? 'size=' . $size . ($brand ? '&' : '') : ($brand ? '?' : '') }}{{ $brand ? 'brand=' . $brand : '' }}"
                     class="btn  mb-3 {{ !$models ? 'btn-light' : 'btn-dark' }}">All</a>
                 @foreach ($tags->models as $key => $value)
                     <a href="{{ url()->current() }}?models={{ $key }}{{ $size ? '&size=' . $size : '' }}{{ $category ? '&category=' . $category : '' }}{{ $brand ? '&brand=' . $brand : '' }}"
                         class="btn  mb-3 {{ $models == $key ? 'btn-light' : 'btn-dark' }}">{{ $value }}</a>
                 @endforeach
             </div>
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
 <script>
     document.getElementById('close').addEventListener('click', hideSidebar);

     function hideSidebar() {
         document.getElementById('mobile-nav').classList.remove('open')
         document.getElementById('back-drop').classList.remove('back-drop')
     }
 </script>
