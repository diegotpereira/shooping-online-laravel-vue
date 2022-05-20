@extends('frontend.frontend_template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('frontend_homepage') }}">Principal</a></li>
                    <li class="breadcrumb-item"><a href="/produtos">Produtos</a></li>
                    <li class="breadcrumb-item"><a href="/produtos?ct={{$prod->categoria->url}}">{{ $prod->categoria->nome }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $prod->produto_nome }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="page-wrapper">
        @if ($prod->product_has_variant < 1)
            <exibir-produto-sem-variante
            :produto="{{$prod}}">
            </exibir-produto-sem-variante>
        @else
            <exibir-produto-com-variantes
            :produto="{{$prod}}"
            :variante="{{$variante}}"
            :produto_variantes="{{$produto_variantes}}">

            </exibir-produto-com-variantes>
        @endif
    </div>
</div>
@endsection 