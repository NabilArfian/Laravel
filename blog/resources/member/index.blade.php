@extends('layouts.app')
 
@section('content')
<div class="container">
<a href="{{route('create')}}" class="btn btn-primary mb-3">Create Member</a>
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
                        <td><a href="{{route('delete1',$member->id)}}" class="btn btn-danger">Delete</a> <a href="" class="btn btn-primary"  >Edit</a> <a href="{{route('details',$member->id)}}" class="btn btn-primary"> View</a> </td>
                        </tr>
                        @endforeach
                    
                    </tbody>
                    </table>
                    
        </div>
    </div>
</div>
 
 
 
@endsection