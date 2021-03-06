@extends('layout.app', ["current" => "produtos"])

@section('body')
    
<div class="card border mt-5 mb-5">
    <div class="card-body">
        <h5 class="card-title">Editar produto</h5>
        <form action="/produtos/{{$produto->id}}" method="POST">
          @csrf
            <div class="form-group">
              <label for="nome">Nome do Produto</label>
              <input type="text" class="form-control" id="nome" name="nome" value="{{$produto->nome}}">
            </div>
            <div class="form-group">
              <label for="estoque">Estoque</label>
              <input type="number" class="form-control" id="estoque" name="estoque" value="{{$produto->estoque}}">
            </div>
            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" class="form-control" id="preco" name="preco" value="{{$produto->preco}}">
            </div>
            <div class="form-group">
                <label for="categoria">Departamento</label>
                <select class="form-control" id="categoria" name="categoria_id">
                  <option value="{{$categoria_produto->id}}">{{$categoria_produto->nome}}</option>
                  @foreach ($categorias as $categorias)
                      <option value="{{$categorias->id}}">{{$categorias->nome}}</option>
                  @endforeach
                </select>
              </div>
            <button type="submit" class="btn btn-primary">Editar Produto</button>
          </form>
    </div>   
</div>

@endsection