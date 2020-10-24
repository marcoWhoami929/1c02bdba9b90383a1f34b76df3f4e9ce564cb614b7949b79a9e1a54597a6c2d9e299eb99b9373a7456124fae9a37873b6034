<body class="hold-transition login-page">
  <div class="login-box" >

  <div class="login-box-body" >
    <center><img src="vistas/img/logo-login.png" class="img-responsive" style="padding:10px 50px;"></center>

    <form  method="POST">

      <div class="form-group has-feedback">
        <label>Ingresar correo:</label>
        <input type="email" class="form-control" placeholder="Correo electrónico" id="ingEmail" name="ingEmail"  required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>


      <div class="form-group has-feedback">
            <label>Ingresar password:</label>
            <div class="input-group" id="show_hide_password">
              <input class="form-control" type="password" placeholder="Contraseña" id="ingPassword" name="ingPassword" required>
              <div class="input-group-addon">
                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
              </div>
            </div>
      </div>
      <div class="form-group has-feedback">
        <small>*Si desea ver su contraseña dar click en el recuadro que se encuentra junto al campo contraseña.</small>
      </div>

      <br>

      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>

      <?php

        $login = new ControladorAdministradores();
        $login -> ctrIngresoAdministrador();

      ?>

    </form>

  </div>

</div>
</body>
