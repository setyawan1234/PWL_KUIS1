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
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    @foreach ($barang as $b)
                    <div class="col-md-4">
                        <div class="card">
                            
                                
                                    <img src="{{$b->gambar}}" height= "350px">
                                        <div class="card-body">
                                            <p class="section-title">{{$b->namalaptop}}</p>
                                            <p class="card-text">{{$b->spesifikasi}}</p>
                                            <a href="#" class="btn btn-primary">{{$b->harga}}</a>
                                            <a href="#" class="btn btn-success">Buy</a>
                                        </div>
                                
                            
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>    
    </section>
</body>
@endsection