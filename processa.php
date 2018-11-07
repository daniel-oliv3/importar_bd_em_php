<?php
session_start();
//receber os dados do formulario
$arquivo = $_FILES['arquivo'];
$banco = $arquivo['tmp_name'];

$servidor = $_POST['servidor'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$dbname = $_POST['dbname'];

//criar a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//ler os dados do arquivo e converte em string
$dados = file_get_contents($banco);
//echo $dados;

//executa as query do backup
mysqli_multi_query($conn, $dados);

$_SESSION['msg'] = "<span style='color: green'>Base de dados restaurada com sucesso!</span><br>";
header("Location: index.php");


?>