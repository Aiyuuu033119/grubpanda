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
            <input class="loginInput text-center" type="password" name="password" id="oldPassword" required="_required" placeholder="Old Password" style="padding: 12px 20px" />
          </div>
          <div class="form-group mb-3">
            <input class="loginPass text-center" type="password" name="password" id="newPassword" required="_required" placeholder="New Password" style="padding: 12px 20px" />
          </div>
          <div class="form-group mb-3">
            <input class="loginPass text-center" type="password" name="password" id="confirmPassword" required="_required" placeholder="Confirm Password" style="padding: 12px 20px" />
          </div>
          <div class="form-group form-button mt-3 mb-3" style="text-align:center">
            <input type="submit" name="submit" id="submit" class="form-submit signin__button" value="Confirm" style="width: 100%" />
          </div>
          <p class="text-center cancel__button" style="padding-bottom: 10px; color: #649E41; width: 100%; cursor: pointer">Cancel</h2>
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

    $('.cancel__button').on('click', function(e) {
      e.preventDefault();
      window.location.href = "<?php echo base_url() ?>auth/login"
    });


    var attempts = 3;

    $('.signin__button').on('click', function(e) {
      e.preventDefault();

      if (attempts == 0) {
        $('#remind-modal h4').text('REMINDER!');
        $('.remind-text').text('Maximum number of attempts has been reached');
        modalOpen($('#remind-modal'));
        return false;
      }

      var username = $('#username').val();
      var oldPassword = $('#oldPassword').val();
      var newPassword = $('#newPassword').val();
      var confirmPassword = $('#confirmPassword').val();

      var isValid = false;

      if (oldPassword == '' && newPassword == '' && confirmPassword == '') {
        $('#username').attr('placeholder', 'Required Username')
        $('#oldPassword').attr('placeholder', 'Required Old Password')
        $('#newPassword').attr('placeholder', 'Required New Password')
        $('#confirmPassword').attr('placeholder', 'Required Confirm Password')
        isValid = false;
      } else {
        isValid = true;
      }

      if (username == '') {
        $('#oldPassword').attr('placeholder', 'Required Username')
        isValid = false;
      }

      if (oldPassword == '') {
        $('#oldPassword').attr('placeholder', 'Required Old Password')
        isValid = false;
      }

      if (newPassword == '') {
        $('#newPassword').attr('placeholder', 'Required New Password')
        isValid = false;
      }

      if (confirmPassword == '') {
        $('#confirmPassword').attr('placeholder', 'Required Confirm Password')
        isValid = false;
      } else if (confirmPassword != '') {
        if (confirmPassword.length < 8) {
          $('#confirmPassword').val('')
          $('#confirmPassword').attr('placeholder', 'Atleast Maximum of 8 Characters')
          isValid = false;
        } else if (confirmPassword != newPassword) {
          $('#confirmPassword').val('')
          $('#confirmPassword').attr('placeholder', "Unmatched Fields")
          isValid = false;
        }
      }

      if (isValid) {
        var data = new FormData();

        data.append('oldpassword', oldPassword);
        data.append('password', newPassword);
        data.append('username', username);

        $.ajax({
          url: '<?php echo base_url() ?>auth/reset',
          data: data,
          type: "POST",
          contentType: false,
          processData: false,
          success: function(data) {
            var json = JSON.parse(data);

            if (json.msg == 'success') {
              $('#success-modal h4').text('SUCESSFUL!');
              $('.success-text').text('You have successfully changed your password!');
              modalOpen($('#success-modal'))
              $('#username').val('');
              $('#oldPassword').val('');
              $('#newPassword').val('');
              $('#confirmPassword').val('');
            } else if (json.msg == 'invalid') {
              $('#remind-modal h4').text('REMINDER!');
              $('.remind-text').text('Old Password Incorrect');
              modalOpen($('#remind-modal'));
              $('#oldPassword').val('');
              attempts--;
            }

          }
        });
      }

    });

    $('.success-btn').on('click', function(e) {
      window.location.href = "<?php echo base_url() ?>auth/login"
    })

  });
</script>

<?php
$this->load->view('application/include/footer');
?>