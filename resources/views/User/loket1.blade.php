@extends('layouts.main')
@section('container')
@include('partials.navbar3')

<div class="row d-flex">
    <div class="col-md-12 d-flex w-100 flex-column">
        <div class="row d-flex justify-content-center nama-loket1 mt-4 ">
            Poliklinik Umum
       </div>
       <div class="row tanggal d-flex justify-content-center mb-5">
        Selasa, 16 Januari 2024
       </div>
   </div>
       <div class="row box-antrian1 rounded mx-auto d-flex justify-content-center mt-2">
            <div class="text-box1 d-flex justify-content-center align-items-center">
                A001
            </div>
           <div class="row box-sub-antrian1 d-flex justify-content-center align-items-center">
            Antrian Saat Ini
           </div>
           
       </div>
       <div class="row d-flex justify-content-between">   
        <div class="col-md-6 d-flex justify-content-center ">
            <div class="row box-antrian1 d-flex justify-content-center align-items-center mt-5">
                <div class="text-box1 d-flex justify-content-center align-items-center">
                    A002
                </div>
               <div class="row  box-sub-antrian1 d-flex justify-content-center align-items-center">
                Antrian Selanjutnya
               </div>
            </div>
        </div>
        
        <div class="col-md-6 d-flex justify-content-center">
            <div class="row box-antrian1 d-flex justify-content-center mt-5">
                <div class="text-box1 d-flex justify-content-center align-items-center">
                    10
                </div>
               <div class="row  box-sub-antrian1 d-flex justify-content-center align-items-center">
                Sisa
               </div>
            </div>
        </div>
    </div>
       </div>
       <div class="row d-flex justify-content-evenly mt-5">
        <div  class="col-md-4 d-flex align-items-center justify-content-end mt-2">
            <img src="Image/line-kirim.png">
        </div>
        <div class="col-md-4 d-flex-justify-content-center">
            <a class="d-flex justify-content-center" href="/data"><button type="button" class="btn btn-secondary button ">Daftar</button></a>
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-start mt-2">
            <img src="Image/line-kirim.png">
        </div>
       </div>
       
    </div>
</div>
@endsection