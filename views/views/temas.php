<form method="post">
	<div class="form-group">
		<label for="tema">Nome do Tema:</label>
		<input type="text" name="tema" class="form-control" style="width: 400px;">
	</div>
	<input type="submit" value="Adicionar Tema" class="btn btn-default">
</form>
<hr>
<table class="table table-bordered table-striped table-hover" style="width: 50%">
	<thead>
		<tr>
			<td ><strong>Nome do Tema</strong></td>
			<td class="col-sm-3"><strong>Opções</strong></td>
		</tr>	
	</thead>
	<tbody>
		<?php foreach($temas as $tema): ?>
			<tr>
				<td><?php echo $tema['nome']; ?></td>
				<td><a href="/palavras/ver/<?php echo $tema['id']; ?>">Ver Palavras</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>