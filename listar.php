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
		<title>Lista de Tarefa</title>
		<link rel="stylesheet" type="text/css" href="/css/app.css">
	    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	    <link rel="stylesheet" type="text/css" href="/css/custom.css">
		<script type="text/javascript" src="javascript/excluir.js"></script>
	</head>
	
	<body>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid" >
					<div class="navbar-header">
						<a class="navbar-brand" href="/tarefa.php">Lista de tarefa</a>
					</div>

					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="/tarefa.php">Nova Tarefa</a>
						</li>
						<li>
							<a href="/logout.php">Logout</a>
						</li>	
					</ul>
					
				</div>
			</nav>
			<div>
				<table class="table table-striped table-responsive">
					<thead>
						<tr>
							<th>Tarefa</th>
							<th>Descrição</th>
							<th>Custo</th>
							<th>Alterações</th>
						</tr>
					</thead>
					<tbody>
						<?php  
							require_once 'CrudTask.php';

							$crud = new CrudTask();

							$dados = $crud->getAllTask();
							foreach($dados as $row){
								echo '<tr>';
								echo '<td>'.$row->nome.'</td>';
								echo '<td>'.$row->descricao.'</td>';
								echo '<td>'.$row->custo.'</td>';
								echo '<td> <a href="/delete.php?id='.$row->id.'" onclick="return excluir_tarefa(event)"> 
											<span class="glyphicon glyphicon-trash"></span>
										</a>';
								echo '</tr>';
							}
						?>
					</tbody>
				</table>
			</div>
		</div>	
	</body>
</html>