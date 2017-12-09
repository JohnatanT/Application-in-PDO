<?php

class ServiceProduto{
	
	private $db;
	private $produto;

	function __construct(IConn $db, iProduto $produto){
		$this->db = $db->connect();
		$this->produto = $produto;
	}

	public function list(){//Função de Listagem de Dados
		$query = "SELECT * FROM 'produto' ";
		$stmt = $this->db->stmt_init();
		$stmt->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function save(){//Função de Inserção de Dados
		$query = "INSERT INTO 'produto' ('name','desc') VALUES (?,?)";
		$stmt = $this->db->stmt_init();
		$stmt->prepare($query);
		$stmt->bind_param("ss",$this->produto->getName(),$this->produto->getDesc());
		$stmt->execute();
		return $this->db->lastInsertId();
	}

	public function update(){//Função de Update de Dados
		$query = "UPDATE 'produto' set 'name' = ?, 'desc' = ? WHERE id = ?";
		$stmt = $this->db->stmt_init();
		$stmt->prepare($query);
		$stmt->bind_param("ssi",$this->produto->getName(),$this->produto->getDesc(),$this->produto->getId());
		$ret = $stmt->execute();
		return $ret;
	}

	public function delete(){

	}


}