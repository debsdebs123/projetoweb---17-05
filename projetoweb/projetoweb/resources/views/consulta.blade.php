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


<!-- Listando todos os agendamentos -->
<div class="container w-50 px-5 py-3">
        <h4 class="table-title"> Cadastrar - Contatos Agendados </h4>
        
        <div class="table-responsive-md">
            <table class="table table-borderless">
                <tr class='bg-primary'>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Origem</th>
                    <th scope="col">Contato</th>
                    <th scope="col">Observação</th>
                    <th scope="col">Ação</th>
                </tr>

                </thead>
                <tbody>
                    @foreach($agendamentos as $tableagenda)
                    <tr>  
                        
                        <td>{{ $tableagenda->nome }}</td>
                        <td>{{ $tableagenda->telefone }}</td>
                        <td>{{ $tableagenda->origem }}</td>
                        <td>{{ $tableagenda->data_contato }}</td>
                        <td>{{ $tableagenda->observacao }}</td>
                        <td>{{ $tableagenda->acao }}</td>
                    </tr>
                    @endforeach
            </tbody>
            </table>
            <button type="button" class="btn btn-primary">Editar</button>
            <button type="button" class="btn btn-primary">Excluir</button>
            
            </div>
            </div>
        </div>
    </div>