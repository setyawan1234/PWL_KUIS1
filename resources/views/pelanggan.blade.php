@extends('layouts.main')
@section('main')
<body>
    <section class="templatemo-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-uppercase text-center">
                    <h2 class="section-title">LIST CUSTOMER</h2>
                    <div class="section-title-underline-blue"></div>
                    <hr class="section-title-underline">
                    <p class="small">Hi-Tech Mall Website</p>
                </div>
            </div>
    </section>
    <section>
        <div class="container tm-position-relative">
            <div class="row">
                <table class="table">
                    <thead>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                    </thead>
                    <tbody>
                        @foreach ($pelanggan as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>{{$p->nama}}</td>
                                <td><img src="{{$p->jenisKelamin}}" height="25px"></td>
                                <td>{{$p->alamat}}</td>
                                <td>{{$p->email}}</td>
                                <td>{{$p->noTelp}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
@endsection