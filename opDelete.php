<?php

    require_once("./Class/Ferramenta.php");

    $ferramenta = new Ferramenta();
    $deleteFerramenta = $ferramenta->excluir($_GET["id"]);


    if($deleteFerramenta) {
        header("Location:list_usuario.php");
    }else {
        echo "erro";
    }

?>
