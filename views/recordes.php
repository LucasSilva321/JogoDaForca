<h2>Recordes</h2><br>

<table class="table table-bordered table-striped table-hover" style="width: 50%">
	<thead>
		<tr>
			<td ><strong>Jogador</strong></td>
			<td><strong>Tempo</strong></td>
			<td><strong>Palavra</strong></td>
		</tr>	
	</thead>
	<tbody>
		<?php foreach($recordes as $rec): ?>
			<tr>
				<td><?php echo $rec['jogador']; ?></td>
				<td><?php echo $rec['tempo']; ?></td>
				<td><?php echo $rec['palavra']; ?></td>
			</tr>
		<?php endforeach; ?>	
	</tbody>
</table>

<ul class="pagination">
	<?php for($i=1; $i <= $total; $i++): ?>
		<li class="<?php echo ($q == $i)? 'active':''; ?>"><a href="/recordes?q=<?php echo $i; ?>"><?php echo $i; ?></a></li>
	<?php endfor; ?>
</ul>