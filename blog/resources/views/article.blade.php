@extends('layouts.aps')

@section('content')
<header class="masthead bg-warning text-white text-center" id="page-top">
      <div class="container">
        <img class="img-responsive mb-5 d-block mx-auto" src="{{URL::asset('/img/ayay.jpg')}}" alt="Responsive image">
        <h1 class="text-uppercase mb-0">Artikel</h1>
        <hr class="star-dark">
        <p><h4 class="font-weight-light mb-0">Berbagai macam artikel dapat ditemukan disini.</h4></p>
      </div>
    </header>

    <!-- Portfolio Grid Section -->

    <!-- About Section -->
    <section class="bg-light text-dark mb-0" id="about">
      <div class="container">

      <div class="card">
      <div class="card-body">
      <h3 class="text-center text-uppercase text-dark">Kategori</h3>
      <hr class="star-dark mb-3">
      <ul>
      @foreach($kate as $e)
      <li><a href="{{ route('article1.lol', $e->id) }}">{{ $e->nama }}</a></li>
      @endforeach
      </ul>
      </div>
      </div>
      @foreach($blog as $d)
      <div class="card">
      <div class="card-body">
        <div class="text-center">
        <img style="width: 50%; height: 50%; " src="{{ asset('img/'.$d->foto) }}">
        </div>
        <hr>
        <h3 class="text-center text-uppercase text-dark">{{ $d->judul }}</h3>
        <h6 class="text-center text-dark">Author : {{ $d->author }}</h6>
        <hr class="mb-3">
        <div class="">
          <div class="text-justify">
            {{ $d->deskripsi }}
          </div>
        <br>
        <br>
        
        </div>
        </div>
        </div>
        <br>
        @endforeach
      </div>
    </section>
@endsection