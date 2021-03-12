

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
          
        <li @if($current=="home") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link" href="/">Home</a>
        </li>

        <li @if($current=="produtos") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link" href="/produtos">Produtos</a>
        </li>
        
        <li @if($current=="categorias") class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="/categorias">Categorias</a>
          </li>

      </ul>
      
    </div>
  </nav>

  <?php 
