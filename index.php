<?php 
require_once "src/Acesso.php";
require_once "src/Usuario.php";


if(isset($_POST['entrar']))
{
    $usuario = new Usuario;
    $usuario->setEmail($_POST['email']);
    
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> CRUD PHP e MySQL com controle de acesso </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">

    <div class="jumbotron my-4 shadow text-center">
        <h1 class="display-4">CRUD PHP e MySQL com controle de acesso</h1>
        <hr class="my-4">
        <h2 class="lead">Deseja realizar tarefas administrativas? Então entre com seu e-mail e senha para acessar o sistema.</h2>
        <hr class="my-4">
        
        
        <form action="" class="w-50 mx-auto" method="post">
            <p class="form-group text-left">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control">

            </p>
            <p class="formgroup">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" name="senha" id="senha" class="form-control">

            </p>
            <button type="submit" class="btn btn-primary" name="entrar">Entrar</button>
        </form>
    </div> 
    
    
</div>


</body>
</html>