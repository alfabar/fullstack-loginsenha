<?php
//Verifica acesso antes de acessar recursos
require_once "../../src/Acesso.php";
require_once "../../src/Usuario.php";
$sessão = new Acesso;
$usuario = new Usuario;

$sessão->verificaAcesso();
$sessao->verificaPermissao();


$usuario->setId( $_GET['id'] );
$usuario->excluirUsuario();
header("location:listar.php");