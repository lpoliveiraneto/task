<?php  

	require_once 'CrudTask.php';
	require_once 'Conexao.php';


	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$custo = $_POST['custo'];

	$crud = new CrudTask();

	//$crud->__construct();
	$crud->create($nome, $descricao, $custo);

	if($crud){
		header("location:listar.php");
	}

?>