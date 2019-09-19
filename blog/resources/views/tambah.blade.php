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
    <div class="card">
    <div class="card-body">
    <form action="save" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group">
    <label for="formGroupExampleInput">Judul</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Judul" name="judul">
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Deskripsi</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="20" placeholder="Deskripsi" name="deskripsi" value="900"></textarea>
    </div>
    <div class="form-group">
	<label for="formGroupExampleInput">Kategori</label>
	<select class="form-control" name="id_kategori">
	@foreach($kategori as $d)
	<option value="{{ $d->id }}">{{ $d->nama }}</option>
	@endforeach
	</select>
	</div>
    <div class="form-group">
    <label for="formGroupExampleInput">Author</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Author" name="author">
    </div>
    <div class="form-group">
	<label for="formGroupExampleInput">Gambar</label>
	<input type="file" name="foto" class="form-control p-1 mb-2">
	</div>
    <button class="btn btn-success">Tambah</button>
    </form>
    </div>
    </div>
    </div>
</body>
</html>