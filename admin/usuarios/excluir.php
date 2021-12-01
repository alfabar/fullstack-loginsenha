<?php
require_once "../../src/Usuario.php";
$sessao = new Acesso;
$sessão->verificaAcesso

$usuario = new Usuario;
$usuario->setId( $_GET['id'] );
$usuario->excluirUsuario();
header("location:listar.php");