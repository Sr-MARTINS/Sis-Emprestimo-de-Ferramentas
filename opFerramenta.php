<?php
    require_once("includ/crud.php");

    $ferramenta =  $_POST["intFerramenta"];
    $descricao  =  $_POST["intDescricao"];
    $status     =  $_POST["status"];

   if(isset($ferramenta) && isset($descricao)) {

    $dados = array (
        "ferramenta" => $ferramenta,
        "descricao"  => $descricao,
        "status"     => $status,
    );

    $op = addItem("ferramenta", $dados);

    if($op) {
        header("Location:list_ferramenta.php");
    }else {
        echo"erro";
    }
   }


?>