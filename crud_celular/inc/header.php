<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Celulares</title>
        <meta name="description" content="Material da aula de PW">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="<?php echo BASEURL; ?>img/icon.jpg" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/styles.css">
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/awesome/all.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-divider mb-4 bg-blue-custom shadow-sm">
            <div class="container-fluid p-3">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-auto">
                        <ul class="navbar-nav">
                            <li class="nav-item me-4 mb-0">
                                <a class="nav-link active d-flex align-items-center text-white" href="<?php echo BASEURL; ?>">
                                    <i class="fa-solid fa-house-chimney"></i><h4 class="me-1 mb-0">Home</h4>
                                </a>
                            </li>
                            <li class="nav-item dropdown me-5 mb-0">
                                <a class="nav-link dropdown-toggle active d-flex align-items-center text-white" href="#" id="celularesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-mobile-screen"></i><h4 class="me-1 mb-0">Celulares</h4>
                                </a>
                                <ul class="dropdown-menu bg-blue-custom border-0 shadow">
                                    <li>
                                        <a class="dropdown-item text-white" href="<?php echo BASEURL; ?>celulares/index.php">
                                            <i class="fa-solid fa-mobile-screen"></i> Consultar Celulares
                                        </a>
                                    </li>
                                    <?php if (isset($_SESSION['user']) && $_SESSION['user'] == "admin") : ?>
                                        <li>
                                            <a class="dropdown-item text-white" href="<?php echo BASEURL; ?>celulares/add.php">
                                                <i class="fa-solid fa-plus"></i> Cadastrar Celular
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </li>
                            <li class="nav-item dropdown me-5 mb-0">
                                <a class="nav-link dropdown-toggle active d-flex align-items-center text-white" href="#" id="clientesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-users"></i><h4 class="me-1 mb-0">Clientes</h4>
                                </a>
                                <ul class="dropdown-menu bg-blue-custom border-0 shadow">
                                    <li>
                                        <a class="dropdown-item text-white" href="<?php echo BASEURL; ?>customers/index.php">
                                            <i class="fa-solid fa-users"></i> Conhecer os Clientes
                                        </a>
                                    </li>
                                    <?php if (isset($_SESSION['user']) && $_SESSION['user'] == "admin") : ?>
                                        <li>
                                            <a class="dropdown-item text-white" href="<?php echo BASEURL; ?>customers/add.php">
                                                <i class="fa-solid fa-user-plus"></i> Cadastrar Cliente
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </li>
                            <?php if (isset($_SESSION['user'])) : ?>
                                <?php if ($_SESSION['user'] == "admin") : ?>
                                    <li class="nav-item dropdown me-5 mb-0">
                                        <a class="nav-link dropdown-toggle active d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid navicons fa-user-lock"></i><h4 class="me-1 mb-0">Usuários</h4>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="<?php echo BASEURL; ?>usuarios"><i class="fa-solid navicons fa-user-lock"></i> Gerenciar Usuários</a></li>
                                            <li><a class="dropdown-item" href="<?php echo BASEURL; ?>usuarios/add.php"><i class="fa-solid navicons fa-user-tie"></i> Novo Usuário</a></li>
                                        </ul>
                                    </li>
                                <?php endif; ?>	
                                <li class="nav-item dropdown me-5 mb-0">
                                    <a class="nav-link dropdown-toggle active d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid navicons fa-person-walking-arrow-right"></i>
                                        <h4 class="me-1 mb-0">Bem-vindo </h4>
                                        <h4 class="mb-0"><?php echo $_SESSION['user'] ?>!</h4>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo BASEURL; ?>inc/logout.php">
                                            <i class="fa-solid navicons fa-person-walking-arrow-right"></i> Desconectar
                                        </a>
                                    </ul>
                                </li>
                            <?php else : ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link active d-flex align-items-center" href="<?php echo BASEURL; ?>inc/login.php">
                                        <i class="fa-solid navicons fa-users"></i> <h4 class="mb-0">Login</h4>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="container mt-5 pt-4">
            <!-- Conteúdo principal -->
        </main>

        <script src="path/to/bootstrap.bundle.min.js"></script>
    </body>
</html>
