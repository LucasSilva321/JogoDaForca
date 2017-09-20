
<?php $alfabeto = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','x','y','z','ã','õ','ô','á','í','ç'); ?>



<div class="container" >
	<?php if(!empty($erro)): ?>
		<div class="alert alert-danger"><?php echo $erro; ?></div>
	<?php endif; ?>
	<?php if(!isset($palavra) || empty($palavra)): ?>
		<form method="post">
			<div class="form-group" >
				<label for="tema">Tema:</label>
				<select name="tema" class="form-control">
					<?php foreach($temas as $tema): ?>
						<option value="<?php echo $tema['id']; ?>"><?php echo $tema['nome']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			
			<input type="submit" value="Começar o Jogo" class="btn btn-success" >
		</form>
	<?php endif; ?>

	
	
	<hr>

	<?php if(!isset($palavra) || empty($palavra)): ?>
		<div id="espera" >
			<br><h1 style="margin-left: 20px;">Escolha um tema para começar o jogo</h1>
		</div>
	<?php else: ?>
		<div class="pane" id="telaJogo" >
			<div class="painel"  >
				<button style="width: 200px;float: left;margin-right: 100px;" onclick="exibirDica()" class="btn btn-info" id="btnDica">Dica</button>
				
				<h1 id="tempo" style="margin: 0;"></h1>

				
				<img src="/assets/images/s1.jpg" id="sapo1">
				<img src="/assets/images/s2.jpg" id="sapo2">
				<img src="/assets/images/s3.jpg" id="sapo3">
				<img src="/assets/images/s4.jpg" id="sapo4">
				<img src="/assets/images/s5.jpg" id="sapo5">
				<img src="/assets/images/s6.jpg" id="sapo6">
				<img src="/assets/images/s7.jpg" id="sapo7">
				<img src="/assets/images/forca1.png" id="forca">


				</div>
				<h1 class="lblDica" id="lblDica" style="display: none;">Dica: <?php echo $palavra['dica']; ?></h1>
				<div class="painelFora">
					<h3 ><?php echo strlen(str_replace(" ", "", $palavra['nome'])) ?> Letras: </h3>
					<?php $mascara = ""; 
						for($i = 0; $i< strlen($palavra['nome']) ; $i++){
							$mascara .= "#";
						} 
					?>						
					
					<h2 id="label"><?php echo $mascara; ?></h2>
				</div>
				<hr>
				<div>
					<?php foreach ($alfabeto as $letra) {
						echo "<button class='btn btn-default' onclick='confere(this)'>".strtoupper($letra)."</button>";
					} ?>
				</div>	
			</div>
		</div>
		<div id="salvar" style="display: none;">

			<form method="post" action="/recordes/salvar" id="formSalvar">				
				<input type="text" name="palavra" value="<?php echo $palavra['id']; ?>" style="display: none;" ><br>
				<input type="text" name="tempo" value="30" style="display: none;" id="inputTempo"><br>
				<div id="txtPalavra" style="display: none;"><?php echo $palavra['nome']; ?></div>

				<h2>Salvar Recorde</h2><br>
				<strong>Nome:<br></strong>
				<input type="text" name="jogador" class="form-control" style="width: 300px;">
				<input type="submit" value="Salvar" class="btn btn-default" style="margin-top: 5px;">
			</form>
		</div>
	<?php endif; ?>
	

	</div>
</div>

<link rel="stylesheet" type="text/css" href="/assets/css/sapo.css">
<script type="text/javascript" src="/assets/js/jogar.js"></script>
