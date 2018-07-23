<div class="login">

  <div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <form method="post" action="">
          <h1>Iniciar Sesion</h1>
          <div>
            <input type="text" class="form-control" name="usuario" placeholder="Username" required="" />
          </div>
          <div>
            <input type="password" class="form-control" name="password" placeholder="Password" required="" />
          </div>
          <?php if ($this->session->flashdata('ControllerMessage')): ?>
            <div class="alert alert-danger">
              <?php echo $this->session->flashdata('ControllerMessage'); ?>
            </div>
          <?php endif; ?>
          <div>
            <button role="submit" class="btn btn-success submit btn-block">Iniciar</button>
            <a href="<?php echo base_url();?>/evpanel/login/recuperar_2" style="text-decoration: none;" class="btn btn-warning btn-block">Recuperar Contraseña</a>
          </div>
          <div class="clearfix"></div>
          <div class="separator">
            <div class="clearfix"></div>
            <br />
          </div>
        </form>
      </section>
    </div>
  </div>
</div>
