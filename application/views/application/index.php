<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <title>Schooltify - Verify Email</title>

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login-css/style.css" type="text/css">
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/dist/logo.png">

</head>

<body>

  <nav class="navbar navbar-light py-2 px-5" style="box-shadow: 0px 0px 9px -1px rgb(0 0 0 / 30%); background: #75b948;">
    <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
      <img src="<?php echo base_url(); ?>assets/img/dist/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" style="width: 60px; height: 45px;">
      <h2 class="ml-2 text-center" style="color: #fff;">GrubPanda</h2>
    </a>
    <div class="form-inline">
      <button class="btn btn-outline-white my-2 my-sm-0" type="submit">Sign Up</button>
    </form>
  </nav>

  <div class="sign-in">
    <div class="container">
      <div class="signin-content">
        <div class="signin-form">
          <div style="display: flex;justify-content: center;align-items: center;" class="mb-1">
            <img src="<?php echo base_url(); ?>assets/img/dist/logo.png" alt="sing up image" style="width: 50%;">
          </div>
          <h2 class="form-title text-center" style="padding-bottom: 10px; color: #649E41; width: 100%">GrubPanda</h2>
          <form method="POST" class="register-form" id="login-form">
            <div class="form-group mb-3">
              <input class="loginInput text-center" type="email" name="email" id="email" required="_required" placeholder="Email" style="padding: 12px 20px" />
            </div>
            <div class="form-group mb-3">
              <input class="loginPass text-center" type="password" name="password" id="password" required="_required" placeholder="Password" style="padding: 12px 20px" />
            </div>
            <div class="form-group form-button mt-3" style="text-align:center">
              <input type="submit" name="submit" id="submit" class="form-submit signin__button" value="Submit" style="width: 100%"/>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
      <div class="modal-content bg-gradient-success">
        <div class="modal-body">
          <div class="py-3 text-center">
            <i class="ni ni-fat-remove ni-3x" style="color: #222;"></i>
            <h4 class="heading mt-4" style="color: #222;">Error!</h4>
            <p class="error-caption" style="color: #222;">Please check your credentials!</p>
          </div>
        </div>
        <div class="modal-footer mt-0 pt-0">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Ok, Got it</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="captcha-modal" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
      <div class="modal-content bg-gradient-success">
        <div class="modal-body">
          <div class="pt-3 text-center">
            <h4 class="heading mb-4 error-text d-none" style="color: #ff0000;">Please Verify Yourself!</h4>
            <div class="form-group">
              <div class="g-recaptcha" data-sitekey="6LdlK7seAAAAAIof-pYcODqNnE3OF3Kb5Oi02i4d"></div>
            </div>
          </div>
        </div>
        <div class="modal-footer mt-0 pt-0" style="display: flex; align-items: center; justify-content: center;">
          <button type="button" class="btn btn-primary submit-captcha-btn">Submit</button>
        </div>
      </div>
    </div>
  </div>

  </div>

  <script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/dist/js/action.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  </script>
  <script>
    $(document).ready(function() {

     
    });
  </script>
</body>
</html>