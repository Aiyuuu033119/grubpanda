<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GrubPanda | Login</title>

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
              <input type="submit" name="submit" id="submit" class="form-submit signin__button" value="Submit" style="width: 100%" />
            </div>
          </form>
        </div>
      </div>
    </div>

    <?php
      $this->load->view('application/include/modal-success');
      $this->load->view('application/include/modal-error');
      $this->load->view('application/include/modal-remind');
    ?>

  </div>

  <script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/dist/js/action.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  </script>
  <script>
    $(document).ready(function() {

      <?php
        $this->load->view('application/service/modal');
      ?>

      var attempts = 3;

      $('.signin__button').on('click', function(e) {
        e.preventDefault();

        if(attempts==0){
          $('#remind-modal h4').text('REMINDER!');
          $('.remind-text').text('Maximum number of attempts has been reached');
          modalOpen($('#remind-modal'));
          return false;
        }

        var email = $('#email').val();
        var password = $('#password').val();

        var isValid = false;

        if(email==''&&password=='') {
          $('#email').attr('placeholder', 'Required Email')
          $('#password').attr('placeholder', 'Required Password')
          isValid = false;
        }else {
          isValid = true;
        }

        if(email==''){
          $('#email').attr('placeholder', 'Required Email')
          isValid = false;
        }

        if(password==''){
          $('#password').attr('placeholder', 'Required Password')
          isValid = false;
        }
        
        if(isValid){
          var data = new FormData();

          data.append('email', email);
          data.append('password', password);

          $.ajax({
            url: '<?php echo base_url() ?>auth/userLogin',
            data: data,
            type: "POST",
            contentType: false,
            processData: false,
            success: function(data) {
              var json = JSON.parse(data);

              if(json.msg == 'success'){
                $('#success-modal h4').text('SUCESSFUL!');
                $('.success-text').text('Welcome to GrubPanda!');
                modalOpen($('#success-modal'));
                $('#email').val('');
                $('#password').val('');
              } else if(json.msg == 'invalid'){
                $('#remind-modal h4').text('REMINDER!');
                $('.remind-text').text('The Email/Password is Incorrect!');
                modalOpen($('#remind-modal'));
                $('#email').val('');
                $('#password').val('');
                attempts--;
              } else {
                $('#error-modal h4').text('ERROR!');
                $('.error-text').text('There is error on the server');
                modalOpen($('#error-modal'));
              }

            }
          });
        }

      });

    });
  </script>
</body>

</html>