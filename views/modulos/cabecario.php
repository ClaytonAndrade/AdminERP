<header class="main-header">
 	
     <!--=====================================
     LOGOTIPO
     ======================================-->
     <a href="inicio" class="logo">
         <!-- logo mini -->
         <span class="logo-mini">
		 	<b>ERP</b>
         </span>
         <!-- logo normal -->
         <span class="logo-lg">
            <b>Admin</b>ERP
         </span>
     </a>
     <!--=====================================
	BARRA DE NAVEGACIÓN
	======================================-->
	<nav class="navbar navbar-static-top" role="navigation">
		
		<!-- Botón de navegación -->
	 	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        	<span class="sr-only">Toggle navigation</span>
      	</a>

		<!-- perfil de usuario -->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">

					<?php

					if($_SESSION["foto"] != ""){
						echo '<img src="'.$_SESSION["foto"].'" class="user-image">';
					}else{
						echo '<img src="views/img/usuarios/default/anonymous.png" class="user-image">';
					}

					?>
						<span class="hidden-xs"><!--?php  echo $_SESSION["nome"]; ?-->Nome Usuário</span>
					</a>
					<!-- Dropdown-toggle -->
					<ul class="dropdown-menu">
						<li class="user-body">
							<div class="pull-right">
								<a href="sair" class="btn btn-default btn-flat">Sair</a>
							</div>
						</li>
					</ul>

				</li>
			</ul>
		</div>
	</nav>
 </header>