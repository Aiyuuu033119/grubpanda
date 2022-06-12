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
          <div>
            <a style="padding: 0.75rem 1rem" class="btn btn-sm btn-neutral add-modal"><i class="fas fa-plus"></i>&nbsp;Add</a>
            <a href="<?php echo base_url()?>employee/archiveList" style="padding: 0.75rem 1rem; color: #525f7f" class="btn btn-sm btn-neutral"><i class="fas fa-sync"></i>&nbsp;Archive</a>
          </div>
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

  <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true" style="z-index:10001">
    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
      <div class="modal-content ">
        <div class="modal-body p-0">
          <div class="card bg-secondary border-0 mb-0 ">
            <div class="card-header px-lg-4 bg-transparent" style="display: flex;justify-content: space-between;align-items: center;">
              <div class="text-muted">
                <h2 class="mb-0 " style="font-family:'Poppins'">Add New Employee</h2>
              </div>
              <button type="button" class="close add-close-modal" data-dismiss="modal-form" aria-label="Close">
                <span aria-hidden="true" class="">×</span>
              </button>
            </div>
            <div class="card-body px-lg-4 pt-4 pb-4">
              <div class="row">
                <div class="col-lg-6 mb-2">
                  <div class="form-group mb-0">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-id-card"></i>
                        </span>
                      </div>
                      <input class="form-control employee-no" placeholder="Employee No." type="text">
                    </div>
                  </div>
                  <span><small class="employee-no-error text-red">&nbsp</small></span>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group mb-0">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-user"></i>
                        </span>
                      </div>
                      <input class="form-control last-name" placeholder="Last Name" type="text">
                    </div>
                  </div>
                  <span><small class="last-name-error text-red">&nbsp</small></span>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group mb-0">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-user"></i>
                        </span>
                      </div>
                      <input class="form-control first-name" placeholder="First Name" type="text">
                    </div>
                  </div>
                  <span><small class="first-name-error text-red">&nbsp</small></span>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group mb-0">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-user"></i>
                        </span>
                      </div>
                      <input class="form-control middle-name" placeholder="Middle Name" type="text">
                    </div>
                  </div>
                  <span><small class="middle-name-error text-red">&nbsp</small></span>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group mb-0">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-calendar"></i>
                        </span>
                      </div>
                      <input class="form-control age" placeholder="Age" type="text">
                    </div>
                  </div>
                  <span><small class="age-error text-red">&nbsp</small></span>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group mb-0">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-venus-mars"></i>
                        </span>
                      </div>
                      <input class="form-control sex" placeholder="Sex" type="text">
                    </div>
                  </div>
                  <span><small class="sex-error text-red">&nbsp</small></span>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group mb-0">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-phone"></i>
                        </span>
                      </div>
                      <input class="form-control contact" placeholder="Contact No." type="text">
                    </div>
                  </div>
                  <span><small class="contact-error text-red">&nbsp</small></span>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group mb-0">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-map-marker-alt"></i>
                        </span>
                      </div>
                      <input class="form-control address" placeholder="Full Address" type="text">
                    </div>
                  </div>
                  <span><small class="address-error text-red">&nbsp</small></span>
                </div>
              </div>
              <div class="text-right">
                <button type="button" class="btn btn-link text-black ml-auto close-modal" data-dismiss="modal-form">Close</button>
                <button type="button" class="btn btn-primary add-btn ">Add</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-form-edit" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true" style="z-index:10001">
    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
      <div class="modal-content ">
        <div class="modal-body p-0">
          <div class="card bg-secondary border-0 mb-0 ">
            <div class="card-header px-lg-4 bg-transparent" style="display: flex;justify-content: space-between;align-items: center;">
              <div class="text-muted">
                <h2 class="mb-0 " style="font-family:'Poppins'">Edit Employee</h2>
              </div>
              <button type="button" class="close edit-close-modal" data-dismiss="modal-form" aria-label="Close">
                <span aria-hidden="true" class="">×</span>
              </button>
            </div>
            <div class="card-body px-lg-4 pt-4 pb-4">
              <div class="row">
                <div class="col-lg-6 mb-2">
                  <div class="form-group mb-0">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-id-card"></i>
                        </span>
                      </div>
                      <input class="form-control employee-no-edit" placeholder="Employee No." type="text">
                    </div>
                  </div>
                  <span><small class="employee-no-edit-error text-red">&nbsp</small></span>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group mb-0">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-user"></i>
                        </span>
                      </div>
                      <input class="form-control last-name-edit" placeholder="Last Name" type="text">
                    </div>
                  </div>
                  <span><small class="last-name-edit-error text-red">&nbsp</small></span>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group mb-0">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-user"></i>
                        </span>
                      </div>
                      <input class="form-control first-name-edit" placeholder="First Name" type="text">
                    </div>
                  </div>
                  <span><small class="first-name-edit-error text-red">&nbsp</small></span>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group mb-0">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-user"></i>
                        </span>
                      </div>
                      <input class="form-control middle-name-edit" placeholder="Middle Name" type="text">
                    </div>
                  </div>
                  <span><small class="middle-name-edit-error text-red">&nbsp</small></span>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group mb-0">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-calendar"></i>
                        </span>
                      </div>
                      <input class="form-control age-edit" placeholder="Age" type="text">
                    </div>
                  </div>
                  <span><small class="age-edit-error text-red">&nbsp</small></span>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group mb-0">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-venus-mars"></i>
                        </span>
                      </div>
                      <input class="form-control sex-edit" placeholder="Sex" type="text">
                    </div>
                  </div>
                  <span><small class="sex-edit-error text-red">&nbsp</small></span>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group mb-0">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-phone"></i>
                        </span>
                      </div>
                      <input class="form-control contact-edit" placeholder="Contact No." type="text">
                    </div>
                  </div>
                  <span><small class="contact-edit-error text-red">&nbsp</small></span>
                </div>
                <div class="col-lg-6 mb-2">
                  <div class="form-group mb-0">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-map-marker-alt"></i>
                        </span>
                      </div>
                      <input class="form-control address-edit" placeholder="Full Address" type="text">
                    </div>
                  </div>
                  <span><small class="address-edit-error text-red">&nbsp</small></span>
                </div>
              </div>
              <div class="text-right">
                <button type="button" class="btn btn-link text-black ml-auto close-modal" data-dismiss="modal-form-edit">Close</button>
                <button type="button" class="btn btn-primary edit-record-btn ">Update</button>
              </div>
            </div>
          </div>
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

      url = '<?php echo base_url() ?>employee/list/'

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
                // status +
                '<a style="color: #525F7F" class="archive-btn icons-container" id="' + element.id + '"><i class="fas fa-sync icons-btn "></i></a>' +
                '<a class="edit-btn icons-container" data-class-name="' + element.class_name + '" data-section="' + element.section_id + '" id="' + element.id +
                '"><i class="fas fa-pencil-alt icons-btn "></i></a>' +
                '<a class="remove-btn icons-container" id="' + element.id +
                '"><i class="fas fa-trash icons-btn "></i></a>' +
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

    $('.add-modal').on('click', function() {
      modalOpen($('#modal-form'));
    });

    $('.add-close-modal').on('click', function() {
      $('input').val('');
      $('.text-red').html('&nbsp;');
      modalClose($('#modal-form'));
    });

    $('button.close-modal').on('click', function() {
      $('input').val('');
      $('.text-red').html('&nbsp;');
    });

    $(".add-btn").on('click', function() {
      var employee_no = $('.employee-no').val();
      var last_name = $('.last-name').val();
      var first_name = $('.first-name').val();
      var middle_name = $('.middle-name').val();
      var age = $('.age').val();
      var sex = $('.sex').val();
      var contact = $('.contact').val();
      var address = $('.address').val();

      var hasError = null;

      if (employee_no == '' && last_name == '' && first_name == '' && middle_name == '' && age == '' && sex == '' && contact == '' && address == '') {
        $('.employee-no-error').text('Employee Number*')
        $('.last-name-error').text('Last Name*')
        $('.first-name-error').text('First Name*')
        $('.middle-name-error').text('Middle Name*')
        $('.age-error').text('Age*')
        $('.sex-error').text('Sex*')
        $('.contact-error').text('Contact Number*')
        $('.address-error').text('Address*')
        hasError = true;
      } else {
        $('.employee-no-error').html("&nbsp;")
        $('.last-name-error').html("&nbsp;")
        $('.first-name-error').html("&nbsp;")
        $('.middle-name-error').html("&nbsp;")
        $('.age-error').html("&nbsp;")
        $('.sex-error').html("&nbsp;")
        $('.contact-error').html("&nbsp;")
        $('.address-error').html("&nbsp;")
        hasError = false;
      }

      if (employee_no == '') {
        $('.employee-no-error').text('Employee Number*')
        hasError = true;
      }
      if (last_name == '') {
        $('.last-name-error').text('Last Name*')
        hasError = true;
      }
      if (first_name == '') {
        $('.first-name-error').text('First Name*')
        hasError = true;
      }
      if (middle_name == '') {
        $('.middle-name-error').text('Middle Name*')
        hasError = true;
      }
      if (age == '') {
        $('.age-error').text('Age*')
        hasError = true;
      }
      if (sex == '') {
        $('.sex-error').text('Sex*')
        hasError = true;
      }
      if (contact == '') {
        $('.contact-error').text('Contact Number*')
        hasError = true;
      }
      if (address == '') {
        $('.address-error').text('Address*')
        hasError = true;
      }


      if (hasError == false) {
        var data = new FormData();
        data.append('employee_no', employee_no);
        data.append('last_name', last_name);
        data.append('first_name', first_name);
        data.append('middle_name', middle_name);
        data.append('age', age);
        data.append('sex', sex);
        data.append('contact', contact);
        data.append('address', address);

        $.ajax({
          url: "<?php echo base_url() ?>employee/add",
          data: data,
          type: "POST",
          contentType: false,
          processData: false,
          success: function(data) {

            var json = JSON.parse(data);

            modalClose($('#modal-form'));

            if (json.msg == 'success') {
              list();
              $('.success-text').text('Employee Added!');
              modalOpen($('#success-modal'));
              $('input').val('');
              $('.text-red').html('&nbsp;');
            } else if (json.msg == 'error') {
              $('.error-text').text('There is error on the server');
              modalOpen($('#error-modal'));
            }
          }
        });
      }
    });

    $(document).on('click', '.edit-btn', function() {
      var currentRow = $(this).closest("tr");

      $('.employee-no-edit').val(currentRow.find("th:eq(0)").text());
      $('.last-name-edit').val(currentRow.find("td:eq(0)").text());
      $('.first-name-edit').val(currentRow.find("td:eq(1)").text());
      $('.middle-name-edit').val(currentRow.find("td:eq(2)").text());
      $('.age-edit').val(currentRow.find("td:eq(3)").text());
      $('.sex-edit').val(currentRow.find("td:eq(4)").text());
      $('.contact-edit').val(currentRow.find("td:eq(5)").text());
      $('.address-edit').val(currentRow.find("td:eq(6)").text());
      $('.edit-record-btn').attr('data-relay', $(this).attr('id'));

      modalOpen($('#modal-form-edit'));
    });

    $('.edit-close-modal').on('click', function() {
      $('input').val('');
      $('.text-red').html('&nbsp;');
      modalClose($('#modal-form-edit'));
    });

    $(".edit-record-btn").on('click', function() {
      var employee_no = $('.employee-no-edit').val();
      var last_name = $('.last-name-edit').val();
      var first_name = $('.first-name-edit').val();
      var middle_name = $('.middle-name-edit').val();
      var age = $('.age-edit').val();
      var sex = $('.sex-edit').val();
      var contact = $('.contact-edit').val();
      var address = $('.address-edit').val();

      var hasError = null;

      if (employee_no == '' && last_name == '' && first_name == '' && middle_name == '' && age == '' && sex == '' && contact == '' && address == '') {
        $('.employee-no-edit-error').text('Employee Number*')
        $('.last-name-edit-error').text('Last Name*')
        $('.first-name-edit-error').text('First Name*')
        $('.middle-name-edit-error').text('Middle Name*')
        $('.age-edit-error').text('Age*')
        $('.sex-edit-error').text('Sex*')
        $('.contact-edit-error').text('Contact Number*')
        $('.address-edit-error').text('Address*')
        hasError = true;
      } else {
        $('.employee-no-edit-error').html("&nbsp;")
        $('.last-name-edit-error').html("&nbsp;")
        $('.first-name-edit-error').html("&nbsp;")
        $('.middle-name-edit-error').html("&nbsp;")
        $('.age-edit-error').html("&nbsp;")
        $('.sex-edit-error').html("&nbsp;")
        $('.contact-edit-error').html("&nbsp;")
        $('.address-edit-error').html("&nbsp;")
        hasError = false;
      }

      if (employee_no == '') {
        $('.employee-no-edit-error').text('Employee Number*')
        hasError = true;
      }
      if (last_name == '') {
        $('.last-name-edit-error').text('Last Name*')
        hasError = true;
      }
      if (first_name == '') {
        $('.first-name-edit-error').text('First Name*')
        hasError = true;
      }
      if (middle_name == '') {
        $('.middle-name-edit-error').text('Middle Name*')
        hasError = true;
      }
      if (age == '') {
        $('.age-edit-error').text('Age*')
        hasError = true;
      }
      if (sex == '') {
        $('.sex-edit-error').text('Sex*')
        hasError = true;
      }
      if (contact == '') {
        $('.contact-edit-error').text('Contact Number*')
        hasError = true;
      }
      if (address == '') {
        $('.address-edit-error').text('Address*')
        hasError = true;
      }


      if (hasError == false) {
        var data = new FormData();
        data.append('employee_no', employee_no);
        data.append('last_name', last_name);
        data.append('first_name', first_name);
        data.append('middle_name', middle_name);
        data.append('age', age);
        data.append('sex', sex);
        data.append('contact', contact);
        data.append('address', address);
        data.append('address', address);
        data.append('id', $(this).attr('data-relay'));

        $.ajax({
          url: "<?php echo base_url() ?>employee/edit",
          data: data,
          type: "POST",
          contentType: false,
          processData: false,
          success: function(data) {

            var json = JSON.parse(data);

            modalClose($('#modal-form-edit'));

            if (json.msg == 'success') {
              list();
              $('.success-text').text('Employee Record Updated!');
              modalOpen($('#success-modal'));
              $('input').val('');
              $('.text-red').html('&nbsp;');
            } else if (json.msg == 'error') {
              $('.error-text').text('There is error on the server');
              modalOpen($('#error-modal'));
            }
          }
        });
      }
    });

    $(document).on('click', '.remove-btn', function() {
      $('.remind-text').text('Are you sure you want to delete this record?');
      $('#remind-modal button.btn.btn-primary.close-modal').removeClass('archive-record-btn')
      $('#remind-modal button.btn.btn-primary.close-modal').addClass('delete-record-btn')
      $('.delete-record-btn').attr('data-relay', $(this).attr('id'))
      modalOpen($('#remind-modal'));
    });

    $(document).on('click', '.delete-record-btn', function() {

      var data = new FormData();
      data.append('id', $(this).attr('data-relay'));

      $.ajax({
        url: "<?php echo base_url() ?>employee/delete",
        data: data,
        type: "POST",
        contentType: false,
        processData: false,
        success: function(data) {

          var json = JSON.parse(data);

          modalClose($('#remind-modal'));

          if (json.msg == 'success') {
            list();
            $('.success-text').text('Employee Record Deleted!');
            modalOpen($('#success-modal'));
          } else if (json.msg == 'error') {
            $('.error-text').text('There is error on the server');
            modalOpen($('#error-modal'));
          }
        }
      });

    });

    $(document).on('click', '.archive-btn', function() {
      $('.remind-text').text('Are you sure you want to move this record in the archives?');
      $('#remind-modal button.btn.btn-primary.close-modal').removeClass('delete-record-btn')
      $('#remind-modal button.btn.btn-primary.close-modal').addClass('archive-record-btn')
      $('.archive-record-btn').attr('data-relay', $(this).attr('id'))
      modalOpen($('#remind-modal'));
    });

    $(document).on('click', '.archive-record-btn', function() {

      var data = new FormData();
      data.append('id', $(this).attr('data-relay'));

      $.ajax({
        url: "<?php echo base_url() ?>employee/archive",
        data: data,
        type: "POST",
        contentType: false,
        processData: false,
        success: function(data) {

          var json = JSON.parse(data);

          modalClose($('#remind-modal'));

          if (json.msg == 'success') {
            list();
            $('.success-text').text('Employee Record Archived!');
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