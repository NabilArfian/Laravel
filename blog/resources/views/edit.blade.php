<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
    <br>
    <div class="card">
    <div class="card-body">
    <form action="{{ route('edit.simpan') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    
    <input type="hidden" name="id" value="{{ $data->id }}">
    
    <div class="form-group">
        <label for="formGroupExampleInput">Judul</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Judul" name="judul" value="{{ $data->judul }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Deskripsi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Deskripsi" name="deskripsi">
            {{ $data->deskripsi }}
        </textarea>
    </div>
    <div class="form-group">
		<label for="formGroupExampleInput">Kategori</label>
		<select class="form-control" name="id_kategori">
		<option value="{{ $data->blog['id'] }}">{{ $data->blog['nama'] }}</option>
		@foreach($kate as $k)
		<option value="{{ $k->id }}">{{ $k->nama }}</option>
		@endforeach
		</select>
    </div>
    <div class="form-group">
		<label for="formGroupExampleInput">Author</label>
		<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Author" name="author" value="{{ $data->author }}">
	</div>
	<div class="form-group">
        <label for="formGroupExampleInput">Gambar</label>
		<input type="file" name="foto" class="form-control p-1 mb-2">
	</div>
    <button class="btn btn-success">Edit</button>
    </form>
    </div>
    </div>
    </div>
</body>
</html>