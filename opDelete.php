<?php
    require_once("includ/crud.php");

    $id = $_GET["id"];

    $ferramenta = $_GET["ferramenta"];

    $opFerramenta = delete("ferramenta", "id_ferramenta = $id");
    $opUsuario    = delete("usuario", "id_usuario = $id");

    // $location = 
    
    if($opUsuario ) {
        header(!empty($ferramenta) ? "Location: list_ferramenta.php" : "Location: list_usuario.php");

    }
    else {
        print "<META HTTP=REFRESH CONTENT = '0; URL=http://localhost/projetos/desafio/list_ferramenta.php'>
            <script type = 'text/javascript'> alert('Não foi possivel realizar a operação') </script>";
    }
    
?>
