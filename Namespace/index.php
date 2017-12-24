<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Jose Maria");
$cad->setEmail("jose.maria@gmail.com");
$cad->setSenha("123456");

echo $cad->registrarVenda();