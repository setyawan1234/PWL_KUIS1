@extends('layouts.main')
@section('main')
<body>
    <section class="templatemo-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-uppercase text-center">
                    <h2 class="section-title">LIST Empployee</h2>
                    <div class="section-title-underline-blue"></div>
                    <hr class="section-title-underline">
                    <p class="small">Hi-Tech Mall Website</p>
                </div>
            </div>
    </section>
    <section>
        <div class="container tm-position-relative">
            <div class="row">
                <table class="table" border='1'>
                    <thead>
                            <th>Id</th>
                            <th>Foto Profil</th>
                            <th>NamaPegawai</th>
                            <th>JenisKelamin</th>
                            <th>Jabatan</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                    </thead>
                    <tbody>
                        @foreach ($pegawai as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td><img rsc="{{$p->fotoProfil}}" height="15px"></td>
                                <td>{{$p->namaPegawai}}</td>
                                <td>{{$p->jenisKelamin}}</td>
                                <td>{{$p->jabatan}}</td>
                                <td>{{$p->alamat}}</td>
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
