<?php
$this->load->view('application/include/header');
$this->load->view('application/include/navbar');
?>

<div class="landing">
  <div>
    <h1 class="pb-2" style="font-size: 30px;">it's the food, delivered</h1>
  </div>
  <div class="container-address">
    <div class="address-content">
      <div class="address-form px-0 py-0">
        <form method="POST" class="register-form" id="login-form">
          <div class="form-group form-button form-delivery">
            <input class="addressInput" type="text" name="address" id="address" required="_required" placeholder="Address" style="padding: 1rem 20px" />
            <div class="addressButtons">
              <input type="submit" name="submit" id="submit" class="form-submit signin__button mt-0" value="Delivery" />
              <span class="px-2">or</span>
              <input type="submit" name="submit" id="submit" class="form-submit signin__button mt-0" value="Pick-Up" />
            </div>
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

  });
</script>

<?php
$this->load->view('application/include/footer');
?>