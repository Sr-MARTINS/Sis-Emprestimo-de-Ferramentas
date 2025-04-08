<?php
    require_once("includ/crud.php");

    $id = $_GET["id"];  

    $dados = consultarTabela("usuario", "id_usuario = $id");
        var_dump($dados);
        
    $nome  = $dados[0]["usuario"];
    $email = $dados[0]["email"];
    $senha = $dados[0]["senha"];

    var_dump($nome);
   
    if(isset($_POST["btEditar"])) {
     
        $dadosEdit = array (
            "usuario" => $_POST["intNome"],
            "email"   => $_POST["intEmail"],
            "senha"   => $_POST["senha"],
        );

        var_dump($dadosEdit);

        $opEdit = editItem("usuario", $dadosEdit, "id_usuario = $id");

        if($opEdit) {
            header("Location: list_usuario.php");
        }else {
            echo "erro";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <h3 style="text-align:center">Editar Usuarios</h3>

        <div style="margin: 2rem auto;" >
            <div style="margin: 2rem 0 2rem 2rem; ">
                <a href="list_usuario.php" class="btn btn-outline-secondary" >Voltar</a>
            </div>
            
            <div class="col-md-10" style="margin:auto">
            <form method="POST">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" name="intNome" class="form-control" value="<?= $nome ?>" >
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="intEmail" class="form-control" value="<?= $email ?>">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="intPassword" class="form-control" >
                </div>
    
                <button type="submit" name="btEditar" class="btn btn-primary">Editar</button>
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>