@extends('layout.app')

@section('body')
    
    <div class="jumbotron bg-light border border-secondary mt-5">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de produtos</h5>
                        <p class="card-text">
                            Aqui você cadastra todos os produtos.
                            Só não esqueça de cadastrar previamente as categorias.
                        </p>
                        <a href="/produtos" class="btn btn-primary">Cadastre seus produtos</a>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de departamentos</h5>
                        <p class="card-text">
                           Cadastre as categorias dos seus produtos.
                        </p>
                        <a href="/categorias" class="btn btn-primary">Cadastre suas categorias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection