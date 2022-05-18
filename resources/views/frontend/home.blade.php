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
                    @if (is_countable($produtos) && count($produtos) > 0)
                        <div class="row">
                            @foreach($produtos as $produto)
                                <div class="col-md-3 d-flex align-items-stretch">
                                    <div class="card product-card">
                                        <a href="{{ route('cliente_exibir_produto', ['categoria'=>$produto->categoria->url, 'produto'=>$produto->produto_url]) }}">
                                            <img class="card-img-top" src="{{$produto->produto_image_url }}" alt="{{ $produto->produto_nome }}">
                                        </a>
                                        <div class="card-body d-flex flex-column">
                                            
                        
                                            <span class="card-title text-center prod-name-link">
                                                <a href="{{ route('cliente_exibir_produto', ['categoria'=>$produto->categoria->url, 'produto'=>$produto->produto_nome]) }}" class="product-card-link">{{ $produto->produto_nome }}</a>
                                            </span>


                                            <div class="text-center mb-3">
                                                
                                                <input type="hidden" name="p_num" id="p_num" value="{{$produto->number}}">
                                                @if($produto->produto_has_variant < 1)
                                                    <span class="cart-prod-price">&#8369; R$ </span>
                                                @elseif (!is_null($produto->produtoComVariantes))
                                                    @foreach ($produto->produtoComVariantes as $variante)
                                                        @if($loop->first)
                                                            <span class="cart-prod-price">&#8369;{{ number_format($variante->variante_preco,2) }}</span>
                                                        @elseif($loop->lat)
                                                            <span class="cart-prod-price">&#8369;{{ number_format($variante->variante_preco,2) }}</span>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </div>
                                            <a href="{{ route('cliente_exibir_produto', ['categoria'=>$produto->categoria->url, 'produto'=>$produto->produto_url]) }}" class="btn btn-outline-primary mt-auto">Exibir</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <center>
                            <a href="">Veja mais</a>
                        </center>
                    @else
                        <div class="alert alert-warning text-center">
                            Sem produtos
                        </div>
                    @endif
            </div>
        </div>
    </div>
</div>{{-- carousel --}}
@endsection