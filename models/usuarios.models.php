<?php

require_once "connection.php";

class ModelsUsuarios{
    
    /*=============================================
	MOSTRAR USUARIOS
    =============================================*/
    
    static public function mdlMostrarUsuarios($tabela, $item, $valor){

		$stmt = Connection::conectar()->prepare("SELECT * FROM $tabela WHERE $item = :$item");
		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetch();
		$stmt -> close();
		$stmt = null;
	}

	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/
	
	static public function mdlRegistrarUsuarios($tabela, $dados){
		
		$stmt = Connection::conectar()->prepare("INSERT INTO $tabela(nome, usuario, password, perfil) VALUES (:nome, :usuario, :password, :perfil)");

		$stmt->bindParam(":nome", $dados["nome"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $dados["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $dados["password"], PDO::PARAM_STR);
		$stmt->bindParam(":perfil", $dados["perfil"], PDO::PARAM_STR);
		//$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;
	}
}