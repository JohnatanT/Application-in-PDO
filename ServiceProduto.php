<?php

class ServiceProduto{
	
	private $db;
	private $produto;

	function __construct(IConn $db, iProduto $produto){
		$this->db = $db->connect();
		$this->produto = $produto;
	}

	public function list(){
		$query = "SELECT * FROM 'produto' ";
		$stmt = $this->db->stmt_init();
		$stmt->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function save(){
		$query = "INSERT INTO 'produto' ('name','desc') VALUES (?,?)";
		$stmt = $this->db->stmt_init();
		$stmt->prepare($query);
		$stmt->bindValue($this->produto->getName(),$this->produto->getDesc());
		$stmt->execute();
		return $this->db->lastInsertId();
	}

	public function update(){

	}

	public function delete(){

	}


}