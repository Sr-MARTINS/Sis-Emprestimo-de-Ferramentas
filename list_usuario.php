<?php
    require("includ/crud.php");
    include("protect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    <div class="container-fuid">
        <div>
            <div>
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <a href="logout.php" class="navbar-brand" style="font-size:2.1rem; margin-left:32px"> <i class="bi bi-box-arrow-in-left"></i> </a>
                        <form class="d-flex" role="search">
                            <input type="search" name="busca" class="form-control me-2"  placeholder="Buscar Usuário" >

                            <button class="btn btn-outline-success" type="submit"> <i class="bi bi-search"></i> </button>
                        </form>
                    </div>
                </nav>
            </div>
            
        </div>

        <div class="col-md-10" style="margin:auto; text-align:center">
            <h1>Bem vindo <?php echo $_SESSION["name"] ?> </h1>  
        </div>

        <div class="col-md-10" style="margin:2rem auto; text-align:center">
            <h3>Lista de Usuário</h3>  
        </div>

        <div class="col-md-10" style="margin:2rem 0 2rem 7rem; display:flex; justify-content:space-between; align-inten:center">
            <div>
                <a href="index.php" class="btn btn-outline-secondary" >Voltar</a>
                <a href="frmUsuario.php" class="btn btn-success">Criar Usuário</a>
            </div>

            <!-- <form class="d-flex" role="search">
                <input type="search" name="busca" class="form-control me-2"  placeholder="Buscar Usuário" >
                <button class="btn btn-outline-success" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form> -->
        </div>

        <div class="col-md-10" style="margin:2rem auto; border:1px solid #80808047; padding:20px 10px 20px 50px">
            <table class="table col-md-8">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col" style="padding-left:20px">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $usuarios = consultarTabela("usuario");
                        foreach($usuarios as $user) {

                    ?>
                    <tr>
                        <td><?= $user["id_usuario"] ?></td>
                        <td><?= $user["usuario"] ?></td>
                        <td><?= $user["email"] ?></td>
                        
                        <td>
                            <a href="editarUser.php?id=<?= $user['id_usuario'] ?>" class="btn btn-secondary" value="<?= $user["id_usuario"] ?>" >
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="opDelete.php?user=1&id=<?= $user['id_usuario'] ?>" class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                            </a>
                         </td>
                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
    
</body>
</html>