<?php 

class Acesso {

    public function __construct() {

        //inicializando uma sessão no php
        session_start();
    }
    public function login(string $id, string $nome, string $tipo){
        //Capturar os dados de id nome e tipo e armazena-los na sessão
        $_SESSION['id'] = $id;
        $_SESSION['nome'] = $nome;
        $_SESSION['tipo'] = $tipo;
        header("location:admin/index.php");
    } 
    
    public function verificaAcesso(){
    
        if(!isset($_SESSION['id'])){
            // então detrua quarquer resquicio da sessão
            session_destroy();
    
            //e force o usuario a continuar na pagina
            header("location:../index.php?acesso_negado");
        }else{
            return true;
    
        }
    }

    public function logout(){
        session_destroy();
        header("location:../index.php");
        exit;// // or die();
    }

    public function verificaPermissao(){
        if($_SESSION['tipo'] != "administrador"){
            header("location:../index.php?nao_permitido");
            exit;
        }
    }



}
