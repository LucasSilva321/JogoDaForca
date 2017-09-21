<?php
class jogarController extends controller{

	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$dados = array("erro" => "");
		$temas = new temas();
		$dados['temas'] = $temas->getTemas();
		if(isset($_POST['tema']) && !empty($_POST['tema'])){
			$palavras = new palavras();
			$dados['palavra'] = $palavras->getPalavraByIdTema($_POST['tema']);
			if(count($dados['palavra']) == 0){
				$dados['erro'] = "Não existem palavras cadastradas para esse tema";
			}
		}
		$this->loadTemplate('jogar',$dados);
	}

}

?>