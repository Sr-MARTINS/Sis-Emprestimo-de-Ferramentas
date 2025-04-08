<?php
    require("includ/crud.php");

    $nome   = $_POST["intNome"];
    $email  = $_POST["intEmail"];
    $senha  = $_POST["intPassword"];

    if($nome && $email) {
        
        $dados = array (
            "usuario"  => $nome,
            "email"    => $email,
            "senha"    => $senha,
            // "status"   => $status,
        );

        $op = addItem("usuario", $dados);

        if($op) {
            header("Location:list_usuario.php");
        }else {
            echo"erro";
        }
    }
?>