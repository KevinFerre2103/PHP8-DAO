<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

//Carrega um usuário
//$jose = new Usuario();
//$jose->loadById(3);
//echo $jose;

//Carrega uma lista de usuarios
//$list = Usuario::getList();
//echo json_encode($list);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega login usando user e password
//$usuario = new Usuario();
//$usuario->login("jose","21151561");
//echo $usuario;

//Insert usuario na procedure
//$aluno = new Usuario("Teste","!@#$$");
//$aluno->insert();
//echo $aluno;

//Update na tabela
$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor","!@#$%%");

echo $usuario;


?>