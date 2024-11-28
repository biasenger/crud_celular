<?php
require "config.php";
require DBAPI;
if (!isset($_SESSION)) session_start();
include(HEADER_TEMPLATE);

$db = open_database();

// Recupera todos os celulares
$sql = "SELECT * FROM celulares";
$result = mysqli_query($db, $sql);
$celulares = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<section class="py-5 bg-light">
    <div class="container" style="rgb(151, 191, 231);">
        <h2 class="text-center mb-5">Celulares Populares</h2>
        <div class="row g-4">
            <?php foreach ($celulares as $celular): ?>
            <div class="col-md-4 d-flex">
                <div class="card shadow-sm border-0 rounded-3">
                    <img src="../crud_celular/celulares/fotos/<?php echo $celular['foto']; ?>" class="card-img-top" alt="<?php echo $celular['modelo']; ?>" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <a href="../crud_celular/celulares/view.php?id=<?php echo $celular['id']; ?>">
                            <h5 class="card-title fw-bold"><?php echo $celular['modelo']; ?></h5>
                            <ul class="list-unstyled">
                                <li><strong>Modelo:</strong> <?php echo $celular['modelo']; ?></li>
                                <li><strong>Marca:</strong> <?php echo $celular['marca']; ?></li>
                                <li><strong>Preço:</strong> R$<?php echo number_format($celular['preco'], 2, ',', '.'); ?></li>
                                <li><strong>Data de Cadastro:</strong> <?php echo date('d/m/Y', strtotime($celular['datacadastro'])); ?></li>
                                <li><strong>Lançamento:</strong> <?php echo date('d/m/Y', strtotime($celular['lancamento'])); ?></li>
                                <li><strong>Condição:</strong> <?php echo $celular['condicao']; ?></li>
                            </ul>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="mt-4 text-dark text-center">
    <div class="container">
        <h3 class="fw-bold">Encontre ou Adicione Seu Celular Ideal!</h3>
    </div>
</section>

<section class="py-5">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="../crud_celular/celulares/add.php" class="btn btn-primary btn-lg px-5 py-3">Adicionar Novo Celular</a>
            </div>
            <div class="col-md-6 mb-4">
                <a href="../crud_celular/celulares/index.php" class="btn btn-outline-primary btn-lg px-5 py-3">Ver Catálogo Completo</a>
            </div>
        </div>
    </div>
</section>

<h3 class="text-center mb-5">Conheça mais sobre nós ou faça parte da nossa rede</h3>

<div class="row row-cols-1 row-cols-md-2 g-4 mb-1">
    <div class="col">
        <div class="card shadow-sm border-0 rounded-3 text-center h-100">
            <div class="card-header d-flex align-items-center">
                <h6 class="mb-2 mt-2">Conheça nossa rede de vendedores de celulares</h6>
            </div>
            <img src="img/loja.jpg" class="card-img-top" alt="capas" style="height: 250px; object-fit: cover;" />
            <div class="card-body">
                <p class="card-text">
                    Saiba mais sobre nossa rede, onde pessoas interessadas compram e vendem celulares novos, seminovos e usados.
                </p>
            </div>
            <a href="../crud_celular/customers/index.php">
                <div class="card-footer d-flex align-items-center">
                    <button class="btn btn-primary btn-lg me-auto" role="button">Saiba mais</button>
                    <i class="fa-solid fa-circle-chevron-right icons"></i>
                </div>
            </a>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm border-0 rounded-3 h-100">
            <div class="card-header d-flex align-items-center">
                <h6 class="mb-2 mt-2">Faça parte da nossa rede</h6>
            </div>
            <img src="img/loja1.jpg" class="card-img-top" alt="Loja" style="height: 250px; object-fit: cover;" />
            <div class="card-body">
                <p class="card-text">
                    Cadastre-se para comprar ou vender celulares.
                </p>
            </div>
            <a href="../crud_celular/customers/add.php">
                <div class="card-footer d-flex align-items-center">
                    <button class="btn btn-primary btn-lg me-auto" role="button">Me Cadastrar</button>
                    <i class="fa-solid fa-circle-chevron-right icons"></i>
                </div>
            </a>
        </div>
    </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
