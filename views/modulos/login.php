<div id="bg"></div>

<div class="login-box">

  <div class="login-logo">
    <b>Admin</b>ERP</a>
  </div>

  <div class="login-box-body">
    
    <p class="login-box-msg">Iniciar Sessão</p>

    <form method="post">

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuário" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Senha" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">

        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
    
      </div>
      
      <?php
        $login = new ControllerUsuarios();
        $login -> ctrlLoginUsuario();
      ?>
  
    </form>

  </div>

</div>
