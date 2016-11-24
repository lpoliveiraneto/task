<?php
	
	require_once 'CrudTask.php';

	session_start();

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$crud = new CrudTask();

	$user = $crud->getUsuario($login, $senha);
 
	if($user){
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		$_SESSION['user'] = $user->id; 		
		header('location:tarefa.php');
	}

	else{
		
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		//header('location:index.php');
		echo ("<script>alert('Login incorreto'); location.href='index.php';</script>");
	}


  ?>