<?php 
  include("functions.php");
  if (!isset($_SESSION)) session_start();
  add();
  include(HEADER_TEMPLATE); 
?>
<div class="container">
	<h2 class="mt-2">Se Cadastre</h2>

	<form action="add.php" method="post">
		<hr />
		<div class="row mt-5 mb-5">
			<div class="form-group col-md-7">
				<label for="name"><h6>Nome / Razão Social</h6></label>
				<input type="text" class="form-control" minlength="2" maxlength="60" placeholder="Digite seu Nome/Razão Social" name="customer['name']" required>
			</div>

			<div class="form-group col-md-3">
				<label for="campo2"><h6>CNPJ / CPF</h6></label>
				<input type="text" class="form-control" minlength="11" maxlength="11" placeholder="Digite seu CNPJ/CPF" name="customer['cpf_cnpj']" required>
			</div>

			<div class="form-group col-md-2">
				<label for="campo3"><h6>Data de Nascimento</h6></label>
				<input type="date" class="form-control" name="customer['birthdate']" required>
			</div>
		</div>

		<div class="row mb-5">
			<div class="form-group col-md-5">
				<label for="campo1"><h6>Endereço</h6></label>
				<input type="text" class="form-control" minlength="8" maxlength="60" placeholder="Digite seu Endereço" name="customer['address']" required>
			</div>

			<div class="form-group col-md-3">
				<label for="campo2"><h6>Bairro</h6></label>
				<input type="text" class="form-control" minlength="5" maxlength="50" placeholder="Digite seu Bairro" name="customer['hood']" required>
			</div>

			<div class="form-group col-md-2">
				<label for="campo3"><h6>CEP</h6></label>
				<input type="text" class="form-control" minlength="8" maxlength="8" placeholder="Digite seu CEP" name="customer['zip_code']" required>
			</div>

			<div class="form-group col-md-2">
				<label for="campo3"><h6>Data de Cadastro</h6></label>
				<input type="date" class="form-control" name="customer['created']" disabled>
			</div>
		</div>

		<div class="row mb-5">
			<div class="form-group col-md-5">
				<label for="campo1"><h6>Município</h6></label>
				<input type="text" class="form-control" minlength="4" maxlength="50" placeholder="Digite seu Município" name="customer['city']" required>
			</div>

			<div class="form-group col-md-2">
				<label for="campo2"><h6>Telefone</h6></label>
				<input type="text" class="form-control" minlength="8" maxlength="8" placeholder="Digite seu Telefone" name="customer['phone']" required>
			</div>

			<div class="form-group col-md-2">
				<label for="campo3"><h6>Celular</h6></label>
				<input type="text" class="form-control" minlength="11" maxlength="11" placeholder="Digite seu Celular" name="customer['mobile']" required>
			</div>

			<div class="form-group col-md">
				<label for="campo3"><h6>UF</h6></label>
				<input type="text" class="form-control" minlength="2" maxlength="2" placeholder="UF" name="customer['state']" required>
			</div>
			
			<div class="form-group col-md-2">
				<label for="campo3"><h6>Inscrição Estadual</h6></label>
				<input type="text" class="form-control" minlength="9" maxlength="9" placeholder="Digite sua IE" name="customer['ie']">
			</div>

		</div>

		<div id="actions" class="row mt-2">
			<div class="col-md-12">
				<button type="submit" class="btn me-4"><i class="fa-solid fa-down-long"></i> Salvar</button>
				<a href="index.php" class="btn"> <i class="fa-solid fa-arrow-left"></i> Cancelar</a>
			</div>
		</div>
	</form>
</div>
<?php include(FOOTER_TEMPLATE); ?>