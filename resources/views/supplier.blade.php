@extends('layouts.main')
@section('main')
<body>
    <section class="templatemo-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-uppercase text-center">
                    <h2 class="section-title">LIST Supplier</h2>
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
                            <th>NamaSupplier</th>
                            <th>Produk</th>
                            <th>Kota</th>
                            <th>No Telepon</th>
                    </thead>
                    <tbody>
                        @foreach ($supplier as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>{{$p->namaSupplier}}</td>
                                <td>{{$p->produk}}</td>
                                <td>{{$p->kota}}</td>
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
