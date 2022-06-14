<?php

$nome = $_POST['username'];
$email = $_POST['email'];
$senha = $_POST['password'];
$nasc = $_POST['nasc'];

echo "Bem vindo(a) $nome, confira seu email e sua data de nascimento: $email , $nasc.";

$servidor = "localhost" ;
$bdname = "cadastro" ;
$usuario = "root" ;
$senha = "" ;

$conexao = mysqli_connect ( $servidor , $usuario , $senha , $bdname );

if (! $conexao )
  die ( "Problemas com a conexão com o banco de dados. Descrição do problema: " . mysqli_connect_error ());
echo  "Conexão realizada com sucesso!" ;

$sql = "INSERT INTO usuario ('nome', 'email', 'senha', 'nascimento') VALUE ('$nome', '$email', '$senha', '$nasc')";

if (mysqli_query($conexao, $sql))
    echo "Cadastro realizado com sucesso!";
else
    echo "Erro!";



?>