@extends('layouts.main')
@section('container')
@include('partials.adminnavbar')

<div class="row">
        <div class="col-md-3">
            @include('partials.sidebar')
        </div>
        <div style="height: 100vh" class="col-md-9  d-flex justify-content-center align-items-center flex-column">
            <div class="row ">
                <div class="col-md-12 box-instansi d-flex justify-content-center flex-column align-items-center">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Instansi</label>
                        <input type="email" class="form-control form-input" id="exampleFormControlInput1"
                            placeholder="Masukkan nama loket">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Instansi</label>
                        <textarea class="form-control form-input" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Pilih Logo</label>
                        <input class="form-control form-input1 mb-3" type="file" id="formFile">
                    </div>
                    <div class="row ">
                        <button type="button" class="btn btn-secondary btn-addloket">Simpan</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
