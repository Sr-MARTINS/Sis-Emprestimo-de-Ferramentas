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
        <div class="col-mb-3" style="width:350px; border:1px solid #80808080; margin: 3rem auto">
            <div style="width:60%;  margin: -1rem auto .2rem auto">
                <img src="img/logo.png" alt="logo" style="width:100%">
            </div>

            <div style="margin: 1rem auto; text-align:center">
                <h3>Seja bem vindo.</h3>
            </div>

            <div>
            <form style="padding:20px">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email </label>
                    <input type="email" class="form-control" style="width:300px;">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" style="width:300px;">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

                <a href="list_usuario.php">Usuario</a>
                <a href="list_ferramenta.php">Ferramenta</a>
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>