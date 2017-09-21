<?php
class temasController extends controller{

	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$dados = array();
		$temas = new temas();

		if(isset($_POST['tema']) && !empty($_POST['tema'])){
			$temas->adicionar($_POST['tema']);
			header("Location:/temas");
			exit();
		}
	
		$dados['temas'] = $temas->getTemas();

		$this->loadTemplate('temas',$dados);
	}



}

?>