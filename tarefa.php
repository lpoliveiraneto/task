 <!DOCTYPE html>
<html>
	<head>
		<?php

			session_start();
			if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){

				unset($_SESSION['login']);
				unset($_SESSION['senha']);
				header('location:index.php');
			
			}

			$logado = $_SESSION['login'];  

		?>
		<title>Tarefas</title>
		<link rel="stylesheet" type="text/css" href="/css/app.css">
	    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	    <link rel="stylesheet" type="text/css" href="/css/custom.css">
	    <script type="text/javascript" src="javascript/validar.js"></script>
	</head>

	<body>
		
		<div class="container">
		
			<nav class="navbar navbar-default">	
				<div class="container-fluid" >
					<div class="navbar-header">		
						<a class="navbar-brand" href="tarefa.php" style="color:#000000">Cadastro de Tarefas</a>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="/listar.php"  >Lista</a>
						</li>
						<li>
							<a href="/tarefa.php">Nova Tarefa</a>
						</li>
						<li>
							<a href="/logout.php">Logout</a>
						</li>

					</ul>
				</div>		
			</nav>		
				
			<form name="form1" action="salvar.php" method="POST">
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" id="nome" name="nome" class="form-control" placeholder="Nome da Tarefas">
				</div>
				
				<div class="form-group">
					<label for="descricao">Descrição</label>
					<input type="text" id="descricao" name="descricao" class="form-control" placeholder="Descrição da Tarefa">
				</div>

				<div class="form-group">
					<label for="custo">Custo</label>
					<input type="number" id="custo" name="custo" class="form-control" placeholder="Valor do Custo" required="required">
				</div>

					<button type="submit" class="btn btn-default" onclick="return validar()">
						Enviar
					</button>
			</form>


		</div>
		
	</body>
</html>  