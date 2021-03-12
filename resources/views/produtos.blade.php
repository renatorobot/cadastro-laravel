@extends('layout.app', ["current" => "produtos"])

@section('body')
    
<div class="card border mt-5 mb-5">
    <div class="card-body">
        <h5 class="card-title">Cadastro de produtos</h5>
        @if(count($produtos) > 0)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>
                            Código
                        </th>
                        <th>
                            Nome do Produto
                        </th>
                        <th>
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $produtos)
                        <tr>
                            <td>
                                {{$produtos->id}}
                            </td>
                            <td>
                                {{$produtos->nome}}
                            </td>
                            <td>
                                <a href="/produtos/editar/{{$produtos->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/produtos/apagar/{{$produtos->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif  
        </div>
        <div class="card-footer">
            <a href="/produtos/novo" class="btn btn-primary">Novo Produto</a>
    </div>   
</div>
@endsection