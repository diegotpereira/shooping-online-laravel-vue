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

                @if(count($produtos) > 0))
                <!-- @if (is_countable($produtos) && count($produtos) > 0) -->
                    <div class="row">
                        @foreach($produtos as $produto)
                            <div class="col-md-3 d-flex align-items-stretch">
                                <div class="card product-card">
                                    <a href=""></a>
                                    <div class="card-body d-flex flex-column">
                                        <span class="card-title text-center prod-name-link">
                                            <a href="{{ route('cliente_exibir_produto', ['categoria'=>$produto->categoria->url, 'produto'=>$produto->produto_nome]) }}" class="product-card-link">{{ $produto->produto_nome }}</a>
                                        </span>
                                        <div class="text-center mb-3">
                                            <input type="hidden" name="p_num" id="p_num" value="{{ produto->number }}">
                                            @if($produto->product_has_variant < 1)
                                                <span class="cart-prod-price">&#8369;</span>
                                            @elseif (!is_null($produto->produtoComVariantes))
                                                @foreach($produto->produtoComVariantes as $variant)
                                                    @if($loop->first)
                                                        <span class="cart-prod-price">&#8369;</span>
                                                    @elseif($loop->last)
                                                        <span class="cart-prod-price">&#8369;</span>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                        <a href="{{ route('cliente_exibir_produto', ['categoria'=>$produto->categoria->url, 'produto' => $produto->produto_url])" class="btn mt-auto btn-outline-primary">Exibir</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row justify-content-center">
                                <div class="col-md-4">

                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="alert alert-warning text-center">
                        Sem produtos
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection