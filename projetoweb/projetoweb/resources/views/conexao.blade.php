<!DOCTYPE html>
<html>
    <head>
        <title>Conexao</title>
        <style>
            div {
                font-size: 22px;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
            try { 
              if(DB::connection( )->getPdo())
              {
                 echo "Conexao com o Banco Estabelecida!! => "
                    .DB::connection()->getDatabaseName();
              }
           }
           catch(Exception $e){
               echo "Erro ao conectar!!!";
           }
            ?>
        </div>
    </body>
</html>