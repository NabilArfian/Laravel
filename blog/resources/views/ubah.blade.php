@extends('layouts.app')
 
@section('content')
<br>
<br>
<br>
<div class="container">
<a href="{{url('/member')}}" class="btn btn-primary mb-3">BACK</a>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Edit Member</h1>
            <form action="{{ route('blog.update') }}" method="Post">
            {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $mbr->id }}">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" value="{{ $mbr->nama }}">
                <label for="member">Jenis Member</label>
                <select class="form-control" name="member">
                @foreach($mrr as $j)
                <option value="{{ $j->id }}">{{ $j->j_member }}</option>
                @endforeach 
			    </select>	
                <label for="tanggal">Tanggal</label>
                <input type="hidden" class="form-control" name="tanggal" value="{{ $mbr->tanggal }}">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $mbr->email }}">
                <br>
                <button type="submit" class="btn btn-success">Simpan</button> 
 
            </form>
        </div>
    </div>
</div>
 
 
 
@endsection