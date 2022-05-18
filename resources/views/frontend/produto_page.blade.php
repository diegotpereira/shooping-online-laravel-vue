@extends('frontend.frontend_template')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('frontend_homepage') }}">Principal</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Produtos</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="mt-2 mb-4">
        <div class="row">
            <div class="col-md-2 col-lg-2">

            </div>
            <div class="col-md-10 col-lg-10">
                <h2 class="ifg-header mb-3">Produtos</h2>

                @if(count($produtos) > 0)
                    <div class="row">
                        @foreach($produtos as $produto)
                            <div class="col-md-3 d-flex align-items-stretch">
                                <div class="card product-card">
                                    <a href="{{ route('cliente_exibir_produto', ['produto' => $produto->produto_url])">
                                        <img src="{{$produto->produto_image_url }}" alt="{{ $produto->produto_nome }}" class="card-img-top">
                                    </a>
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
                                        <a href=""></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="col-md-4">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert alert-warning text-center">
                    Sem produtos
                </div>
            </div>
        </div>
    </div>
</div>
@endsection