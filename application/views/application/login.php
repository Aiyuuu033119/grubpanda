<?php
$this->load->view('application/include/header');
$this->load->view('application/include/navbar');
?>

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
            <input class="loginInput text-center" type="text" name="username" id="username" required="_required" placeholder="Username" style="padding: 12px 20px" />
          </div>
          <div class="form-group mb-3">
            <input class="loginPass text-center" type="password" name="password" id="password" required="_required" placeholder="Password" style="padding: 12px 20px" />
          </div>
          <div class="form-group form-button mt-3" style="text-align:center">
            <input type="submit" name="submit" id="submit" class="form-submit signin__button" value="Login" style="width: 100%" />
          </div>
          <p class="text-center change__button" style="padding-bottom: 10px; color: #649E41; width: 100%; cursor: pointer">Forgot Password</h2>
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
    var user = '';

    $('.change__button').on('click', function(e) {
      e.preventDefault();
      window.location.href = "<?php echo base_url() ?>auth/change"
    });

    $('.signin__button').on('click', function(e) {
      e.preventDefault();

      if (attempts == 0) {
        $('#remind-modal h4').text('REMINDER!');
        $('.remind-text').text('Maximum number of attempts has been reached');
        modalOpen($('#remind-modal'));
        return false;
      }

      var username = $('#username').val();
      var password = $('#password').val();

      var isValid = false;

      if (username == '' && password == '') {
        $('#username').attr('placeholder', 'Required Username')
        $('#password').attr('placeholder', 'Required Password')
        isValid = false;
      } else {
        isValid = true;
      }

      if (username == '') {
        $('#username').attr('placeholder', 'Required Username')
        isValid = false;
      }

      if (password == '') {
        $('#password').attr('placeholder', 'Required Password')
        isValid = false;
      }

      if (isValid) {
        var data = new FormData();

        data.append('username', username);
        data.append('password', password);

        $.ajax({
          url: '<?php echo base_url() ?>auth/userLogin',
          data: data,
          type: "POST",
          contentType: false,
          processData: false,
          success: function(data) {
            var json = JSON.parse(data);

            if (json.msg == 'success') {
              user = username;
              $('#success-modal h4').text('SUCESSFUL!');
              $('.success-text').text('Welcome to GrubPanda!');
              modalOpen($('#success-modal'))
              $('#email').val('');
              $('#password').val('');
            } else if (json.msg == 'invalid') {
              $('#remind-modal h4').text('REMINDER!');
              $('.remind-text').text('Incorrect Username or Password');
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

    $('.success-btn').on('click', function(e) {
      window.location.href = "<?php echo base_url() ?>auth/dashboard/" + user;
    })

    $('button.close-modal').on('click', function() {
      modalClose($('#remind-modal'))
    });


  });
</script>

<?php
$this->load->view('application/include/footer');
?>