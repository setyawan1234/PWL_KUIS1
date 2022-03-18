@extends('layouts.main')
@section('main')
<body>
    <section>
        <div class="container tm-position-relative">
            <div class="row">
                <table class="table">
                    <thead>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                    </thead>
                    <tbody>
                        @foreach ($pelanggan as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>{{$p->nama}}</td>
                                <td>{{$p->jenisKelamin}}</td>
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
    <section class="templatemo-container blue-bg footer-nav effect1">
        <div class="container">
            <div class="col-lg-2 col-md-2 col-sm-6 footer-block">
                <h3 class="text-uppercase">Main menu</h3>
                <nav class="text-uppercase templatemo-nav-2">
                    <ul>
                        <li><a href="/home" >Home</a></li>
                        <li><a href="/product">product</a></li>
                        <li><a href="/customer">customer</a></li>
                        <li><a href="/employee">empployee</a></li>
                        <li><a href="/supplier">supplier</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 footer-block">
                <h3 class="text-uppercase">About us</h3>
                <p>HI-TECH MALL adalah a website that introduces a laptop product from a well-known brand to make it easier for users to search .</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 footer-block">
                <h3 class="text-uppercase">Resources</h3>
                <ul>
                    <li><a href="#">HI-Tech.com</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 footer-block">
                <h3 class="text-uppercase">Features</h3>
                <ul>
                    <li><a href="#"></a>Type Laptop</li>
                    <li><a href="#"></a>Type Accesories</li>
                </ul>
            </div>
    </section>
</body>
@endsection