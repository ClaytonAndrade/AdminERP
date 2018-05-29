<?php

class Connection{

    static public function conectar(){

		$link = new PDO("mysql:host=localhost; port=3000; dbname=admin_erp",
			            "root",
			            "root");

		$link->exec("set names utf8");

		return $link;
	}

}
