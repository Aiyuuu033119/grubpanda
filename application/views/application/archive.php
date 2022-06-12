<?php
$this->load->view('application/include/header');
$this->load->view('application/include/navbar');
?>

<div class="sign-in">
  <div class="container" style="width: inherit;">
    <div class="signin-content">
      <div class="signin-form">
        <div class="d-flex align-items-center justify-content-between mb-4" style="width: 100%;">
          <h3 class="text-black mb-0 "><?php echo $title ?> List</h3>
          <a href="<?php echo base_url()?>auth/dashboard" style="padding: 0.75rem 1rem; color: #525f7f" class="btn btn-sm btn-neutral"><i class="fas fa-user"></i>&nbsp;Employee</a>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="">
              <tr class="">
                <th class="" scope="col">Employee No.</th>
                <th class="" scope="col" class="text-center">Last Name</th>
                <th class="" scope="col" class="text-center">First Name</th>
                <th class="" scope="col" class="text-center">Middle Name</th>
                <th class="" scope="col" class="text-center">Age</th>
                <th class="" scope="col" class="text-center">Sex</th>
                <th class="" scope="col" class="text-center">Contact No.</th>
                <th class="" scope="col" class="text-center">Address</th>
                <th class="" scope="col" class="text-center" style="text-align: center;">Action</th>
              </tr>
            </thead>
            <tbody class="list">

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <?php
  $this->load->view('application/include/modal-success');
  $this->load->view('application/include/modal-error');
  $this->load->view('application/include/modal-remind');
  $this->load->view('application/include/modal-logout');
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

    list();

    function list() {
      var url = '';

      url = '<?php echo base_url() ?>archive/list/'

      $.ajax({
        url: url,
        type: "post",
        contentType: false,
        processData: false,
        success: function(data) {

          var json = JSON.parse(data);

          console.log(json);
          var html = '';
          var status = '';
          if (json != '') {
            json.forEach(element => {

              html += '<tr>' +
                '<th class="" scope="row">' +
                '<div class="media align-items-center">' +
                '<div class="media-body">' +
                '<span class="name mb-0 text-sm">' + element.employee_no +
                '</span>' +
                '</div>' +
                '</div>' +
                '</th>' +
                '<td class="">' + element.last_name + '</td>' +
                '<td class="">' + element.first_name + '</td>' +
                '<td class="">' + element.middle_name + '</td>' +
                '<td class="">' + element.age + '</td>' +
                '<td class="">' + element.sex + '</td>' +
                '<td class="">' + element.contact + '</td>' +
                '<td class="" style="max-width: 300px;white-space: break-spaces;">' + element.address + '</td>' +
                '<td class="text-center ">' +
                '<a style="color: #525F7F" class="revert-btn icons-container" id="' + element.id + '"><i class="fas fa-undo icons-btn "></i></a>' +
                '</td>'
              '</tr>';
            });
          } else {
            html += '<tr><th class="" style="text-align:center" colspan="9">No Result</th></tr>'
          }

          html += '<tr><th class="" colspan="9" ></th></tr>'
          $('.list').html(html);

        }
      });
    }

    $(document).on('click', '.revert-btn', function() {
      $('.remind-text').text('Are you sure you want to remove this record in the archives?');
      $('#remind-modal button.btn.btn-primary.close-modal').addClass('revert-record-btn')
      $('.revert-record-btn').attr('data-relay', $(this).attr('id'))
      modalOpen($('#remind-modal'));
    });

    $(document).on('click', '.revert-record-btn', function() {

      var data = new FormData();
      data.append('id', $(this).attr('data-relay'));

      $.ajax({
        url: "<?php echo base_url() ?>archive/revert",
        data: data,
        type: "POST",
        contentType: false,
        processData: false,
        success: function(data) {

          var json = JSON.parse(data);

          modalClose($('#remind-modal'));

          if (json.msg == 'success') {
            list();
            $('.success-text').text('Employee Record Removed!');
            modalOpen($('#success-modal'));
          } else if (json.msg == 'error') {
            $('.error-text').text('There is error on the server');
            modalOpen($('#error-modal'));
          }
        }
      });

    });

    $('.logout-session').on('click', function(e) {
      e.preventDefault();
      $('#logout-modal h4').text('REMINDER!');
      $('.logout-text').text('Are you sure you want to logout?!');
      modalOpen($('#logout-modal'))
    })

    $('.yes-btn').on('click', function(e) {
      window.location.href = "<?php echo base_url() ?>auth/userLogout"
      modalClose($('#logout-modal'))
    })

  });
</script>

<?php
$this->load->view('application/include/footer');
?>