@extends('layouts.aps')

@section('content')
<header class="masthead bg-warning text-white text-center" id="page-top">
      <div class="container">
        <img class="img-responsive mb-5 d-block mx-auto" src="{{URL::asset('/img/favicon.png')}}" alt="Responsive image">
        <h1 class="text-uppercase mb-0">Hi I'm Nabil Arfian</h1>
        <hr class="star-dark">
        <h4 class="font-weight-light mb-0">Saya adalah murid SMK Taruna Bhakti yang bergerak di bidang web developer. Di website ini anda dapat melihat portofolio diri saya.</h4>
      </div>
    </header>



    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Profile</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-12 ml-auto">
            <img class="img-responsive mb-1 d-block mx-auto rounded-circle" src="{{URL::asset('/img/foto.png')}}" alt="Responsive image">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 ml-auto mt-5 text-center">
            <p class="text-center"><h4>Nama saya Nabil Arfian. 
        Saya saat ini sedang bersekolah di SMK Taruna Bhakti di jurusan Rekayasa Perangkat Lunak atau biasa disingkat RPL.
        Saya bergerak di bidang Web Developer.</h4></p>
          </div>
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="{{ url('/profile') }}">
            More
          </a>
        </div>
      </div>
    </section>
    
@endsection
