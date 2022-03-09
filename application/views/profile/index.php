  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper pt-4">
      <!-- Main content -->
      <div class="content mt-5">
          <div class="container">
              <div class="flash-data" data-flashdata="<?= $this->session->flashdata('notifikasi'); ?>"></div>
              <div class="flash-data-error" data-flashdataerror="<?= $this->session->flashdata('notifikasiError'); ?>"></div>
              <div class="row justify-content-center">
                  <div class="col-lg-6">
                      <div class="card card-warning card-outline pl-5 pr-5">
                          <div class="card-body text-center">
                              <div class="row justify-content-center">
                                  <col-lg-4>
                                      <h1>
                                          <i class="fas fa-user-alt"></i>
                                      </h1>
                                      <h2 class="border-bottom">Administrator</h2>
                                  </col-lg-4>
                              </div>
                              <?php
                                foreach ($dataadmin as $admin) { ?>
                                  <div class="row justify-content-center">
                                      <col-lg-4>
                                          <table class="table-sm border-0 text-left">
                                              <tr>
                                                  <td><i class="fas fa-user-alt"></i></td>
                                                  <td><?= $admin->name ?></td>
                                              </tr>
                                              <tr>
                                                  <td><i class="fas fa-envelope"></i></td>
                                                  <td><?= $admin->email ?></td>
                                              </tr>
                                          </table>
                                      </col-lg-4>
                                  </div>
                              <?php }
                                ?>
                          </div>
                          <div class="row mb-5 mt-5 justify-content-center">
                              <div class="col-lg-3">
                                  <button class="btn btn-warning btn-block" type="button" data-toggle="modal" data-target="#modal-default"><i class="fas fa-edit"></i> Change</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Modal -->
              <?php
                foreach ($dataadmin as $admin) { ?>
                  <form action="<?= base_url() ?>cprofile/updatedataadmin" method="post">
                      <div class="modal fade" id="modal-default">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="card card-success card-outline pl-5 pr-5">
                                      <div class="card-body text-center">
                                          <div class="row justify-content-center">
                                              <col-lg-4>
                                                  <h1>
                                                      <i class="fas fa-user-alt"></i>
                                                  </h1>
                                                  <h2 class="border-bottom">Administrator</h2>
                                              </col-lg-4>
                                          </div>
                                          <div class="row justify-content-center mt-4">
                                              <col-lg-4>
                                                  <div class="input-group mb-3">
                                                      <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                      </div>
                                                      <input type="text" class="form-control" placeholder="Full Name" value="<?= $admin->name ?>" name="name" required>
                                                  </div>
                                                  <div class="input-group mb-3">
                                                      <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                      </div>
                                                      <input type="email" class="form-control" placeholder="Email" value="<?= $admin->email ?>" name="email" required>
                                                  </div>
                                                  <div class="input-group mb-3">
                                                      <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                      </div>
                                                      <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                                                  </div>
                                                  <div class="input-group input-group-sm mb-4">
                                                      <label class="btn btn-primary active">
                                                          <input type="checkbox" name="options" id="ubahpw" autocomplete="off"> Change Password
                                                      </label>
                                                  </div>
                                                  <div class="input-group mb-3 uye">
                                                      <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                      </div>
                                                      <input type="password" class="form-control pwbaru" id="pwbaru" placeholder="Enter New Password" name="passwordbaru">
                                                  </div>
                                                  <div class="input-group mb-3 uye2">
                                                      <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                      </div>
                                                      <input type="password" class="form-control pwbaru2" id="pwbaru2" placeholder="Re-Enter New Password" name="passwordbaru2">
                                                  </div>
                                              </col-lg-4>
                                          </div>
                                      </div>
                                      <div class="row mb-5 mt-5 justify-content-center">
                                          <div class="col-lg-5">
                                              <button class="btn btn-success btn-block" type="submit"><i class="fa fa-save"></i> Save Changes</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                      </div>
                  </form>
              <?php } ?>
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
  </div>
  <script>
      $(document).ready(function() {
          var x = 0;
          $('.uye').hide();
          $('.uye2').hide();
          $('#pwbaru').removeAttr('required');
          $('#pwbaru2').removeAttr('required');
          $('input[type="checkbox"]').click(function() {
              if ($(this).prop("checked") == true) {
                  x = 1;
              } else if ($(this).prop("checked") == false) {
                  x = 0;
              }
              if (x == 0) {
                  $('.uye').hide();
                  $('.uye2').hide();
                  $('#pwbaru').removeAttr('required');
                  $('#pwbaru2').removeAttr('required');
                  console.log('hide');
              } else {
                  $('.uye').show();
                  $('.uye2').show();
                  $('#pwbaru').attr('required', true);
                  $('#pwbaru2').attr('required', true);
                  console.log('show');
              }
          });
      });
  </script>