<?php

// require_once 'Conexao.php';
include("Conexao.php");
//use task\Conexao;


class CrudTask{

	protected $conexao;

	public function __construct(){
		$this->conexao = Conexao::getInstance();
	}

	public function create($nome, $descricao, $custo){

		try{
			$stmt = $this->conexao->prepare('INSERT INTO Task(nome, descricao, custo) VALUES(:nome, :descricao, :custo)');
			$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
			$stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
			$stmt->bindParam(':custo', $custo, PDO::PARAM_INT);
			$executa = $stmt->execute();

			return true;
			
		
		}
		catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}
	}

	//BUSCAR TAREFA PELO ID
	public function getID($id){
		$stmt = $this->conexao->prepare("SELECT * FROM Task WHERE id=?");
		$stmt->execute(array(1=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		//$editRow=$stmt-fetchObject();
		return $editRow;
	}

	//BUSCAR USUARIO
	public function getUsuario($login, $senha){
		$stmt = $this->conexao->prepare("SELECT * FROM Usuario WHERE nome=:nome AND senha=:senha");
		$stmt->bindparam(':nome', $login);
		$stmt->bindparam(':senha',$senha);
		$stmt->execute();
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		//$editRow=$stmt-fetchObject();
		return $editRow;
	}

	public function getAllTask(){
		
			$stmt = $this->conexao->prepare('SELECT * FROM Task');
			$stmt->execute();
			$dados = $stmt->fetchAll(PDO::FETCH_OBJ);
			return $dados;

	}

	public function update($nome, $descricao, $custo){
		try{
			$stmt=$this->conexao->prepare("UPDATE Task SET nome=?, descricao=?, custo=? WHERE id=:?");
			$stmt->bindparam(1, $nome);
			$stmt->bindparam(2, $descricao);
			$stmt->bindparam(3, $custo);
			$stmt->execute();

			return true;

		}
		catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}
	}

	public function delete($id)
	{
		$stmt = $this->conexao->prepare("DELETE FROM Task WHERE id=?");
		$stmt->bindparam(1, $id);
		$stmt->execute();
		return true;
	}
}