<?php
    include_once("includ/crud.php");

   if(isset($_POST["btLogar"])) {
        if($_POST["intEmail"] == "") {
            echo "Preencha o campo email";
        }
        else if($_POST["intSenha"] == "") {
            echo "Preencha o campo senha";
        }
        else{

            $email = $_POST["intEmail"];
            $senha = $_POST["intSenha"];

            $senha = hash("sha256", $senha);

            // $email = mysqli_real_escape_string($conexao, $_POST["intEmail"]);
            // $senha = mysqli_real_escape_string($conexao, $_POST["intSenha"]);


            $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

            $resultado = executar($sql) or die(mysqli_error());
        
            if (mysqli_num_rows($resultado) == 1) {
                $usuario = mysqli_fetch_assoc($resultado);
        
                if (!isset($_SESSION)) {
                    session_start();
                }
        
                $_SESSION["id"] = $usuario["id_usuario"];
                $_SESSION["name"] = $usuario["usuario"];
        
                header("Location:list_usuario.php");

            } else {
                echo "Usuario invalidos.";
            }
        
        }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <div class="col-mb-3" style="width:350px; margin: 1.7rem auto">
            <div style="width:50%;  margin: -1rem auto .2rem auto">
                <img src="img/logo.png" alt="logo" style="width:100%">
            </div>

            <div style="margin: .5rem auto; text-align:center">
                <h3>Seja bem vindo.</h3>
            </div>

            <div>
            <form method="POST" style="padding:20px">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email </label>
                    <input type="email" name="intEmail" class="form-control" style="width:300px;">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="intSenha" class="form-control" style="width:300px;">
                </div>

                <button type="submit" name="btLogar" class="btn btn-primary" style="width:300px">Entrar</button>

            </form>

            <div style="text-align:center">
                <a href="frmUsuario.php">Cadastrar Usuario</a>
            </div>
            </div>
        </div>
    </div>
    
</body>
</html>