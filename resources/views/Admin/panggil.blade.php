@extends('layouts.main')
@section('container')
    @include('partials.adminnavbar')

    <div class="row">
        <div class="col-md-3">
            @include('partials.sidebarperloket')
        </div>
        <div style="height: 100vh" class="col-md-9 d-flex justify-content-center align-items-center">
            <div class="row w-100 d-flex justify-content-center">
                <div class="col-md-6 d-flex justify-content-center align-items-center flex-column box-panggil1">
                    <div class="row text-panew d-flex justify-content-center align-items-center mb-4">
                        Loket 1
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <img src="Image/image-loket1.png" class="image-loket1-panggil">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-center flex-column align-items-center gap-5">
                        <div class="col-md-12 box-sub-panggil">
                            <div class="row d-flex flex-row ">
                                <div class="col-md-12 d-flex flex-column justify-content-center mt-4 gap-2">
                                    <div class="row justify-content-center">
                                        <button type="button" class="btn btn-secondary btn-addloket">Selanjutnya</button>
                                    <img src="Image/sound-icon.png" class="sound-icon">
                                    </div>
                                    <div style="display: flex" class="row justify-content-center text-panggil">
                                        A002
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12 box-sub-panggil">
                            <div class="row d-flex flex-row ">
                                <div class="col-md-12 d-flex flex-column justify-content-center mt-4 gap-2">
                                    <div class="row justify-content-center">
                                        <button type="button" class="btn btn-secondary btn-addloket">Selanjutnya</button>
                                    <img src="Image/sound-icon.png" class="sound-icon">
                                    </div>
                                    <div style="display: flex" class="row justify-content-center text-panggil">
                                        A001
                                    </div>
                                </div>        
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
@endsection
