
@extends('layouts.main')

@section('container')
@include('partials.navbar')
<div class="row dashboard-main mt-4">
    <div class="col-md-6 text1 d-flex justify-content-center align-items-center flex-column">
        <div class="row welcome-text me-3 mb-3 ">
        Selamat Datang di Rumah Sakit <br>Hermina
    </div>
        <div class="row deskripsi mb-3">
            Rumah sakit Hermina baru dibuka lagi di Sumatera Barat, <br>tepatnya di kota Padang, pada tahun 2018. Dibangun <br>dengan 5 lantai dan berkapasitas 100 tempat tidur.
        </div>
        <div class="row instruksi mb-3">
            Silahkan Anda mengisi data formulir dengan mengklik isi formulir <br> di bawah ini:
        </div>  
        <a href="/daftar"><button type="button" class="btn btn-secondary button">Isi Formulir</button></a>
        
    </div>
    <div class="col-md-6 image-text d-flex justify-content-center align-items-center">
        <div class="box">
            <img src="Image/logocontoh.png" class="rounded mx-auto d-block gambar" >
        </div>
    </div>

    </div>
@endsection
   