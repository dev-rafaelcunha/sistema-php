<?php

require_once('lib/Database/Sql.php');

$getListClients = Sql::selectQuery('SELECT * FROM cliente');

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
    <title>Cliente</title>
</head>

<body>

    <!-- Container -->
    <div class="container-fluid">

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
                                <li class="breadcrumb-item active"><strong>Clientes</strong></li>
                            </ol>
                        </div>

                        <div class="card-body">
                            <blockquote class="blockquote mb-0">

                                <div class="row">
                                    <div class="col">
                                        <a href="createClient.php" type="button" class="btn btn-sm btn-primary">Novo</a>
                                    </div>
                                    <div class="col d-flex justify-content-end align-items-center">
                                        <a href="home.php" type="button" class="btn btn-sm btn-dark">Voltar</a>
                                    </div>
                                </div>

                                <table class="table table-responsive table-hover table-info mt-2">
                                    <thead>
                                        <tr class="row p-0 m-0">
                                            <th scope="col" class="col fs-6 lead" style="background-color: #a9dae5;">
                                                <strong>CPF</strong>
                                            </th>
                                            <th scope="col" class="col fs-6 lead" style="background-color: #a9dae5;">
                                                <strong>Nome Fantasia</strong>
                                            </th>
                                            <th scope="col" class="col fs-6 lead" style="background-color: #a9dae5;">
                                                <strong>Telefone</strong>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($getListClients as $key => $value) : ?>

                                        <tr class="row p-0 m-0">
                                            <td class="col-sm"><a href="editClient.php?client=<?= $value['id'] ?>"
                                                    class="text-decoration-none text-dark fs-6 lead"><?= $value['cc'] ?>
                                                </a></td>
                                            <td class="col-sm"><a href="editClient.php?client=<?= $value['id'] ?>"
                                                    class="text-decoration-none text-dark fs-6 lead"><?= $value['fantasia'] ?>
                                                </a></td>
                                            <td class="col-sm"><a href="editClient.php?client=<?= $value['id'] ?>"
                                                    class="text-decoration-none text-dark fs-6 lead"><?= $value['telefone'] ?>
                                                </a></td>
                                        </tr>

                                        <?php endforeach; ?>

                                    </tbody>
                                </table>

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