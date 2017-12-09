<?php


class Produto implements iProduto{

	private $id;
	private $name;
	private $desc;
	
	public function setId($id){
		$this->id = $id;
		return $this;
	}

	public function setName($name){
		$this->name = $name;
		return $this;
	}

	public function setDesc($desc){
		$this->desc = $desc;
		return $this;
	}

	public function getId(){
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}

	public function getDesc(){
		return $this->desc;
	}

}