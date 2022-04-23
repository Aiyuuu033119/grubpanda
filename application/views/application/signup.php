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
            <input class="loginInput text-center" type="text" name="name" id="name" required="_required" placeholder="Name" style="padding: 12px 20px" />
          </div>
          <div class="form-group mb-3">
            <input class="loginInput text-center" type="email" name="email" id="email" required="_required" placeholder="Email" style="padding: 12px 20px" />
          </div>
          <div class="form-group mb-3">
            <input class="loginInput text-center" type="text" name="contact" id="contact" required="_required" placeholder="Contact Number" style="padding: 12px 20px" />
          </div>
          <div class="form-group mb-3">
            <input class="loginPass text-center" type="password" name="password" id="password" required="_required" placeholder="Password" style="padding: 12px 20px" />
          </div>
          <div class="form-group mb-3">
            <input class="loginPass text-center" type="password" name="con_password" id="con_password" required="_required" placeholder="Confirm Password" style="padding: 12px 20px" />
          </div>
          <div class="form-group form-button" style="text-align:center">
            <input type="submit" name="submit" id="submit" class="form-submit signup__button mt-3" value="Create Account" style="width: 100%" />
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


    $('.signup__button').on('click', function(e) {
      e.preventDefault();

      var name = $('#name').val();
      var email = $('#email').val();
      var contact = $('#contact').val();
      var password = $('#password').val();
      var conpass = $('#con_password').val();

      var isValid = false;

      if (name == '' && email == '' && contact == '' && password == '' && conpass == '') {
        $('#name').attr('placeholder', 'Required Name')
        $('#email').attr('placeholder', 'Required Email')
        $('#contact').attr('placeholder', 'Required Contact Number')
        $('#password').attr('placeholder', 'Required Password')
        $('#con_password').attr('placeholder', 'Required Confirm Password')
        isValid = false;
      } else {
        if(password.length >= 8 && conpass.length >= 8 && conpass == password){
          isValid = true;
        }
      }

      if (name == '') {
        $('#name').attr('placeholder', 'Required Name')
        isValid = false;
      }

      if (email == '') {
        $('#email').attr('placeholder', 'Required Email')
        isValid = false;
      }

      if (contact == '') {
        $('#contact').attr('placeholder', 'Required Contact Number')
        isValid = false;
      }

      if (password == '') {
        $('#password').attr('placeholder', 'Required Password')
        isValid = false;
      } else if (password != '') {
        if (password.length < 8) {
          console.log(password.length);
          $('#password').val('')
          $('#password').attr('placeholder', 'Atleast Maximum of 8 Characters')
          isValid = false;
        }
      }

      if (conpass == '') {
        $('#con_password').attr('placeholder', 'Required Confirm Password')
        isValid = false;
      } else if (conpass != '') {
        if (conpass.length < 8) {
          console.log(conpass.length);
          $('#con_password').val('')
          $('#con_password').attr('placeholder', 'Atleast Maximum of 8 Characters')
          isValid = false;
        } else if(conpass != password) {
          $('#con_password').val('')
          $('#con_password').attr('placeholder', "Confirm Password Does'nt Match")
          isValid = false;
        }
      }

      if (isValid) {

        var data = new FormData();

        data.append('name', name);
        data.append('email', email);
        data.append('contact', contact);
        data.append('password', password);

        $.ajax({
          url: '<?php echo base_url() ?>auth/userSignup',
          data: data,
          type: "POST",
          contentType: false,
          processData: false,
          success: function(data) {
            var json = JSON.parse(data);

            if (json.msg == 'success') {
              $('#success-modal h4').text('SUCESSFUL!');
              $('.success-text').text('Welcome to GrubPanda!');
              modalOpen($('#success-modal'));
              $('#name').val('');
              $('#contact').val('');
              $('#email').val('');
              $('#password').val('');
              $('#con_password').val('');
            } else if (json.msg == 'existed') {
              $('#success-modal h4').text('WARNING!');
              $('.remind-text').text('Email Existed!');
              modalOpen($('#remind-modal'));
              $('#email').val('');
            }  
            else {
              $('#error-modal h4').text('ERROR!');
              $('.error-text').text('There is error on the server');
              modalOpen($('#error-modal'));
            }

          }
        });
      }

    });

    $('.success-btn').on('click', function(e) {
      window.location.href = "<?php echo base_url()?>auth/login"
    })

  });
</script>

<?php
$this->load->view('application/include/footer');
?>