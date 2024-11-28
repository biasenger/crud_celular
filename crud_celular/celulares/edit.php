<?php 
  include("functions.php");
  if (!isset($_SESSION)) session_start();
  edit();
  include(HEADER_TEMPLATE);
?>

		<header>
			<h2>Atualizar Informações</h2>
		</header>

		<form action="edit.php?id=<?php echo $celular['id']; ?>" method="post" enctype="multipart/form-data">
		  <hr>
		  	<div class="row mb-5 mt-5">
				<div class="form-group col-md-4">
					<label for="modelo"><h6>Modelo</h6></label>
					<input type="text" class="form-control" name="celular[modelo]" value="<?php echo ($celular['modelo']); ?>">
				</div>
				<div class="form-group col-md-4">
					<label for="nome"><h6>Id</h6></label>
					<input type="text" class="form-control" name="celular[id]" value="<?php echo ($celular['id']); ?>">
				</div>
				<div class="form-group col-md-4">
					<label for="condicao"><h6>Condição do celular</h6></label>
					<select class="form-select" aria-label="Default select example" id="condicao" name="celular[condicao]" required>
							<option selected value="<?php echo $celular['condicao']; ?>">Estado do celular</option>
							<option value="Novo">Novo</option>
							<option value="Semi novo">Semi Novo</option>
							<option value="Usado">Usado</option>
							<option value="Só o pó">Só o pó</option>
					</select>
				</div>
			</div>

			<div class="row mb-5">
				<div class="form-group col-md-4">
					<label for="preco"><h6>Preço</h6></label>
					<input type="number" class="form-control" name="celular[preco]" step="0.01" value="<?php echo ($celular['preco']); ?>">
				</div>
			</div>

			<div class="row mb-5">
				<div class="form-group col-md-4">
					<label for="datacadastro"><h6>Data do Cadastro</h6></label>
					<input type="date" class="form-control" name="celular[datacadastro]" value="<?php echo formatadata($celular['datacadastro'], "Y-m-d"); ?>" disabled>
				</div>
                    <?php 
                        $foto = "";
                        if (empty($celular['foto'])) {
                            $foto = "sem_imagem.jpg";
                        } else {
                            $foto = $celular['foto'];
                        }
                    ?>
                    <div class="form-group col-md-4">
                        <label for="foto"><h6>Foto NF</h6></label>
                        <input type="file" class="form-control" id="foto" name="foto" value="fotos/<?php echo $foto; ?>">
                    </div>
                        
                    <div class="form-group col-md-2">
                        <label for="pre"><h6>Pré-Visualização</h6></label>
                        <img class="form-control shadow p-2 mb-2 bg-body rounded" id="imgPreview" src="fotos/<?php echo $foto ;?>" alt="Foto da NF" srcset="">
                    </div>
                </div>

			<div id="actions" class="row">
				<div class="col-md-12">
					<button type="submit" class="button-74 me-4"><i class="fa-solid icon fa-sd-card"></i> Salvar</button>
					<a href="index.php" class="button-74"><i class="fa-solid icon fa-arrow-left"></i> Cancelar</a>
				</div>
			</div>
		</form>
<?php include(FOOTER_TEMPLATE); ?>

		<script>
            $(document).ready(() => {
                $("#foto").change(function () {
                    const file = this.files[0];
                    if (file) {
                        let reader = new FileReader();
                        reader.onload = function (event) {
                            $("#imgPreview").attr("src", event.target.result);
                        };
                        reader.readAsDataURL(file);
                    }
                });
            });
        </script>