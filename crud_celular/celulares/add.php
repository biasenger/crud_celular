<?php 
  include("functions.php");
  if (!isset($_SESSION)) session_start();
  add();
  include(HEADER_TEMPLATE); 
?>

<h2 class="mt-2 text-center">Informações do seu celular</h2>
<form action="add.php" method="post" enctype="multipart/form-data" class="container mt-4">
    <hr>
    <div class="row mb-5 mt-5">
        <div class="form-group col-md-6 mx-auto">
            <label for="modelo"><h6>Modelo</h6></label>
            <input type="text" class="form-control" id="modelo" name="celular[modelo]" required>
        </div>

        <div class="form-group col-md-6 mx-auto">
            <label for="marca"><h6>Marca do celular</h6></label>
            <input type="text" class="form-control" id="marca" name="celular[marca]" required>
        </div>
    </div>    
    <div class="row mb-5">
        <div class="form-group col-md-6 mx-auto">
            <label for="condicao"><h6>Condição do celular</h6></label>
            <select class="form-select" aria-label="Default select example" id="condicao" name="celular[condicao]" required>
                <option selected>Condição do celular</option>
                <option value="Novo">Novo</option>
                <option value="Semi novo">Semi Novo</option>
                <option value="Usado">Usado</option>
            </select>
        </div>
        <div class="form-group col-md-6 mx-auto">
            <label for="lancamento"><h6>Lançamento</h6></label>
            <input type="date" class="form-control" id="lancamento" name="celular[lancamento]" required>
        </div>
    </div>

    <div class="row mb-5">
        <div class="form-group col-md-6 mx-auto">
            <label for="preco"><h6>Preço</h6></label>
            <input type="number" class="form-control" id="preco" name="celular[preco]" step="0.01" required>
        </div>
        <div class="form-group col-md-6 mx-auto">
            <label for="datacadastro"><h6>Data do Cadastro</h6></label>
            <input type="date" class="form-control" id="datacadastro" name="celular[datacadastro]" required>
        </div>
    </div>
    <div class="row mb-5">
        <div class="form-group col-md-6 mx-auto">
            <label for="foto"><h6>Foto NF</h6></label>
            <input type="file" class="form-control" id="foto" name="foto" required>
        </div>

        <div class="form-group col-md-6 mx-auto">
            <label for="imgPreview"><h6>Pré visualização</h6></label>
            <img id="imgPreview" src="./fotos/m.jpeg" alt="Pré visualização" class="img-fluid" style="max-width: 150px; max-height: 150px; object-fit: cover;">
        </div>
    </div>

    <div id="actions" class="row text-center">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary me-4"><i class="fa-solid icon fa-sd-card"></i> Salvar</button>
            <a href="index.php" class="btn btn-secondary"><i class="fa-solid icon fa-arrow-left"></i> Cancelar</a>
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
