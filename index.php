<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="/css/app.css"> 
	    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	    <link rel="stylesheet" type="text/css" href="/css/custom.css"> 
	</head>
	<body>
		<div class="container">	
			<nav class="navbar navbar-default">	
					<div class="container-fluid" >

					<div class="navbar-header">		
						<a class="navbar-brand" href="tarefa.php">Cadastro de Tarefas</a>
						
					</div>
						
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="/listar.php">Lista</a>
								</li>
								<li>
									<a href="/tarefa.php">Nova Tarefa</a>
								</li>
								

							</ul>
					</div>		
			</nav>


			<form name="formlogin" action="open.php" method="POST" class="form-horizontal">
				<!--<div class="control-group">--> 
					
					<fieldset id="fie">
								
						<legend>LOGIN</legend>
						<!--<div class="control-group">
							<div class="controls">
								<label class="control-label" for="inputLogin">Nome</label>
								<input class="controls" type="email" name="login" id="login" placeholder="Digite seu Login"/>	
							</div>
						</div>-->
						<div class="input-group">
							<span class="input-group-addon" id="basic_addon1">Login</span>
							<input type="text" class="form-control" placeholder="Digite seu Nome" name="login" id="login" aria-describedby="basic_addon1">
						</div><br />

						<div class="input-group">
							<span class="input-group-addon" id="basic_addon1">Senha</span>
							<input type="password" class="form-control" placeholder="Digite sua Senha" name="senha" id="senha" aria-describedby="basic_addon1">
						</div>

						<!--
						<div class="control-group">	
							<div class="controls">
								<label class="control-label" for="inputLogin">Senha</label>
								<input class="controls" type="password" name="senha" id="login" placeholder="Digite sua senha" />
							</div>
						</div>-->
						<div class="control-group">
							<div class="controls">
								<label class="control-label">
									Lembrar
								</label>
								<input type="checkbox" name="lembrar"/>
								<button class="btn" type="submit">Acessar</button>
							</div>
						</div>	
					</fieldset>
				<!--</div> -->	
			</form>

	</div>	
	</body>
</html>