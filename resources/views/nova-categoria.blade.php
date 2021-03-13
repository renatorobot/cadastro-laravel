@extends('layout.app', ["current" => "categorias"])

@section('body')
    
    <div class="card border mt-5">
        <div class="card-body">
            <form action="/categorias" method="POST">
                @csrf
                <div class="form-group">
                    <label for="categoria">Nome da Categoria</label>
                    <input type="text" class="form-control" name="nome_categoria" id="categoria" placeholder="Categoria">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/categorias" class="btn btn-danger">Cancelar</a>
            </form>
        </div>
    </div>

@endsection