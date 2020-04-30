@extends('layouts.frontend')

@section('nav')
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('assets/frontend/images/bg_1.jpg')">
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
                    <img src="assets/frontend/images/course_4.jpg" alt="Image" class="img-fluid">
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
                        <img src="assets/frontend/images/course_5.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                        <h2 class="section-title-underline mb-5">
                            <span>Personalized Learning</span>
                        </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque dolore libero corrupti! Itaque, delectus?</p>
                        <p>Modi sit dolor repellat esse! Sed necessitatibus itaque libero odit placeat nesciunt, voluptatum totam facere.</p>
                    </div>
                </div>
        </div>
    </div>

    <div class="section-bg style-1" style="background-image: url('assets/frontend/images/hero_1.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-mortarboard"></span>
              <h3>Our Philosphy</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-school-material"></span>
              <h3>Academics Principle</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-library"></span>
              <h3>Key of Success</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
          </div>
        </div>
      </div>


    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span>Our Teachers</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">

            <div class="feature-1 border person text-center">
                <img src="assets/frontend/images/person_1.jpg" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>Craig Daniel</h2>
                <span class="position mb-3 d-block">Math Teacher</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
            <div class="feature-1 border person text-center">
                <img src="assets/frontend/images/person_2.jpg" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>Taylor Simpson</h2>
                <span class="position mb-3 d-block">Math Teacher</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
            <div class="feature-1 border person text-center">
                <img src="assets/frontend/images/person_3.jpg" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>Jonas Tabble</h2>
                <span class="position mb-3 d-block">Math Teacher</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">

            <div class="feature-1 border person text-center">
                <img src="assets/frontend/images/person_4.jpg" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>Craig Daniel</h2>
                <span class="position mb-3 d-block">Math Teacher</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
            <div class="feature-1 border person text-center">
                <img src="assets/frontend/images/person_2.jpg" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>Taylor Simpson</h2>
                <span class="position mb-3 d-block">Math Teacher</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
            <div class="feature-1 border person text-center">
                <img src="assets/frontend/images/person_3.jpg" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>Jonas Tabble</h2>
                <span class="position mb-3 d-block">Math Teacher</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>









    <div class="site-section ftco-subscribe-1" style="background-image: url('assets/frontend/images/bg_1.jpg')">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <h2>Subscribe to us!</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,</p>
          </div>
          <div class="col-lg-5">
            <form action="" class="d-flex">
              <input type="text" class="rounded form-control mr-2 py-3" placeholder="Enter your email">
              <button class="btn btn-primary rounded py-3 px-4" type="submit">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div>


  @endsection
