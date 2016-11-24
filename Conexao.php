<?php

class Conexao{

	protected static $instancia;

	public static function getInstance(){
		if(!isset(self::$instancia)){
			try{
				self::$instancia = new PDO('mysql:host=localhost;dbname=Task', 'root', 'leonidesNETO', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			}catch(PDOException $e){
				echo 'Erro ao conectar';
				exit();
			}
		}

		return self::$instancia;
	}

}