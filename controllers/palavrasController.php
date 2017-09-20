<?php
class palavrasController extends controller{

	public function __construct(){
		parent::__construct();
	}
	

	public function ver($id){
		$dados = array();
		$temas = new temas();
		$palavras = new palavras();
		if(isset($id) && !empty($id)){
			if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['dica']) && !empty($_POST['dica']) ){
			$palavras = new palavras();
			$palavras->adicionar($_POST['nome'],$_POST['dica'],$id);
			
			}

			$dados['nomeTema'] = $temas->getTema($id);
			if(count($dados['nomeTema']) > 0){
				$dados['nomeTema'] = $dados['nomeTema'][0];
				$dados['idTema'] = $id;
			}
			else{
				header("Location:/");
			}
			$dados['palavras'] = $palavras->getPalavras($id);
			$this->loadTemplate('palavras-ver',$dados);
		}
		else{
			header("Location:/");
		}
		
	}




}

?>