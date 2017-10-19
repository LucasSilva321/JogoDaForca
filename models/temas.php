<?php 
class temas extends model{
	public function getTemas(){
		$array = array();
		$sql = "SELECT * FROM temas";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}
		return $array;
	}

	public function adicionar($nome){
		$nome = addslashes($nome);
		$sql = "INSERT INTO temas SET nome = '$nome'";
		$this->db->query($sql);
	}

	public function getTema($id){
		$array = array();
		$id = addslashes($id);
		$sql = $this->db->query("SELECT nome FROM temas WHERE id = '$id'");
		if($sql->rowCount() > 0){
			$array = $sql->fetch();
			
		}
		return $array;
	}

	
}

?>