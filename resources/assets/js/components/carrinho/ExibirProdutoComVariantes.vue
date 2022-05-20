<template>
    <div class="row product-frame mb-4">
        <div class="col-sm-6 col-lg-6">
            <div class="">
                <img :src="produto.produtoImage_url" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col-sm-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ produto.produto_nome }}</h3>
                    <div>
                        <h4>{{ formatMoney(produto.produto_sem_variante.preco) }}</h4>
                        <span class="badge badge-success">Quantidade</span>
                        <span class="badge badge-warning" style="font-size: 16px;">VENDIDO</span>
                        <h6 class="mb-1 mt-4 font-weight-bold">Descrição: </h6>
                        <p class="text-justify">{{ produto.produto_descricao }}</p>
                    </div>
                    
                    <form action="">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">Selecionar Variante:</label>
                                    <select name="" id="" class="form-control">
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                    <div>
                                        <span class="error-feedback"></span>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <label for="" class="font-weight-bold">Quantidade</label>
                                    <input type="text" name="" id=""  class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="mt-0">
                            <span class="error-feedback">Por favor digite a quantidade</span>
                            <template>
                                <span class="error-feedback">Por favor digite uma quantidade valida</span>
                                <template>
                                    <span class="error-feedback">Por favor digite uma quantidade não superior aos estoques disponíveis</span>
                                </template>
                            </template>
                        </div>
                        <button type="submit" class="btn btn-outline-primary btn-block mt-4"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>