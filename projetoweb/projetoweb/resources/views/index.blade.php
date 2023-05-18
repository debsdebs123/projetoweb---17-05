<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap w/ Vite</title>
      <!-- Styles -->
      @vite([
            'resources/css/app.css',
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </head>
         
    <body>

    <div class="container text-center">
  <div class="row">
    <div class="col">
    <!-- Cabecalho -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="nav-link active" href="#">SISTEMA WEB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Consultar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </div>  
  </div>
</div>
    <div class="container">
      <div class="row">
        <div class="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">

       
        <h5><b> Cadastrar - Agendamento de potenciais clientes</h4></b>
        <p> Sistema utilizado para agendamento de serviços. </p>

    </font></font>
    
    <!--Formulario -->
  <form class="row g-3" method="POST" id="form" action="{{route('agendamentos.store')}}" nome="form">
      
      <div class="form-row">  
  <div class="mb-3">
  <label for="cadnome" class="form-label">Nome:</label>
  <input type="cadnome" class="form-control" id="nomecad" required>

  <label for="cadtel"  class="form-label">Telefone: </label>
  <input type="cadtel" class="form-control" placeholder= "(xx) xxxxx-xxxx" id="telcad" required >

  <label for="origem"  class="form-label" >Origem: </label>
  <br>
  <select class="form-control" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
  <option selected>Celular</option>
  <option value="1">Outro</option>
</select>
<br>

  <label for="datacont"  class="form-label" >Data do Contato: </label>
  <input type="date" class="form-control" id="datacont" required>

</div>
<div class="mb-3">
  <label for="Observação" class="form-label">Observação</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
</div>

 <label for="acao">Ação</label>
 <input type="text" name="acao" class="form-control" id="acao" required>
  <br>

<button type="button" class="btn btn-primary">Cadastrar</button>



</div>
    </div>
        </div>
      </form>
</body>
</html>