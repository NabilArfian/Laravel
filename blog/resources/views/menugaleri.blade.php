@extends('layouts.aps')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{URL::asset('/aset/css/dtble.css')}}">
    <title>Menu Galeri</title>
</head>

<body>
<br>
<br>
<br>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
            <div><a href="{{ route('galeri.export',['type'=>'xls']) }}" class="btn btn-primary mb-3 mt-3" 
                    style="margin-right: 15px;">Download - Excel xls</a></div>
                <table class="table" id="myTable">
                    <thead>
                    <tr class="bg-info">
                        <th width="100">ID</th>
                        <th width="300">Gambar</th>
                        <th width="300">Dibuat</th>
                        <th width="200">Author</th>
                        <th width="250">Modify<a class="btn btn-light" style="margin-left:25px;"
                                href="{{url('getgaleri') }}">Tambah</a></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($galeri as $gallery)
                    <tr class="bg-light">
                        <td>{{ $gallery->id }}</td>
                        <td>{{ $gallery->gambar }}</td>
                        <td>{{ date("d F Y",strtotime($gallery->created_at)) }}</td>
                        <td>{{ Auth::user()->name }}</td>
                        <td><a class="btn btn-danger" href="{{ route('galeri.delete',$gallery->id) }}"
                                style="margin-left:25px;">Delete</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
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
<br>



  

</body>

</html>
@endsection
