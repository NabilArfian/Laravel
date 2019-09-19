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
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('tambahgaleri') }}" method="POST" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                            <input type="hidden" name="id" value="">
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" class="form-control p-1">
                            </div>
                            <div class="form-grup">
                                <input type="hidden" name="author" value="{{Auth::user()->name}}" class="form-control">
                            </div>
                            <div>
                                <a href="{{url('menugaleri')}}" style="margin-top:20px;" class="btn btn-danger">Back</a>
                                <input type="submit" name="button" value="Simpan" style="margin-top:20px;"
                                    class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
