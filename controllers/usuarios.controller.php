<?php

class ControllerUsuarios{
    /*===============================================================
    Login Usuários
    ===============================================================*/
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

    /*===============================================================
    Registrar Usuários
    ===============================================================*/
    static public function ctrlCrearUsuario(){
        if(isset($_POST["novoUsuario"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["novoNome"]) &&
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["novoUsuario"]) &&
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["novoPassword"])){
               
                $tabela = "usuarios";

                $dados = array("nome" => $_POST["novoNome"],
                               "usuario" => $_POST["novoUsuario"],
                               "password" => $_POST["novoPassword"],
                               "perfil" => $_POST["novoPerfil"]);

                $resposta = ModelsUsuarios::mdlRegistrarUsuarios($tabela, $dados);

                if($resposta == ok){
                    echo '<script>
                            swal({
                                type: "success",
                                title: "Usuário salvo com sucesso!",
                                showConfirmButton: true,
                                confirmButtonText: "Fechar"
                            }).then(function(result){
                                if(result.value){
                                    window.location = "usuarios";
                                }
                            });
                        </script>';
                }

            }else{
                echo '<script>
                        swal({
                            type: "error",
                            title: "O usuário não pode ser vazio ou ter caracteres especiais!",
                            showConfirmButton: true,
                            confirmButtonText: "Fechar"
                        }).then(function(result){
                            if(result.value){
                                window.location = "usuarios";
                            }
                        });
				    </script>';

            }
        }
    }

}

