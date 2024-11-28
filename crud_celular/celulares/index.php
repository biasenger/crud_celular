<?php
	include("functions.php");
	if (!isset($_SESSION)) session_start();
	index();
	include(HEADER_TEMPLATE); 
?>

<div class="container">
	<header class="mt-2">
		<div class="grid text-start">
			<div class="col-sm-6">
				<h2>Consulte os Celulares</h2>
			</div>
			<div class="col-sm-6">
				<a class="btn  me-4" href="add.php"><i class="fa-solid icon fa-receipt me-2"></i>Vender meu celular</a>
				<a class="btn " href="index.php"><i class="fa-solid icon fa-refresh me-2"></i>Atualizar</a>
			</div>
		</div>
	</header>
	<hr>
	<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5 mt-5">
		<?php if ($celulares) : ?>
			<?php foreach ($celulares as $celular) : ?>
				<article class="celularcard g-col">
					<a href="view.php?id=<?php echo $celular['id']; ?>">
						<section class="celularcard__hero" style="background-image: url('fotos/<?php echo !empty($celular['foto']) ? $celular['foto'] : 'semimagem.jpeg'; ?>');">	
							<header class="celularcard__hero-header">
								<h6><?php echo $celular['condicao']; ?></h6>
								<div class="celularcard__icon">
									<a href="view.php?id=<?php echo $celular['id']; ?>"><i class="fa-regular fa-eye"></i></a>
								</div>
							</header>
						</section>
					</a>	
					<h6 class="celularcard__job-title"><?php echo $celular['modelo']; ?></h6>
					<hr>
					<footer class="celularcard__footer">
						<div class="celularcard__job-summary">
							<div class="celularcard__job">
								<p>Id: <?php echo $celular['id']; ?></p>
								<p>	R$: <?php echo $celular['preco']; ?></p>
							</div>
						</div>
						<a href="edit.php?id=<?php echo $celular['id']; ?>" class="button-74"><i class="fa-regular fa-pen-to-square"></i></a>
						<a href="#" class="button-74" data-bs-toggle="modal" data-bs-target="#delete-user-modal" data-usuario="<?php echo $celular['id']; ?>">
							<i class="fa-regular fa-trash-can"></i>
						</a>
					</footer>
				</article>
			<?php endforeach; ?>
		<?php else : ?>
			<div>Nenhum registro encontrado.</div>
		<?php endif; ?>
	</div>
	</div>
<?php include("modal.php"); ?>
<?php include(FOOTER_TEMPLATE); ?>
