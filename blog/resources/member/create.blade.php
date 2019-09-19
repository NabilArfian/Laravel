@extends('layouts.app')
 
@section('content')

<div class="container">
<a href="{{route('index')}}" class="btn btn-primary mb-3">BACK</a>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Create Member</h1>
            <form action="{{ route('member.store') }}" method="Post">
            {!! csrf_field() !!}
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama">
                <label for="member">Jenis Member</label>
                <select class="form-control" name="member">
                    <option value="1">Free Membership</option>
                    <option value="2">Premium Membership</option>
                    <option value="3">Diamond Membership</option>
                    <option value="4">Platinum Membership</option>
			    </select>	
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" name="tanggal">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email">
                <br>
                <input type="submit" value="POST" class="btn btn-primary">
 
            </form>
        </div>
    </div>
</div>
 
 
 
@endsection