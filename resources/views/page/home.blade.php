@extends('layouts.app')

@section('title', 'Home')
@section('content')
 <div class="row justify-content-center">
            <div class="col-md-12">
            <h2 class="mt-5">Selamat Datang</h2>
            <p>ini adalah halaman utama project web profile prodi si unpam</p>
            <a class="btn btn-primary" href="{{url('/profile')}}">Lihat Profile</a>
            </div>
        </div>

@endsection
