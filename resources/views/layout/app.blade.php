<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-toker" content="{{csrf_token()}}">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Cadastro de Produtos</title>
</head>
    <body>
        
        <div class="container">

            @component('component_navbar', ["current" => "$current"])
                
            @endcomponent

            <main role="main">

                @hasSection ('body')
                    @yield('body')
                @endif

            </main>
        </div> 

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>