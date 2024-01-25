@extends('layouts.main')
@section('container')
@include('partials.adminnavbar')
    
<div class="row">
    {{-- <div style="width:23%;" class="col-md-2">
        @include('partials.sidebar')
    </div>
    <div style="width:77%; height:100vh;" class="col-md-10  flex-column d-flex justify-content-center align-items-center">
        <div class="row box-instansi d-flex align-items-center">
            <div class="">
                <label for="exampleFor mControlInput1" class="form-label">Nama Instansi</label>
                <input type="email" class="form-control form-input" id="exampleFormControlInput1" placeholder="Masukkan nama instansi Anda">
              </div>
              <div class="">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Instansi</label>
                <textarea class="form-control form-input" id="exampleFormControlTextarea1" rows="2"></textarea>
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Logo Instansi</label>
                <input class="form-control form-input mb-3" type="file" id="formFile">
              </div>
        <div class="row ms-2">
           <a href=""><button type="button" class="btn btn-secondary btn-instansi">Tambah Instansi</button></a>
        </div>
        
          
    </div>
</div> --}}

<div class="col-md-3">
  @include('partials.sidebar')
</div>
<div class="col-md-9 box-instansi">
      <div class="row d-flex justify-content-start">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama </label>
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
</div>
@endsection