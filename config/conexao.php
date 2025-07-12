<?php 
	$servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "plataforma cursos";

// criar a conexão
    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

    IF(!$conexao){
	die("Falha na conexão");
    }else{
	echo "Conexão realizada com sucesso!";
    }

