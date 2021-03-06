<!DOCTYPE html>
<html>
<head>
	<title>Jogo da Forca</title>
	<script type="text/javascript" src="/assets/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="navbar navbar-inverse" >
		<div class="container" style="font-weight: bold;font-size: 18px;">
			<ul class="nav navbar-nav" id="navbar">
				<li><a href="/" >HOME</a></li>
				<li><a href="/temas">TEMAS</a></li>
				<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">PALAVRAS <span class="caret"></span></a>

					<ul class="dropdown-menu">
						<?php foreach($temasMenu as $t): ?>
							<li><a href="/palavras/ver/<?php echo $t['id']; ?>"><?php echo strtoupper($t['nome']); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li><a href="/recordes">RECORDES</a></li>
				<li><a href="/sobre">SOBRE</a></li>
			</ul>
		</div>
	</div>

	<div class="container-fluid" style="margin-top: 25px;" id="template">
		<?php $this->loadViewInTemplate($viewName,$viewData); ?>
	</div>
	

	<div class="rodape">
			<img src="/assets/images/git.png" id="imgGit"> 
			<a href="https://github.com" style="line-height: 90px;color: white;font-size: 20px">https://github.com</a>	
			<img src="/assets/images/tenor.gif" style="height: 100px;float: right;margin-right: 20px;" id="imgRodape">
	</div>

</body>
</html>
