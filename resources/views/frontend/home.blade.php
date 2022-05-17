@extends('frontend.frontend_template')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- indicadores -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                </ul>

                <!-- exibe o slide -->
                <div class="carousel-inner">
                    <div class="carousel-item-active">
                        <img src="" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="" alt="">
                    </div>
                </div>

                <!-- controles direito e esquerdo -->
                <a href="" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a href="" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <div>
                <h2 class="mt-4 text-center">Seus Produtos</h2>
                <div class="row">
                    <div class="col-md-3 d-flex align-items-stretch">
                        <div class="card product-card">
                            <a href=""></a>
                            <div class="card-body d-flex flex-column">
                                <span class="card-title text-center prod-name-link">
                                    <a href=""></a>
                                </span>
                                <div class="text-center mb-3">
                                    <input type="hidden" name="">
                                    <span class="cart-prod-price"></span>
                                    <span class="cart-prod-price"></span>
                                    <span class="cart-prod-price"></span>
                                </div>
                            </div>
                            <a href=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <a href="">Veja mais</a>
            </center>
            <div class="alert alert-warning text-center">
                Sem produtos
            </div>
        </div>
    </div>
</div>{{-- carousel --}}
@endsection