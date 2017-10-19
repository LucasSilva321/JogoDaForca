<form method="post">
	<div class="form-group" style="float: left;margin-right: 10px;">
		<label for="nome">Nome da Palavra:</label>
		<input type="text" name="nome" class="form-control" style="width: 400px;">
	</div>
	<div class="form-group">
		<label for="dica">Dica:</label>
		<input type="text" name="dica" class="form-control" style="width: 400px;">
	</div>
	<input type="submit" value="Adicionar Palavra" class="btn btn-default">
</form>
<hr>
<h2><?php echo $nomeTema; ?></h2><br>
<table class="table table-bordered table-striped table-hover" style="width: 50%">
	<thead>
		<tr>
			<td ><strong>Nome da Palavra</strong></td>
			<td ><strong>Dica</strong></td>
		</tr>	
	</thead>
	<tbody>
		<?php foreach($palavras as $palavra): ?>
			<tr>
				<td><?php echo $palavra['nome']; ?></td>
				<td><?php echo $palavra['dica']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>