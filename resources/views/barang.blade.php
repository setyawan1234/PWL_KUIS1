@extends('layouts.main')
@section('main')
<body>
    <section class="templatemo-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-uppercase text-center">
                    <h2 class="section-title">LIST PRODUCT</h2>
                    <div class="section-title-underline-blue"></div>
                    <hr class="section-title-underline">
                    <p class="small">Hi-Tech Mall Website</p>
                </div>
            </div>
    </section>
    <section>
    <div class="container tm-position-relative">
        <div class="col">
            <div class="col-md-4">
                <div class="card">
                    <tbody>
                        @foreach ($barang as $b)
                            <td><img src="{{$b->gambar}}" height= "250px"></td>
                                <div class="card-body">
                                    <td><p class="section-title">{{$b->namalaptop}}</p></td>
                                    <td><p class="card-text">{{$b->spesifikasi}}</p></td>
                                    <td><a href="#" class="btn btn-primary">{{$b->harga}}</a></td>
                                    <td><a href="#" class="btn btn-success">Buy</a></td>
                                </div>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>
@endsection