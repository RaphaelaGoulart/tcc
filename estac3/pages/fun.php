<div class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<div id="top" class="row">
		<div class="col-md-11">
			<h2>Clientes</h2>
		</div>
		<div class="col-md-1">
			<!-- Chama o Formulário para adicionar clientes -->
			<a href="?page=fadd_cli" class="btn btn-primary pull-right h2">Novo Cliente</a> 
		</div>
	</div>
	<form action="?page=insere_cli" method="post">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-md-2">
				<label for="id_cli">ID</label>
				<input type="text" class="form-control" name="id_cli" readonly>
			</div>
			<div class="form-group col-md-5">
				<label for="nome_cli">Nome Completo</label>
				<input type="text" class="form-control" name="nome_cli">
			</div>
			<div class="form-group col-md-3">
				<label for="cpf_cli">CPF</label>
				<input type="text" class="form-control" name="cpf_cli">
			</div>
			<div class="form-group col-md-2">
				<label for="sexo_cli">Sexo</label>
				<select class="form-control" name="sexo_cli">
					<option> --------- </option>
					<option value="M">Masculino</option>
					<option value="F">Feminino</option>
				</select>
			</div>
		</div>
		<!-- 2ª LINHA -->
		<div class="row"> 
			<div class="form-group col-md-6">
				<label for="rg_cli">RG</label>
				<input type="text" class="form-control" name="rg_cli">
			</div>
            <div class="form-group col-md-6">
                <label for="escolaridade">Escolaridade</label>
                <select class="form-control" name="escolaridade" >
                    <option value="F">Ensino Fundamental</option>
                    <option value="M">Ensino Médio</option>
                    <option value="S">Ensino Superior</option>
                </select>
		    </div>
		</div>
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_cli" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 


</div>