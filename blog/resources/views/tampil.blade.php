<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
    
    <table class="table">
        <tr class="bg-dark text-light">
        <td>Judul</td>
        <td>Deskripsi</td>
        <td>Kategori</td>
		<td>Author</td>
		<td>Gambar</td>
        <td><a class="btn btn-success" href="tambah">Tambah</a></td>
        <td><a class="btn btn-primary" href="article">Lihat Postingan</a></td>
        @foreach($blog as $d)
        <tr>
        <td>{{$d->judul}}</td>
        <td>{{$d->deskripsi}}</td>
        <td>{{$d->blog['nama']}}</td>
		<td>{{$d->author}}</td>
        <td><img style="width: 130px;" src="{{ asset('img/'.$d->foto) }}"></td>
        <td>
            <a class="btn btn-primary" href="{{ route('edit', $d->id) }}">Edit</a>
            <a class="btn btn-danger" href="{{ route('del', $d->id) }}">Delete</a>
        </td>
        </tr>
        @endforeach
    </table>

</body>
</html>