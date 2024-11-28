<?php
	include("functions.php");
	if (!isset($_SESSION)) session_start();
	view($_GET['id']);
	include(HEADER_TEMPLATE); 
?>

 <div class="container">
			<header>
				<h2>Descrição do celular "<?php echo $celular['modelo']; ?>"</h2>
			</header>
			<hr>
			<div class="container text-start">
				<div class="row align-items-center">
					<div class="col">
						<h6>Id do celular:</h6>
						<p><?php echo $celular['id']; ?></p>

						<h6>Modelo do celular:</h6>
						<p><?php echo $celular['modelo']; ?></p>

						<h6>Condição do celular:</h6>
						<p><?php echo $celular['condicao']; ?></p>
					</div>
					<div class="col">
						<h6>Lançamento do celular:</h6>
						<p><?php echo $celular['lancamento']; ?></p>

						<h6>Preço:</h6>
						<p><?php echo 'R$ ' . ($celular['preco']); ?></p>

						<h6>Data do Cadastro: </h6>
						<p><?php echo formatadata($celular['datacadastro'], "d-m-Y"); ?></p>
					</div>
					<div class="col">
						<h6>Foto:</h6>
						<?php
							if(!empty($celular['foto'])) {
								echo "<img src=\"fotos/" . $celular['foto'] . "\" class=\"shadow p-1 mb-1 bg-body rounded\" width=\"300px\">";
							} else{
								echo "<img src=\"fotos/semimagem.jpeg\" class=\"shadow p-1 mb-1 bg-body rounded\" width=\"300px\">";
							}
						?>
					</div>
				</div>
			</div>
		
			<div id="actions" class="row text-end me-5" >
				<div class="col-md-12 g-4">
					<a href="edit.php?id=<?php echo $celular['id']; ?>" class="button-74 me-4"><i class="fa-solid icon fa-pen-to-square"></i> Editar</a>
					<a href="index.php" class="btn btn-primary"><i class="fa-solid icon fa-arrow-left"></i> Voltar</a>
				</div>
			</div>
		<?php clear_messages();?>
	</div>	
<?php include(FOOTER_TEMPLATE); ?>