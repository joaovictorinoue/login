<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col">
                <h1>Login</h1>
            </div>
        </div>
        <div class="row">
            <form action="validar.php" method="post">
                <div class="col-6">
                    <input name="usuario" id="usuario" class="form-control" placeholder="Usuário"><br>
                </div>
                <div class="col-6">
                    <input type="password" name="senha" class="form-control" placeholder="Senha">
                </div>
                <div class="col-12 mt-5">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </form>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>