<?php
$usuario= "";
$senha ="";
$banco="estoque";


//correção com o banco de dados


try{
//tentativa de conexão com o banco de dados
//código...
//classe PDO é usada para acessar varios tipos de banco de dados usando a mesma função 
//DSN Data source name é a string de conexão usada para especificar o tipo de banco de dados,o host e o nome do banco de dados  


$conexao= new PDO("
mysql:hos=$servidor;
dbname=$banco;
charset=utf8",
$usuario,
$senha);


} catch (\Throwable $erro) {

//lançavel serve para qualquer tipo de erro ou exceção
//captura de erro caso a conexão falhe

}