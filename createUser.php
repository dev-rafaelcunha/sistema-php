<?php

require_once('lib/Database/Sql.php');

if ($_GET) {

    $success = filter_input(INPUT_GET, 'success');

    if ($success = 200) {

        $success200 = 'Registro efetuado!';
    }
}

if ($_POST) {

    Sql::allQuery('INSERT INTO usuario VALUES (DEFAULT, :NOME, :EMAIL, :TELEFONE, :SENHA)', [

        ':NOME' => $_POST['nome'],
        ':EMAIL' => $_POST['email'],
        ':TELEFONE' => $_POST['telefone'],
        ':SENHA' => 'php@2023'
    ]);

    header('Location: createUser.php?success=200');
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
    <title>Novo usuário</title>
</head>

<body>

    <!-- Container -->
    <div class="container-fluid">

        <!-- Row No Gutter -->
        <div class="row no-gutter">

            <!-- header -->
            <?php require_once('include/header.php'); ?>
            <!-- header -->

            <!-- Row -->
            <div class="row m-0 p-0">

                <!-- Sidebar -->
                <?php require_once('include/sidebar.php'); ?>
                <!-- Sidebar -->

                <!-- Main -->
                <main class="col px-0">
                    <div class="card" style="height: 100vh;">

                        <div class="card-header">
                            <ol class="breadcrumb my-2">
                                <li class="breadcrumb-item label"><strong><a class="text-decoration-none link-primary"
                                            href="home.php">Home</a></strong>
                                </li>
                                <li class="breadcrumb-item label"><strong><a class="text-decoration-none link-primary"
                                            href="user.php">Usuários</a></strong>
                                </li>
                                <li class="breadcrumb-item active"><strong>Novo usuário</strong></li>
                            </ol>
                        </div>

                        <div class="card-body">
                            <blockquote class="blockquote mb-0">

                                <!-- Form -->
                                <form method="post">

                                    <div class="row">
                                        <div class="col">
                                            <input type="submit" class="btn btn-sm btn-success" value="Salvar">
                                        </div>
                                        <div class="col d-flex justify-content-end align-items-center">
                                            <a href="user.php" type="button" class="btn btn-sm btn-dark">Voltar</a>
                                        </div>
                                    </div>

                                    <div class="row mt-2 px-0 m-0 lead fs-6 border" style="background-color: #cff4fc;">
                                        <div class="col-md-6">
                                            <label class="form-label mt-1"><strong>Nome
                                                    Completo</strong></label>
                                            <input type="text" class="form-control shadow-none text-secondary"
                                                name="nome" autocomplete="off" required style="margin-top: -8px;">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label mt-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control shadow-none text-secondary"
                                                name="email" autocomplete="off" required style="margin-top: -8px;">
                                        </div>
                                        <div class="col-md-4 mb-2 mt-2">
                                            <label class="form-label"><strong>Telefone</strong></label>
                                            <input type="number" class="form-control shadow-none text-secondary"
                                                name="telefone" autocomplete="off" required style="margin-top: -8px;">
                                        </div>
                                    </div>

                                </form>
                                <!-- Form -->

                                <?php if (isset($success200)) : ?>

                                <div class="col-4 alert alert-success alert-dismissible fade show fs-6 mt-1 py-1"
                                    role="alert" style="width: 240px;">
                                    <strong><?= $success200 ?></strong>
                                    <button type="button" class="btn-close shadow-none py-2" data-bs-dismiss="alert"
                                        aria-label="Close" style="font-size: 10px; top: auto;"></button>
                                </div>

                                <?php endif; ?>

                            </blockquote>
                        </div>

                    </div>
                </main>
                <!-- Main -->

                <!-- Profile -->
                <?php require_once('include/profile.php'); ?>
                <!-- Profile -->

            </div>
            <!-- Row -->

            <!-- Footer -->
            <?php require_once('include/footer.php'); ?>
            <!-- Footer -->

        </div>
        <!-- Row No Gutter -->

    </div>
    <!-- Container -->

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a57e572c96.js" crossorigin="anonymous"></script>
</body>

</html>