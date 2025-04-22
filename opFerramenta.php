<?php
    require("Class/Ferramenta.php");

    $ferramenta =  $_POST["intFerramenta"];
    $descricao  =  $_POST["intDescricao"];
    $status     =  $_POST["status"];

   if(isset($ferramenta) && isset($descricao)) {

    $dados = array (
        "ferramenta" => $ferramenta,
        "descricao"  => $descricao,
        "status"     => $status,
    );

    $ferramenta = new Ferramenta();
    $op = $ferramenta->salvar($dados);

    if($op) {
        // header("Location:list_ferramenta.php");
        header("Location:list_usuario.php");
    }else {
        echo"erro";
    }
   }


?>