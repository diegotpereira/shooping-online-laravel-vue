<template>
    <div class="row product-frame mb-4">
        <div class="col-sm-6 col-lg-6">
            <div class="">
                <img :src="produto.produtoImage_url" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col-sm-6 col-lg-6">
            <form action="">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ produto.produto_nome }}</h3>
                        <div>
                            <h4>{{ formatMoney(produto.produto_sem_variante.preco) }}</h4>
                            <span class="badge badge-success">Quantidade</span>
                            <h6 class="mb-1 mt-4 font-weight-bold">Descrição: </h6>
                            <p class="text-justify">{{ produto.produto_descricao }}</p>
                        </div>
                        <template>
                            <div class="row mt-5">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group mb-0">
                                        <label for="" class="font-weight-bold">Quantidade:</label>
                                        <input type="text" name="" id="" class="form-control w-50" v-model="$v.quantidade.$model" :class="{'is-invalid' : $v.quantidade.$error}">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-0">
                                <span class="error-feedback">Por favor digite a quantidade</span>
                                <template>
                                    <span class="error-feedback">Por favor digite uma quantidade valida</span>
                                    <template>
                                        <span class="error feedback">Insira uma quantidade não superior aos estoques disponíveis</span>
                                    </template>
                                </template>
                            </div>
                            <button type="submit" class="btn btn-outline-primary btn-block mt-4"></button>
                        </template>
                        <div class="alert alert-warning text-center font-weight-bold">
                            VENDIDO
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>