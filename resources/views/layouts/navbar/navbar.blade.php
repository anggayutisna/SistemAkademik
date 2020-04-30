<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="{{ asset('assets/frontend/images/logosmk.png')}}">
  <title>Sistem Informasi Akademik | Smk Assalaam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.fancybox.min.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap-datepicker.css')}}">
   <link href="{{ asset ('assets/backend/start/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/aos.css')}}">
  <link href="{{ asset('assets/frontend/css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span>08xx-xxxx-xxxx</a>
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> email@gmail.com</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html" class="d-block">
              <img src="{{ asset('assets/frontend/images/logosmk.png')}}" alt="Image" class="img-fluid" width="100px" height="40px">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                  <a href="{{url('')}}" class="nav-link text-left">Beranda</a>
                </li>

                {{-- <li>
                  <a href="{{url('administrasi')}}" class="nav-link text-left">Administrasi</a>
                </li> --}}

                  @if(auth()->check()  &&  Auth::user()->hasRole('admin'))
                  <li>
                  <a href="{{url('a/')}}">Admin</a>
                  </li>
                  @endif
                  @if (auth()->check() && Auth::user()->hasRole('guru'))
                <li>
                <a class="nav-link text-left" href="{{ url('g/listsiswa') }}">Daftar Siswa</a>
                </li>
                </li>
                    @endif

                  @if(auth()->check()  &&  Auth::user()->hasRole('siswa'))
                  <li>
                      <a href="{{url('s/')}}">Daftar Nilai</a>
                  </li>
                  {{--  @foreach ($siswa as $siswas )
                  <li>
                  <a href="{{ route('siswa.nilai', $siswas->nis) }}}">Siswa</a>
                  </li>
                  @endforeach  --}}
                  @endif

                  <li>
                <a href="{{url('tentang')}}" class="nav-link text-left">About</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
         <div class="col-lg-3 text-right">
              @guest
          <a href="{{url('login')}}" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-unlock-alt"></span> Masuk</a>
            @else

                  <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                @if (auth()->check()  &&  Auth::user()->hasRole('siswa'))
                                    <a class="dropdown-item" href="{{ url('profile')}}">
                                         <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                       Profile
                                    </a>
                                    @endif

                @if (auth()->check()  &&  Auth::user()->hasRole('guru'))
                                    <a class="dropdown-item" href="{{ url('profile')}}">
                                         <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                       Profile
                                    </a>
                <div class="dropdown-divider"></div>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        {{ __('Logout') }}
                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
        </a>

        </div>
        @endguest
      </div>
    </header>



