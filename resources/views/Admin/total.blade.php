@extends('layouts.main')
@section('container')
@include('partials.adminnavbar')

<div class="row">
    <div class="col-md-2">
        @include('partials.sidebar')
    </div>
    <div class="col-md-10 d-flex justify-content-start mt-5 align-items-center flex-column">
        <div class="row text-total ">
            Jumlah Antrian pada:
        </div>
        <div class="row text-tanggal">
            Kamis, 18 Januari 2024
        </div>
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-md-12 justify-content-center">
                <div class="text-semuaantri d-flex justify-content-center align-items-center ">
                    Total Semua Antrian:
                </div>
            <div class="col-md-12 box-total flex-column d-flex justify-content-center align-items-center ">
                <div class="row text-jumlah d-flex justify-content-center align-items-center">
                    100
                </div>
                <div class="row d-flex justify-content-center align-items-center text-pengunjung">
                    Pengunjung
                </div>
            </div>
            
            </div>
        </div>  
    <div class="row mt-5">
        <div class="col-md-4 ">
            <div style="width:216px" class="text-semuaantri d-flex justify-content-center align-items-center ">
                Total Antrian:
            </div>
        <div class="col-md-12 box-total1 flex-column d-flex justify-content-center align-items-center me-5">
            <div class="row text-jumlah d-flex justify-content-center align-items-center">
                100
            </div>
            <div style="" class="row d-flex justify-content-center align-items-center text-pengunjung">
                Pengunjung
            </div>
        </div>
        
        </div>
        <div class="col-md-4">
            <div style="width:216px" class="text-semuaantri d-flex justify-content-center align-items-center ">
                Total Antrian:
            </div>
        <div class="col-md-12 box-total1 flex-column d-flex justify-content-center align-items-center">
            <div class="row text-jumlah d-flex justify-content-center align-items-center">
                100
            </div>
            <div class="row d-flex justify-content-center align-items-center text-pengunjung">
                Pengunjung
            </div>
        </div>
        
        </div>
        <div class="col-md-4">
            <div style="width:216px" class="text-semuaantri d-flex justify-content-center align-items-center ">
                Total Antrian:
            </div>
        <div class="col-md-12 box-total1 flex-column d-flex justify-content-center align-items-center">
            <div class="row text-jumlah d-flex justify-content-center align-items-center">
                100
            </div>
            <div class="row d-flex justify-content-center align-items-center text-pengunjung">
                Pengunjung
            </div>
        </div>
        
        </div>
    </div>
@endsection