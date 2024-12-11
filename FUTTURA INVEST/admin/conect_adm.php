<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '030207';
    $dbName = 'formulario-admin';
    
    $conex = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

     #if($conex->connect_errno)
     #{
      #   echo "Erro";
     #}
     #else
     #{
      #  echo "Conexão efetuada com sucesso";
     #}

?>