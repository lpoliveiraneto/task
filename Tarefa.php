<?php  

use task\CrudTask

class Tarefa{
	private $nome;
	private $descricao;
	private $custo;
	private $crud;

	public __construct($nome, $descricao, $custo){
		$this->nome = $nome;
		$this->descricao = $descricao;
		$this->custo = $custo;
		$this->crud = new CrudTask();

	}

	public function getNome(){
		return $this->nome;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function getCusto(){
		return $this->custo;
	}

	public function setNome($nome){
		return $this->nome = $nome;
	}

	public function setDescricao($descricao){
		return $this->descricao = $descricao;
	}

	public function setCusto($custo){
		return $this->custo = $custo;
	}

	public function save($nome, $descricao, $custo){
		$crud->create($nome, $descricao, $custo);
	}

	public function alterar($nome, $descricao, $custo){
		$crud->update($nome, $descricao, $custo);
	}

	public function delete($id){
		$crud->delete($id);

	}
}
