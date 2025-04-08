<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <h3 style="text-align:center">Cadastro de Usuarios</h3>

        <div style="margin: 2rem auto;" >
            <div style="margin: 2rem 0 2rem 2rem; ">
                <a href="list_ferramenta.php" class="btn btn-outline-secondary" >Voltar</a>
            </div>
            
            <div class="col-md-10" style="margin:auto">
            <form action="opFerramenta.php" method="POST">
                <div class="mb-3">
                    <label for="ferramenta" class="form-label">Ferramenta:</label>
                    <input type="text" name="intFerramenta" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição:</label>
                    <input type="text" name="intDescricao" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status:</label>
               
                    <select name="status" class="form-control" style="width:300px">
                        <option value=""></option>
                        <option value="disponivel">Disponivel</option>
                        <option value="emprestada">Emprestada</option>
                    </select>
                </div>

                <!-- <input type="text" name="id" value=""> -->
    
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>