<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../public/css/meuCss.css">

</head>
<body>
    <div id="app"> {{-- ID app --}}
        <div class=""> {{-- navbar --}}
            <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark bg-dark">
                <!-- Brand -->
                <a href="" class="navbar-brand">
                    <img src="" alt="" class="img-responsive">
                </a>
                <button class="navbar-toggler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <!-- links -->
                    <ul class="navbar-nav">
                        <li class="nav-item mr-2">
                            <a href="" class="nav-link text-light cool-link">Principal</a>
                        </li>
                        <li class="nav-item mr-2">
                            <a href="{{ url('/produtos')}}" class="nav-link text-light cool-link">Produtos</a>
                        </li>
                        <li class="nav-item mr-2">
                            <a href="" class="nav-link text-light cool-link">Sobre nós</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <form action="post">
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control" placeholder="Pesquisar produto" required aria-label="" aria-describedby="basic-addon2" id="nav-search">
                                <div class="input-group-append mr-2">
                                    <button class="btn btn-dark" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <li class="nav-item">
                            <a href="" class="nav-link text-light cool-link">
                                <i class="fa fa-shopping-cart">Carrinho</i>
                            </a>
                            <a href="" class="nav-link text-light cool-link">
                                <i class="fa fa-shopping-cart">Carrinho</i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-light cool-link">
                                <i class="fa fa-sign-in">Entrar</i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-light cool-link">
                                <i class="fa fa-sign-in">Cadastrar</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>{{-- navbar --}}
        <div class="mainContainer" style="background-color: #fff;">
            <div class="container">

            </div>
        </div>
        @section('footer')
        <div id="footer-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 footer-col">
                                <h1>Informação</h1>
                                <ul>
                                    <li><a href="/produtos">Produtos</a></li>
                                    <li><a href="">Sobre nós</a></li>
                                    <li><a href="">Termos e Condições</a></li>
                                    <li><a href="">Politicas de Uso</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4 footer-col">
                                <h5>Contate-nos</h5>
                                <ul>
                                    <li></li>
                                    <li><address></address></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>{{-- footer-wrapper --}}
    </div> {{-- ID app --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>