@extends('layouts.main')

@section('container')
@include('partials.navbar2')
<style>
    .dropdown-center:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        z-index: 1000;
    }
</style>

<div style="height: 100vh" class="col-md-12 d-flex justify-content-center align-items-center flex-column">
   
<div class="row tujuan d-flex justify-content-center align-items-center mb-4">
    Pilih Tujuan Anda
</div>
    <div class="row loket d-flex justify-content-center gap-5">
        <div class="col-md-4 box-loket d-flex justify-content-center align-items-center flex-column ">
                <a href="/loket1"><div class="row mb-3">
                    <img src="Image/image-loket1.png" class="image-loket1">
                </div></a>
                <div class="row mb-3">
                    <img src="Image/line-loket.png" class="line-loket">
                </div>
                <div class="row text-loket1 mb-">
                    Loket 1
                </div>
                <div class="row">  
                    <div class="dropdown-center ">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Poliklinik Umum
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#"> Melayani: <br>1. Pelayanan kesehatan umum <br>2. Konseling kesehatan <br>3. Rujukan <br>4. Surat Sehat <br>5. Surat sakit/dokter</a></li>
    
                        </ul>
                      </div>
                </div>
            
        </div>
        <div class="col-md-4 box-loket d-flex justify-content-center align-items-center flex-column">
            <div class="row mb-3">
                <img src="Image/image-loket2.png" class="image-loket1">
            </div>
            <div class="row mb-3">
                <img src="Image/line-loket.png" class="line-loket">
            </div>
            <div class="row text-loket1 mb-">
                Loket 2
            </div>
            <div class="row">  
                <div class="dropdown-center ">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Poliklinik Gigi & Mulut
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#"> Melayani: <br>1. Pengobatan gigi dan mulut <br>2. Konsultasi gigi dan mulut <br>3. Pencabutan gigi</a></li>
    
                    </ul>
                  </div>
            </div>
        </div>
        <div class="col-md-4 box-loket d-flex justify-content-center align-items-center flex-column">
            <div class="row mb-3">
                <img src="Image/image-loket3.png" class="image-loket1">
            </div>
            <div class="row mb-3">
                <img src="Image/line-loket.png" class="line-loket">
            </div>
            <div class="row text-loket1 mb-">
                Loket 3
            </div>
            <div class="row">  
                <div class="dropdown-center ">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Poliklinik Ibu & Anak
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#"> Melayani: <br>1. Pemeriksaan kehamilan <br>2. Nifas <br>3. kasus</a></li>
    
                    </ul>
                  </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var dropdowns = document.querySelectorAll('.dropdown-center');

        dropdowns.forEach(function (dropdown) {
            dropdown.addEventListener('mouseover', function () {
                this.querySelector('.dropdown-menu').classList.add('show');
            });

            dropdown.addEventListener('mouseout', function () {
                this.querySelector('.dropdown-menu').classList.remove('show');
            });
        });
    });
</script>

@endsection