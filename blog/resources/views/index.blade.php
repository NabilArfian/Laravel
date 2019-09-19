@extends('layouts.aps')
 
@section('content')
<br>
<br>
<br>
<br>
<div class="container">
<a href="{{url('/create')}}" class="btn btn-primary mb-3">Create Member</a>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Member</h1>
 
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Member (ID)</th>
                        <th scope="col">Tanggal Daftar</th>
                        <th scope="col">Email</th>
                        <th scope="col">Modify</th>
                    </tr>
                </thead>
                <tbody>
                    
                        @foreach ($member as $blog)
                        <tr>
                        <td >{{$blog->id}}</th>
                        <td >{{$blog->nama}}</td>
                        <td >{{$blog->member}}</th>
                        <td >{{$blog->tanggal }}</td>
                        <td >{{$blog->email}}</th>
                        <td>
                        <a href="{{route('blog.delete',$blog->id)}}" class="btn btn-danger">Delete</a> 
                        <a href="{{route('blog.edit',$blog->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        </tr>
                        @endforeach
                    
                    </tbody>
                    </table>
                    
        </div>
    </div>
</div>

<div class="container">
<div class="card">
        <div class="card-body">
            <h1 class="text-center">Jenis Member</h1>
 
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Jenis Member</th>
                    </tr>
                </thead>
                <tbody>
                    
                        @foreach ($mob as $blogs)
                        <tr>
                        <td >{{$blogs->id}}</th>
                        <td >{{$blogs->j_member}}</td>
                        @endforeach
                    
                    </tbody>
                    </table>
                    
        </div>
    </div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 
@endsection