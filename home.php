<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
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
                                <li class="breadcrumb-item active"><strong>Home</strong></li>
                            </ol>
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