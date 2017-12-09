<?php

require_once "IConn.php";
require_once "Conn.php";
require_once "iProduto.php";
require_once "Produto.php";
require_once "ServiceProduto.php";

$db = new Conn("localhost","produtos","root","");
$produto = new Produto();

$produto->setName("Curso de PDO")->setDesc("Curso com Objetivo em Desenvolvimento em PHP + PDO");//Inserindo Dados
$produto->setId(4)->setName("Curso de HTML")->setDesc("Curso De HTML com foco na nova versão");//Update nos dados

//Craindo meu Objeto serviços passando a conexão e a classes Produtos
$servico = new ServiceProduto($db,$produto);

//Funções do CRUD
$servico->list();
$servico->save();
$servico->update();
$servico->delete(4);








