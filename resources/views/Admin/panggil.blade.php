@extends('layouts.main')
@section('container')
@include('partials.adminnavbar')

<div class="row">
    <div class="col-md-3">
        @include('partials.sidebar')
    </div>
    <div class="col-md-9 d-flex justify-content-start align-items-center">
        <div class="row">
            <div class="tabel-que">
                <table class="table table-striped tabel-panggil rounded">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Tujuan</th>
                    <th scope="col">Jumlah Antrian</th>
                    <th scope="col">No. Dipanggil</th>
                    <th scope="col">Sisa</th>
                    <th scope="col">Panggil</th>
                    <th scope="col">Panggil Ulang</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Loket 1</td>
                    <td>30</td>
                    <td>A001</td>
                    <td>6</td>
                    <td><button type="button" class="btn btn-secondary btn-panggil btn-sm">Panggil</button></td>
                    <td><button type="button" class="btn btn-secondary btn-sm btn-panggilulang">Panggil Ulang</button></td>
                  </tr>
                  <tr class="">
                    <th scope="row">2</th>
                    <td>Loket 2</td>
                    <td>34</td>
                    <td>B003</td>
                    <td>4</td>
                    <td><button type="button" class="btn btn-secondary btn-panggil btn-sm">Panggil</button></td>
                    <td><button type="button" class="btn btn-secondary btn-sm btn-panggilulang">Panggil Ulang</button></td>
                  </tr>
               
                <tr>
                  <th scope="row">3</th>
                  <td>Loket 3</td>
                    <td>25</td>
                    <td>C003</td>
                    <td>8</td>
                    <td><button type="button" class="btn btn-secondary btn-panggil btn-sm">Panggil</button></td>
                    <td><button type="button" class="btn btn-secondary btn-sm btn-panggilulang">Panggil Ulang</button></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Loket 4</td>
                    <td>40</td>
                    <td>D003</td>
                    <td>9</td>
                    <td><button type="button" class="btn btn-secondary btn-panggil btn-sm">Panggil</button></td>
                    <td><button type="button" class="btn btn-secondary btn-sm btn-panggilulang">Panggil Ulang</button></td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Loket 5</td>
                    <td>34</td>
                    <td>B003</td>
                    <td>4</td>
                    <td><button type="button" class="btn btn-secondary btn-panggil btn-sm">Panggil</button></td>
                    <td><button type="button" class="btn btn-secondary btn-sm btn-panggilulang">Panggil Ulang</button></td>
                </tr>
            </tbody>
              </table>
            </div>
        </div>
    </div>
</div>
    
@endsection