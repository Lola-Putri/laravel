@extends('layouts.main')
@section('container')
@include('partials.navbar5')

<div class="row d-flex justify-content-center gap-5 mb-5">
    <div class="col-md-6 box-antrian-sekarang d-flex justify-content-evenly flex-column me-5">
        <div class="row text-antri mt-3 d-flex justify-content-center">
            Nomor Antrian
        </div>
        <div class="row">
            <img src="Image/line-antrian.png" class="line">
        </div>
        <div class="row text-now d-flex justify-content-center">
            A001
        </div>
        <div class="row d-flex justify-content-end align-items-end">
            <img src="Image/line-antrian.png" class="line">
        </div>
        <div class="row text-antri d-flex justify-content-center">
            Loket 1
        </div>
    </div>
    <div class="col-md-6 box-kedua d-flex justify-content-center align-items-center ms-5">
        <img src="Image/image-tunggu.png" class="image-tunggu ">
    </div>
</div>
<div class="row d-flex justify-content-center mt-4 gap-5">
    <div class="col-md-4 box-loket1-now d-flex justify-content-evenly me-5 flex-column">
        <div class="row loket1-text d-flex justify-content-center align-items-center">
            Loket 1
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <img src="Image/line-antrian1.png" class="line1">
        </div>
        <div class="row text-loketall d-flex justify-content-center">
            A003
        </div>
    </div>
    <div class="col-md-4 box-loket2-now d-flex justify-content-evenly flex-column">
        <div class="row loket1-text d-flex justify-content-center align-items-center">
            Loket 2
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <img src="Image/line-antrian1.png" class="line1">
        </div>
        <div class="row text-loketall d-flex justify-content-center align-items-center">
            B004
        </div>
    </div>
    <div class="col-md-4  box-loket1-now d-flex justify-content-evenly ms-5 flex-column">
        <div class="row loket1-text d-flex justify-content-center align-items-center">
            Loket 3
        </div>
        <div class="row">
            <img src="Image/line-antrian1.png" class="line1">
        </div>
        <div class="row text-loketall d-flex justify-content-center align-items-center">
            C001
        </div>
    </div>
</div>
@endsection