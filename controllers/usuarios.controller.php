<?php

class ControllerUsuarios{

    static public function ctrlLoginUsuario(){

        if(isset($_POST["ingUsuario"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

                $tabela = "usuarios";

                $item = "usuario";
                $valor = $_POST["ingUsuario"];

                $resposta = ModelsUsuarios::mdlMostrarUsuarios($tabela, $item, $valor);

                if($resposta["usuario"] == $_POST["ingUsuario"] && $resposta["password"] == $_POST["ingPassword"]){

                    $_SESSION["startSession"] = "ok";
                    echo '<script>window.location = "inicio";</script>';

                }else{
                    echo '<br><div class="alert alert-danger">Erro ao tentar acessar o sistema, usuário ou senha é inválido</div>';
                }
                
            
            }
        }
    }
}

