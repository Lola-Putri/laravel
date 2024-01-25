@extends('layouts.main')
@section('container')
@include('partials.adminnavbar')

<div class="row">
    <div class="col-md-3">
        @include('partials.sidebar')
    </div>
    <div class="col-md-9 flex-column d-flex justify-content-start data-instansi">
        <div class="row d-flex justify-content-start">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Loket</label>
                <input type="email" class="form-control form-input" id="exampleFormControlInput1" placeholder="Masukkan nama loket">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mb-2">Jumlah Antrian</label>
                <input type="number" class="form-control form-input mb-1" id="exampleFormControlInput1" placeholder="Masukkan jumlah antrian">
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Pilih Gambar</label>
                <input class="form-control form-input1 mb-3" type="file" id="formFile">
              </div>
        </div>
        <div class="row ">
            <a href="/tambahloket"><button type="button" class="btn btn-secondary btn-addloket">Tambah Loket</button></a>
        </div>
    </div>
</div>
    
@endsection