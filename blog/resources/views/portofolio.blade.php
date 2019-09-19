@extends('layouts.aps')

@section('content')
<header class="masthead bg-warning text-white text-center" id="page-top">
      <div class="container">
        <img class="img-responsive mb-5 d-block mx-auto rounded-circle" src="{{URL::asset('/img/foto.png')}}" alt="Responsive image">
        <h1 class="text-uppercase mb-0">Portofolio</h1>
        <hr class="star-dark">
        <p><h4 class="font-weight-light mb-0">Nama saya Nabil Arfian. 
        Lahir di Jakarta pada tanggal 14 September 2002. Saat ini saya duduk di bangku SMK Taruna Bhakti jurusan RPL (Rekayasa Perangkat Lunak. Saya bergerak di bidang Web Developer.</h4></p>
      </div>
    </header>

    <!-- Portfolio Grid Section -->

    <!-- About Section -->
    <section class="bg-light text-dark mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-dark">Pendidikan</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-4">
            <p class="lead">Taman Kanak-kanak : Darul Hikmah (Jakarta)</p>
            <p class="lead">Sekolah Dasar : SDN Pejaten Barat 12 pagi (Jakarta) dan SD Pemuda Bangsa (Depok)</p>
            <p class="lead">Sekolah Menengah Pertama : SMPN 6 (Depok)</p>
            <p class="lead">Sekolah Menengah Kejuruan : SMK Taruna Bhakti (Depok)</p>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-dark text-light mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-light">Skill</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4">
            <p class="lead">Desain Grafis dengan Adobe Ilustrator dan Photoshop</p>
            <p class="lead">Javascript</p>
            <p class="lead">PHP</p>
            <p class="lead">CSS / Bootstrap</p>
            <p class="lead">HTML</p>
          </div>
        </div>
      </div>
    </section>
@endsection