<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION["id"])){
    // print "<META HTTP=REFRESH CONTENT = '0; URL=http://localhost/projetos/desafio/index.php'>
        // <script type = 'text/javascript'> alert('Não foi possivel realizar a operação') </script>" ;
            header("Location:index.php");
}