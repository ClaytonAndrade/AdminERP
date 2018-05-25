<!--======================================================================================================
Autor: Clayton Andrade
Data Inicial: 17/05/2018
Descrição: Modelo de ERP simples utilizando php 7.1.7, MySQL 5.6.34 template AdminLTE 2.4.3, desenvolvido
em servidor local MAMP.
=======================================================================================================-->
<?php

require_once "controllers/template.controller.php";
require_once "controllers/categorias.controller.php";
require_once "controllers/clientes.controller.php";
require_once "controllers/produtos.controller.php";
require_once "controllers/usuarios.controller.php";
require_once "controllers/vendas.controller.php";

require_once "models/categorias.models.php";
require_once "models/clientes.models.php";
require_once "models/produtos.models.php";
require_once "models/usuarios.models.php";
require_once "models/vendas.models.php";

$template = new ControllerTemplate();
$template -> ctrlTemplate();
