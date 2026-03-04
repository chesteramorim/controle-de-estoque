<?php
$servidor = "localhost";
$usuario= "root";
$senha ="";
$banco="estoque";


//correção com o banco de dados


try{



//tentativa de conexão com o banco de dados
//código...
//classe PDO é usada para acessar varios tipos de banco de dados usando a mesma função 
//DSN Data source name é a string de conexão usada para especificar o tipo de banco de dados,o host e o nome do banco de dados  

$conexao = new PDO ("mysql:host=$servidor;dbname=$banco;charset=utf8",$usuario, $senha);


$conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//echo"Conexão com o banco de dados estabelecida com sucesso!";

} catch (\Throwable $erro) {

die("Erro ao conectar com o banco de dados:". $erro->getMessage());


}