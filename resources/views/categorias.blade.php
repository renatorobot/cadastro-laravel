@extends('layout.app', ["current" => "categorias"])

@section('body')
   
    <div class="card border mt-5">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Categorias</h5>
        @if(count($cats) > 0)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>
                            Código
                        </th>
                        <th>
                            Nome da Categoria
                        </th>
                        <th>
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cats as $cats)
                        <tr>
                            <td>
                                {{$cats->id}}
                            </td>
                            <td>
                                {{$cats->nome}}
                            </td>
                            <td>
                                <a href="/categorias/editar/{{$cats->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/categorias/apagar/{{$cats->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif  
        </div>
        <div class="card-footer">
            <a href="/categorias/novo" class="btn btn-primary" role="button">Novo departamento</a>
        </div>
    </div>

@endsection