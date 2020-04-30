@extends('layouts.frontend')

@section('content')
         <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('assets/frontend/images/siswa1.JPG');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>Sistem Informasi Akademik</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('assets/frontend/images/siswa2.JPG');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>Sistem Informasi Akademik</h1>
            </div>
          </div>
        </div>
      </div>


      <div class="intro-section" style="background-image: url('assets/frontend/images/siswa3.JPG');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>Sistem Informasi Akademik</h1>
            </div>
          </div>
        </div>
      </div>

    </div>


    <div></div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span>Jurusan</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                  <center>
                  <img src="{{ asset ('assets/frontend/images/tkr.png')}}" alt="" width="50px" height="80px">
                  </center>
                </div>
              <div class="feature-1-content">
                <h2>Teknik Kendaraaan Ringan</h2>
                <p>Pilihan bermutu bagi generasi maju.
                    Sekolah terpilih pelaksana Kurikulum Berbasis Industri yang siap memcetak calon2 mekanik handal dan berkualitas.
                    Siswa yg kompeten dalam keterampilan, pengetahuan, mental, dan sikap berakhlakul karimah adalah modal utama kami untuk melahirkan Mekanik Otomotif dan Service Advancer yang siap terjun dan bersaing dalam menjawab kebutuhan Industri
                  </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <center>
                <img src="{{ asset ('assets/frontend/images/rpl.png')}}" alt="" width="50px" height="80px">
                </center>
            </div>
              <div class="feature-1-content">
                <h2>Rekayasa Perangkat Lunak</h2>
                <p>
                    Pilihan berkualitas untuk generasi cerdas.
                    Program pembelajaran berbasis Teknologi Informasi, siap menjadi bekal keahlian membentuk progammer handal yang mampu mengembangkan diri sesuai tuntutan kemajuan zaman, menjawab peluang kerja berbasis teknologi komputer di berbagai sektor
                  </p>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                  <center>
                <img src="{{ asset ('assets/frontend/images/tsm.png')}}" alt="" width="50px" height="80px">
                </center>
              </div>
              <div class="feature-1-content">
                <h2>Teknik Kendaraan Motor</h2>
                <p>
                    Pilihan tepat untuk mekanik hebat.
                    Pembelajaran praktik yang inovatif, siap melatih siswa agar mampu menerapkan pengetahuan secara logis, kritis, dan kreatif.
                    Pemahaman konsep disertai praktik menjadi modal dasar para calon mekanik handal sehingga mampu mengaplikasikan dasar operasional komponen dan unit sistem pada otomotif. Lulusan TSM kami, siap tempur ditengah serbuan produksi Sepeda Motor yang kian canggih dan menjamur
                  </p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection
