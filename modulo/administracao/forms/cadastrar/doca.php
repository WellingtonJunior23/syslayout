<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Novo</h3>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" id="doca" name="doca" method="post" action="action/Controller.php" role="form">
			
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-1 control-label">E-mail:</label>
				<div class="col-sm-4">
					<input type="text" name="doca" value="<?php echo($_SESSION['administracao/cadastrar/doca']);?>" class="form-control" id="inputEmail3"
						placeholder="Descricao">
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-1">
					<button type="submit" class="btn btn-primary" id="botaoSave">
						<span class="glyphicon glyphicon-floppy-saved"></span> Salvar
					</button>
			      <span class="botaoSave" style="visibility: hidden"><img src="../../img/495.GIF"></span>
				</div>
			</div>
			
		</form>
	</div>
</div>