<?php  

	require_once 'CrudTask.php';
	require_once 'Conexao.php';


	$id = $_REQUEST['id'];

	$crud = new CrudTask();

	//$crud->__construct();
	$crud->delete($id);

	if($crud){
		header("location:listar.php");
	}

?>