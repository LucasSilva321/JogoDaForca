<?php
class recordesController extends controller{

	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$dados = array();
		$recordes = new recordes();
		$inicio = 0;
		$qtd = 10;
		$dados['q'] = 1;

		if(isset($_GET['q']) && !empty($_GET['q'])){
			$inicio = addslashes($_GET['q']);
			$dados['q'] = $inicio;
			$inicio = ($inicio - 1) * 10;
		}
		$dados['recordes'] = $recordes->getRecordes($inicio,$qtd);
		$dados['total'] = $recordes->getTotal();
		if($dados['total'] > 0){
			$dados['total'] = ceil(($dados['total'] / $qtd));
		}

		$this->loadTemplate('recordes',$dados);
	}

	public function salvar(){
		$dados = array();
		if(isset($_POST['jogador']) && !empty($_POST['jogador'])){	
			$id_palavra = $_POST['palavra'];
			$tempo = $_POST['tempo'];
			$jogador = $_POST['jogador'];
			$recordes = new recordes();
			
			$recordes->salvar($jogador,$tempo,$id_palavra);
			unset($_SESSION['palavra']);
			unset($_SESSION['tempo']);
			

		}
		header("Location:/recordes");
	}

}

?>