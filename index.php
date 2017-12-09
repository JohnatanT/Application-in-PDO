<?php

require_once "IConn.php";
require_once "Conn.php";
require_once "iProduto.php";
require_once "Produto.php";
require_once "ServiceProduto.php";

$db = new Conn("localhost","produtos","root","");
$produto = new Produto();

$produto->setName("Curso de PDO")->setDesc("Curso com Objetivo em Desenvolvimento em PHP + PDO");

$servico = new ServiceProduto($db,$produto);

$servico->list();
$servico->save();








