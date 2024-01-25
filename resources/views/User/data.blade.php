@extends('layouts.main')
@section('container')
@include('partials.navbar4')

<div class="row d-flex justify-content-center h-100">
    <div class="col-md-12 mt-5 d-flex justify-content-center align-items-center">
        <div class="row box-data rounded mx-auto d-flex justify-content-center mt-2">
           <div class="row box-nomor d-flex justify-content-center align-items-center">
            Nomor Antrian Anda
           </div>
        <div class="row text-box1 d-flex justify-content-center mt-4 ">
            A001
        </div>
        <div class="row text-boxall ms-3 ">
            Nama: Lola Dwi Putri
        </div>
        <div class="row text-boxall ms-3 ">
            NIK: 12XXXXXXXXXXXX00
        </div>
        <div class="row text-boxall ms-3">
            Tanggal: 16/1/2024
        </div>
        <div class="row text-boxall ms-3 mb-3">
            Waktu: 08.30 WIB
        </div>
        <div class="row text-boxall1 d-flex justify-content-center ms-3">
            Anda Menunggu 2 antrian
        </div>
        <div class="row text-boxall1 d-flex justify-content-center ms-3">
            Silahkan menunggu nomor antrian
        </div>
        <div class="row text-boxall1 d-flex justify-content-center ms-3">
            Nomor ini hanya berlaku pada
        </div>
        <div class="row text-boxall1 d-flex justify-content-center ms-3">
            hari pendaftaran antrian
        </div>
        

    </div>
</div>
@endsection
