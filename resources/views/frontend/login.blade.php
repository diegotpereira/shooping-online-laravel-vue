@extends('frontend.frontend_template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('frontend_homepage') }}">Principal</a>
                    </li>
                    <li class="breacrumb-item active">Entrar</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="alert alert-success">
                <p class="m-0"></p>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="alert alert-danger">
                <p class="m-0"></p>
            </div>
        </div>
    </div>

</div>
@endsection 