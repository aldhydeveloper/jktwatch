 <nav class="sidebar sidebar-offcanvas " id="sidebar">
     <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top"
         style="padding-top: 30px">
         <img src="{{ asset('img/logo_white.png') }}" alt="logo" width="50%"></a>
     </div>
     <ul class="nav my-5">
         <li class="nav-item profile">
             <div class="profile-desc">
                 <div class="profile-pic">
                     <div class="count-indicator">
                         <img class="img-xs rounded-circle " src="{{ asset('img/logo_white_circle_black.png') }}"
                             alt="">
                         <span class="count bg-success"></span>
                     </div>
                     <div class="profile-name">
                         <h5 class="mb-0 font-weight-normal">
                             <div>{{ Auth::user()->name }}</div>
                         </h5>
                         <span>Super Admin</span>
                     </div>
                 </div>

             </div>
         </li>
         <li class="nav-item nav-category">
             <span class="nav-link">Navigation</span>
         </li>
         <li class="nav-item menu-items ">
             <a class="nav-link" href="{{ route('dashboard') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Dashboard</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link"href="{{ url('collections/all') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-laptop"></i>
                 </span>
                 <span class="menu-title">Collections</span>
             </a>
             {{-- <div class="collapse" id="ui-basic">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="{{ url('collections/all') }}">All</a>
                     </li>
                     <li class="nav-item"> <a class="nav-link" href="/collections/Man">Mans</a>
                     </li>
                     <li class="nav-item"> <a class="nav-link" href="{{ url('collections/Sports') }}">Sports</a>
                     </li>
                     <li class="nav-item"> <a class="nav-link" href="{{ url('collections/Women') }}">Womens</a>
                     </li>
                 </ul>
             </div> --}}
         </li>

         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ url('category') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-playlist-play"></i>
                 </span>
                 <span class="menu-title">Tags</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="">
                 <span class="menu-icon">
                     <i class="mdi mdi-playlist-play"></i>
                 </span>
                 <span class="menu-title">Home Setting</span>
             </a>
         </li>
     </ul>
 </nav>
