@extends('layouts.main')
@section('container')
@include('partials.adminnavbar')

<div class="row">
    <div class="col-md-3">
        @include('partials.sidebar')
    </div>
    <div style="height: 100vh" class="col-md-9 d-flex justify-content-center align-items-start flex-column">
        <div  class="row">
            <div class="tabel-que">
                <table class="table table-striped tabel-panggil rounded text-center">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Loket</th>
                    <th scope="col">Jumlah Antrian</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Loket 1</td>
                    <td>30</td>
                    <td><button type="button" class="btn btn-secondary btn-panggil btn-sm">Lihat</button></td>
                    <td><button type="button" class="btn btn-secondary btn-panggil btn-sm">Edit</button>
                        <button type="button" class="btn btn-secondary btn-sm btn-panggilulang">Hapus</button></td>
        
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Loket 2</td>
                    <td>30</td>
                    <td><button type="button" class="btn btn-secondary btn-panggil btn-sm">Lihat</button></td>
                    <td><button type="button" class="btn btn-secondary btn-panggil btn-sm">Edit</button>
                        <button type="button" class="btn btn-secondary btn-sm btn-panggilulang">Hapus</button></td>
                  </tr>
               
                  <tr>
                    <th scope="row">3</th>
                    <td>Loket 3</td>
                    <td>40</td>
                    <td><button type="button" class="btn btn-secondary btn-panggil btn-sm">Lihat</button></td>
                    <td><button type="button" class="btn btn-secondary btn-panggil btn-sm">Edit</button>
                        <button type="button" class="btn btn-secondary btn-sm btn-panggilulang">Hapus</button></td>
        
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Loket 4</td>
                    <td>67</td>
                    <td><button type="button" class="btn btn-secondary btn-panggil btn-sm">Lihat</button></td>
                    <td><button type="button" class="btn btn-secondary btn-panggil btn-sm">Edit</button>
                        <button type="button" class="btn btn-secondary btn-sm btn-panggilulang">Hapus</button></td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Loket 5</td>
                    <td>58</td>
                    <td><button type="button" class="btn btn-secondary btn-panggil btn-sm">Lihat</button></td>
                    <td><button type="button" class="btn btn-secondary btn-panggil btn-sm">Edit</button>
                        <button type="button" class="btn btn-secondary btn-sm btn-panggilulang">Hapus</button></td>
                  </tr>
            </tbody>
              </table>
              <div class="row d-flex justify-content-center ">
                <a href="/tambahloket1"><button type="button" class="btn btn-secondary btn-addloket">Tambah Loket</button></a>
            </div>
            </div>
        </div>
    </div>
</div>
    
@endsection