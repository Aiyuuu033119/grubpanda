<nav class="navbar navbar-light py-2 px-5" style="box-shadow: 0px 0px 9px -1px rgb(0 0 0 / 30%); background: #75b948;">
  <a class="navbar-brand d-flex justify-content-center align-items-center" href="<?php echo base_url() ?>auth/landing">
    <img src="<?php echo base_url(); ?>assets/img/dist/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" style="width: 60px; height: 45px;">
    <h2 class="ml-2 text-center" style="color: #fff;">GrubPanda</h2>
  </a>

  <div class="form-inline">
    <?php 
      if($title == 'Home'):
    ?>
    <a type="submit" href="<?php echo base_url() ?>auth/login" name="submit" id="submit" class="btn btn-outline-white" value="Login" style="width: 100%; font-weight:100; padding: 12px 39px;">Login</a>
    <?php
      endif;
      if($title == 'Login'):
    ?>
    <a type="submit" href="#" name="submit" id="submit" class="btn btn-outline-white" value="Login" style="width: 100%; font-weight:100; padding: 12px 39px;">Sign Up</a>
    <?php
      endif;
    ?>
  </div>
</nav>