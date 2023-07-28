<header class="header_area">
  <div id="header_navbar" class="header_navbar sticky">
    <div class="container position-relative">
      <div class="row align-items-center">
        <div class="col-xl-12">
          <nav class="navbar navbar-expand-lg">
            <a class="mx-0" href="/">
              <img id="logo" class="img-fluid" src="/img/logo.png" alt="Logo" width="150px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse sub-menu-bar ms-5" id="navbarSupportedContent">
              <ul id="nav" class="navbar-nav">
                <li class="nav-item">
                  <a class="page-scroll @if(Route::currentRouteName() == 'homepage') active @endif" href="/">HOME</a>
                </li>
                
                {{-- <li class="nav-item">
                  <a class="page-scroll @if(Route::currentRouteName() == '#') active @endif" data-toggle="collapse" data-target="#sub-nav1" aria-controls="sub-nav1"
                    aria-expanded="false" aria-label="Toggle navigation" href="javascript:void(0)">CHI SIAMO
                  </a>
                </li> --}}
                <li class="nav-item">
                  <a class="page-scroll @if(Route::currentRouteName() == 'article.index') active @endif" data-toggle="collapse" data-target="#sub-nav" aria-controls="sub-nav"
                    aria-expanded="false" aria-label="Toggle navigation" href="{{route('article.index')}}">ARTICOLI
                  </a>
                </li>
                @auth
                @if (Auth::user()->is_admin)
                <li class="nav-item">
                  <a class="page-scroll @if(Route::currentRouteName() == 'admin.dashboard') active @endif" data-toggle="collapse" data-target="#sub-nav" aria-controls="sub-nav"
                    aria-expanded="false" aria-label="Toggle navigation" href="{{route('admin.dashboard')}}">DASH ADM
                  </a>
                </li>
                @endif
                @endauth
                @auth
                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                  <a class="page-scroll @if(Route::currentRouteName() == 'revisor.dashboard') active @endif" data-toggle="collapse" data-target="#sub-nav" aria-controls="sub-nav"
                    aria-expanded="false" aria-label="Toggle navigation" href="{{route('revisor.dashboard')}}">DASH REV
                  </a>
                </li>
                @endif
                @if (Auth::user()->is_writer)
                <li class="nav-item">
                  <a class="page-scroll @if(Route::currentRouteName() == 'writer.dashboard') active @endif" data-toggle="collapse" data-target="#sub-nav" aria-controls="sub-nav"
                    aria-expanded="false" aria-label="Toggle navigation" href="{{route('writer.dashboard')}}">DASH WRT
                  </a>
                </li>
                @endif
                @endauth
                <div class="dropdown mt-1 mt-md-0">
                  <li class="dropdown-toggle cursor-custom" data-bs-toggle="dropdown" aria-expanded="false">CATEGORIE</li>
                  <ul class="dropdown-menu">
                  @foreach ($categories as $category)
                  <li class="link-hover"><a class="dropdown-item text-uppercase " href="{{route('filter.category', compact('category'))}}">{{$category->name}}</a></li>
                  @endforeach
                  </ul>
                </div>
              </ul>
            </div>
            
            <ul class="header-btn d-flex justify-content-between ms-lg-5 margin-navbar">
              @if (Auth::user() != null)
              <li class="margin-log-custom">
                <a href="#" class="main-btn account-btn mt-lg-1 mt-md-1 mt-1">
                  <i class="fa-regular fa-user ms-md-2 d-block d-md-none"></i>
                  <span class="d-none d-md-block">{{ Auth::user()->name }}<i class="fa-regular fa-user ms-2"></i></span>
                </a>
                <ul class="dropdown-nav">
                  {{-- <li><a href="#" class="fw-bold">I MIEI ANNUNCI</a></li> --}}
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                  <li><button type="submit" class="btn fw-bold  hover-log-custom">LOGOUT  <i class="fa-solid fa-right-from-bracket"> </i></button></li>
                </form>
                </ul>
              </li>
              @else
              <div class="margin-login">
              <a href="{{route('login')}}" class="main-btn btn-hover fw-bold m-2 mx-md-5 me-3 margin-login">
                <i class="fa-solid fa-user ms-md-2 d-block d-md-none" style="color: #ffffff;"></i>
                <p class="d-none text-light d-md-block">ACCEDI<i class="fa-solid fa-user ms-md-2" style="color: #ffffff;"></i></p></a>
              </div>
              @endif
              @auth
              @if (Auth::user()->is_admin)

              @else
              <li class="margin-log-custom2">
                <a href="{{route('careers')}}" class="main-btn btn-hover fw-bold  mt-1 me-xl-3">
                  <i class="fa-solid fa-briefcase ms-md-2 d-block d-md-none px-0 width-xs-custom" style="color: #ffffff;"></i>
                  <p class="d-none text-light d-md-block">LAVORA CON NOI<i class="fa-solid fa-briefcase ms-md-2" style="color: #ffffff;"></i></p></a>
              </li>
              @endif
              @endauth
            </ul>
          </nav> <!-- navbar -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </div> <!-- header navbar -->
</header>