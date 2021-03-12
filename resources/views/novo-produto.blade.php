@extends('layout.app', ["current" => "produtos"])

@section('body')
    
<div class="card border mt-5 mb-5">
    <div class="card-body">
        <h5 class="card-title">Cadastro de produtos</h5>
        <form action="/produtos" method="POST">
          @csrf
            <div class="form-group">
              <label for="nome">Nome do Produto</label>
              <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="form-group">
              <label for="estoque">Estoque</label>
              <input type="number" class="form-control" id="estoque" name="estoque">
            </div>
            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" class="form-control" id="preco" name="preco">
            </div>
            <div class="form-group">
                <label for="categoria">Departamento</label>
                <select class="form-control" id="categoria" name="categoria_id">
                  @foreach ($categorias as $categorias)
                    <option value="{{$categorias->id}}">{{$categorias->nome}}</option>
                  @endforeach
                </select>
              </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
    </div>   
</div>
@endsection