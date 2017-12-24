<?php

require_once("config.php");

use cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Jose Maria");
$cad->setEmail("jose.maria@gmail.com");
$cad->setSenha("123456");

echo $cad->registrarVenda();