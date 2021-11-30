<?php
require_once "../../src/Usuario.php";
$usuario = new Usuario;
$usuario->setId( $_GET['id'] );
$usuario->excluirUsuario();
header("location:listar.php");