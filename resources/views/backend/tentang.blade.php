@extends('layouts.frontend')

@section('nav')
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('assets/frontend/images/about3.jpeg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">About Us</h2>
              <p>Sistem Informasi Akademik | Smk Assalaam</p>
            </div>
          </div>
        </div>
      </div>


    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="#">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">About Us</span>
      </div>
    </div>
@endsection

@section('content')
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <img src="assets/frontend/images/about1.jpeg" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-5 ml-auto align-self-center">
                    <h2 class="section-title-underline mb-5">
                        <span>Bagaimana cara kerja WEB</span>
                    </h2>
                    <p>untuk apa web ini diciptakan?</p>
                    <p>Web ini diciptakan untuk memudahkan guru menginput nilai dan mengurangi penggunaan kertas.dan untuk murid memudahkan melihat nilai harian maupun ulangan
                        tanpa harus bertanya kepada guru.
                    </p>
                </div>
            </div>

            <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                        <img src="assets/frontend/images/about2.jpeg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                        <h2 class="section-title-underline mb-5">
                            <span>Profil</span>
                        </h2>
                        <p>Web ini didirikan dan dikembangkan pada tahun 2020</p>
                        <p></p>
                    </div>
                </div>
        </div>
    </div>










    <div class="site-section ftco-subscribe-1" style="background-image: url('assets/frontend/images/bg_1.jpg')">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            </div>
          <div class="col-lg-5">

          </div>
        </div>
      </div>
    </div>


  @endsection
