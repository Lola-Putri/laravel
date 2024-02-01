@extends('layouts.main')

@section('container')
    @include('partials.navbar')
    <div class="row dashboard-main mt-4">
        <div class="col-md-6 text1 d-flex justify-content-center align-items-center flex-column">
            <div class="row welcome-text me-3 mb-3 ">
                Selamat Datang di Rumah Sakit <br>Hermina
            </div>
            <div class="row deskripsi mb-3">
                Rumah sakit Hermina baru dibuka lagi di Sumatera Barat, <br>tepatnya di kota Padang, pada tahun 2018.
                Dibangun <br>dengan 5 lantai dan berkapasitas 100 tempat tidur.
            </div>
            <div class="row instruksi mb-3">
                Silahkan Anda mengisi data formulir dengan mengklik isi formulir <br> di bawah ini:
            </div>
            <div class="row button-isi">
                <a href="/daftar"><button type="button" class="btn button btn-secondary button">Isi Formulir</button></a>
            </div>

        </div>
        <div class="col-md-6 image-text d-flex justify-content-center align-items-center box-container">
            <div class="box1">
                <div id="carouselExample" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="5000">
                        <img src="Image/hermina1.jpg" class="d-block " alt="...">
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img src="Image/hermina2.jpg" class="d-block " alt="...">
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img src="Image/hermina3.jpeg" class="d-block " alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                      <span class="carousel-control" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                      <span class="carousel-control" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </div>
    
@endsection
