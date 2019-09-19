@extends('layouts.aps')
 
@section('content')
<div class="jumbotron" style="margin-top:-23px;">
  <h1 class="display-4 text-center">Selamat Datang</h1>
  {{-- <p class="lead text-center"></p> --}}
</div>
 
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Member</h1>
 
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Member</th>
                        <th scope="col">Tanggal Daftar</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    
                        @foreach ($member as $member)
                        <tr>
                        <th >{{$member->id}}</th>
                        <td >{{$member->nama}}</td>
                        <th >{{$member->member}}</th>
                        <td >{{$member->tanggal }}</td>
                        <th >{{$member->email}}</th>
                        </tr>
                        @endforeach
                    
                </tbody>
                </table>
                    
        </div>
    </div>
</div>
 
 
 
@endsection