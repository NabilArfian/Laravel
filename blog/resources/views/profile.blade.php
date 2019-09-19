@extends('layouts.aps')

@section('content')
    <header class="masthead bg-warning text-white text-center" id="page-top">
      <div class="container">
        <img class="img-responsive mb-5 d-block mx-auto rounded-circle" src="{{URL::asset('/img/foto.png')}}" alt="Responsive image">
        <h1 class="text-uppercase mb-0">Profile Saya</h1>
        <hr class="star-dark">
        <p><h4 class="font-weight-light mb-0">Nama saya Nabil Arfian. 
        Saya saat ini sedang bersekolah di SMK Taruna Bhakti di jurusan Rekayasa Perangkat Lunak atau biasa disingkat RPL.
        Saya bergerak di bidang Web Developer.</h4></p>
      </div>
    </header>

    <!-- Portfolio Grid Section -->

    <!-- About Section -->
    <section class="bg-light text-dark mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-dark">Data Diri</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-4">
            <p class="lead">Nama Lengkap : Nabil Arfian</p>
            <p class="lead">Nama Panggilan : Nabil </p>
            <p class="lead">Tanggal Lahir : 14 September 2002 </p>
            <p class="lead">Alamat : Jalan Kesadaran No.56 Cikumpa, Sukmajaya, Depok</p>
            <p class="lead">No. Telepon : 085880983353</p>
            <p class="lead">Email : exodus190.gt@gmail.com</p>
            <p class="lead">Sekolah : SMK Taruna Bhakti</p>
            <p class="lead">Jurusan : Rekayasa Perangkat Lunak (RPL)</p>
            <p class="lead">Cita-cita : Programmer/ Web Developer</p>
          </div>
        </div>
      </div>
    </section>

@endsection