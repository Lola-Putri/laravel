@extends('layouts.main')

@section('container')
    @include('partials.navbar')

    <div class="row daftar-main mt-4">
        <div class="col-md-6 image-text d-flex justify-content-center align-items-center box-container">
            <div class="box">
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
        <div class="col-md-6 data d-flex flex-column align-items-center">
            <div class="row  mt-2 form">
                Data Pengunjung
            </div>
            <div class="row">
                <div class="mb-3 form-regis">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control  mb-1" id="exampleFormControlInput1"
                        placeholder="Masukkan nama Anda">
                    <label for="exampleFormControlInput1" class="form-label">NIK</label>
                    <input type="number" class="form-control mb-1" id="exampleFormControlInput1"
                        placeholder="Masukkan NIK Anda">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input type="text" class="form-control mb-1" id="exampleFormControlInput1"
                        placeholder="Masukkan alamat Anda">
                    <label for="exampleFormControlInput1" class="form-label">No. Handphone</label>
                    <input type="number" class="form-control mb-1" id="exampleFormControlInput1"
                        placeholder="Masukkan No. handphone Anda ">
                    <label for="jenisKelamin" class="mb-2">Jenis Kelamin</label>
                    <select id="jenisKelamin" class="form-select mb-3" aria-placeholder=""
                        aria-label="Default select example">
                        <option selected>Pilih jenis kelamin</option>
                        <option value="1">Perempuan</option>
                        <option value="2">Laki-laki</option>
                    </select>
                    <img src="Image/dropdown-ico.svg" class="dropdown-ico">
                        <a class="d-flex justify-content-center" href="/loket"><button type="button"
                            class="btn btn-secondary button">Kirim</button></a>
                </div>
            </div>
            <div class="row"></div>
        </div>

    </div>
@endsection
