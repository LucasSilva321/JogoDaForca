<?php 
class recordes extends model{
	public function getRecordes($inicio,$qtd){
		$array = array();
		$sql = "SELECT *, (select nome from palavras where recordes.id_palavra = palavras.id) as palavra FROM recordes ORDER BY tempo LIMIT $inicio, $qtd ";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}
		return $array;
	}

	public function salvar($jogador,$tempo,$id_palavra){
		$jogador = addslashes($jogador);
		$tempo = addslashes($tempo);
		$id_palavra = addslashes($id_palavra);
		$this->db->query("INSERT INTO recordes (jogador,tempo,id_palavra) VALUES ('$jogador','$tempo','$id_palavra')");
	}

	public function getTotal(){
		$sql = "SELECT * FROM recordes";
		$sql = $this->db->query($sql);
		return $sql->rowCount();
	}
}

?>