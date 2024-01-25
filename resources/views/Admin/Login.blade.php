@extends('layouts.main')
@section('container')
@include('partials.navbar')

<div class="row dashboard-main mt-4">
    <div class="col-md-6 d-flex justify-content-center align-items-center flex-column gap-2">
        <div class="row text-login">
            Masuk
        </div>
        <div class="row">
            <img src="Image/line-masuk.png">
        </div>
        <div class="row">
            <div class="form-regis">
                <label for="exampleFormControlInput1" class="form-label mb-2">ID Admin</label>
                <input type="number" class="form-control mb-1" id="exampleFormControlInput1" placeholder="Masukkan ID Anda">
                <label for="inputPassword5" class="form-label">Sandi</label>
                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock\">
                <img src="Image/eye-pass.png" class="eye-pass">
            </div>
        </div>
        <div class="row d-flex w-100">
            <div class="col-md-6 forget-pass d-flex justify-content-center">
                Lupa sandi?
            </div>
            <div class="col-md-6 button-login">
                <a class="d-flex justify-content-center" href="/instansi"><button type="button" class="btn btn-secondary button">Login</button></a>
            </div>
        </div>
    </div>
    <div class="col-md-6 image-text d-flex justify-content-center align-items-center">
        <div class="box-login">
            <img src="Image/image-login.png" class="rounded mx-auto d-block gambar-login" >
        </div>
    </div>
</div>
@endsection