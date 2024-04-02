<?php

require_once('lib/Database/Sql.php');

$getListUsers = Sql::selectQuery('SELECT * FROM usuario');

if ($_GET) {

    $erro = filter_input(INPUT_GET, 'erro');

    if ($erro = 100) {

        $erro100 = 'Email ou Senha Incorreto!';
    }
}

if ($_POST) {

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'password');

    if ($email && $senha) {

        foreach ($getListUsers as $key => $value) {
            
            if ($email === $value['email'] && $senha === $value['senha']) {

                header('Location: home.php');
            } else {
                header('Location: index.php?erro=100');
            }
        }
    }
}

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body>

    <div class="container-fluid px-0 d-flex align-items-center" style="width: 300px; height: 100vh;">

        <div class="row bg-light">
            <div class="col-12 px-0">
                <h5 class="py-1 text-center text-light" style="background-color: #000;">Login em PHP e Bootstrap</h4>
                <p class="my-4 text-secondary text-center"><strong>Insira suas informações de acesso!</strong></p>
            </div>
            <div class="col-12">
                <form method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control shadow-none" id="exampleFormControlInput1"
                            autocomplete="off" value="rafael@cunha.local" style="margin-top: -8px;">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Senha</label>
                        <input type="password" name="password" class="form-control shadow-none"
                            id="exampleFormControlInput1" autocomplete="off" value="123@123" style="margin-top: -8px;">
                    </div>
                    <input type="submit" class="btn btn-sm btn-primary mb-2" value="Entrar">
                </form>

                <?php if (isset($erro100)) : ?>

                <div class="alert alert-danger mt-1 mb-2 py-1" role="alert">
                    <span><strong><?= $erro100 ?></strong></span>
                </div>

                <?php endif; ?>
            </div>
        </div>

    </div>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>