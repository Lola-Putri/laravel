@extends('layouts.main')
@section('container')
@include('partials.adminnavbar')

<div class="row">
    <div class="col-md-3">
        @include('partials.sidebar')
    </div>
    <div class="col-md-9 d-flex align-items-start kolom-tambah flex-column justify-content-center">
        <div class="row gap-5 d-flex justify-content-center ms-5">
            <div class="col-md-4 box-tambah ">
                <div class="row text-addque d-flex justify-content-center mt-4">
                    Loket 1
                </div>
                <div class="row d-flex justify-content-center mt-4">
                    <img src="Image/image-loket1.png" class="image-antrian">
                </div>
                <div class="row text-que d-flex justify-content-center mt-4">
                    Jumlah antrian: 20
                </div>
                <div class="row mt-5">
                    <a href="" class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-instansi">Tambah Antrian</button></a>
                </div>
            </div>
            <div class="col-md-4 box-tambah">
                <div class="row text-addque d-flex justify-content-center mt-4">
                    Loket 2
                </div>
                <div class="row d-flex justify-content-center mt-4">
                    <img src="Image/image-loket2.png" class="image-antrian">
                </div>
                <div class="row text-que d-flex justify-content-center mt-4">
                    Jumlah antrian: 26
                </div>
                <div class="row mt-5">
                    <a href="" class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-instansi">Tambah Antrian</button></a>
                </div>
            </div>
            <div class="col-md-4 box-tambah">
                <div class="row text-addque d-flex justify-content-center mt-4">
                    Loket 3
                </div>
                <div class="row d-flex justify-content-center mt-4">
                    <img src="Image/image-loket3.png" class="image-antrian">
                </div>
                <div class="row text-que d-flex justify-content-center mt-4">
                    Jumlah antrian: 30
                </div>
                <div class="row mt-5 ">
                    <a href="" class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-instansi">Tambah Instansi</button></a>
                </div>
            </div>
        </div>

    </div>
    
</div>
    
@endsection
