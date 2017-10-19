<?php 
class palavras extends model{

	public function getPalavras($id_tema){
		$array = array();
		$id_tema = addslashes($id_tema);
		$sql = "SELECT * FROM palavras WHERE id_tema = '$id_tema'";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();

		}
		return $array;

	}


	public function adicionar($nome,$dica,$id_tema){
		$nome = addslashes($nome);
		$dica = addslashes($dica);
		$id_tema = addslashes($id_tema);

		$sql = "INSERT INTO palavras (nome,dica,id_tema) VALUES ('$nome','$dica','$id_tema')";
		$this->db->query($sql);
	}

	public function getPalavraByIdTema($id_tema){
		$array = array();
		$id_tema = addslashes($id_tema);
		$sql = "SELECT * FROM palavras WHERE id_tema = '$id_tema' ORDER BY RAND() LIMIT 1";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0){
			$array = $sql->fetch();

		}
		return $array;
	}


}

?>