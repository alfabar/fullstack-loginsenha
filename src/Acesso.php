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


    
        
    
}