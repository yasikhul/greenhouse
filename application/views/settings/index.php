  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper pt-4">
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('notifikasi'); ?>"></div>
      <!-- Main content -->
      <div class="content mt-5">
          <div class="container">
              <!-- FUZZY SET FOR TEMPERATURE -->
              <div class="row">
                  <div class="col-lg-12 mb-4">
                      <h1 class="text-center">Fuzzy Sukamoto Set</h1>
                  </div>
              </div>
              <?php foreach ($temp_db as $key) { ?>
                  <form action="<?= base_url() ?>csettings/updatefuzzytemp" method="POST">
                      <div class="row mb-5">
                          <div class="col-lg-12">
                              <div class="card card-success card-outline">
                                  <div class="card-header">
                                      <h5 class="card-title m-0">Fuzzzy set Temperature</h5>
                                  </div>
                                  <div class="card-body">
                                      <div class="row">
                                          <div class="col-lg-4">
                                              <div class="card card-primary">
                                                  <div class="card-header">
                                                      <h3 class="card-title">Dingin</h3>
                                                  </div>
                                                  <div class="card-body">
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">Temperature Dingin</label>
                                                          <select class="custom-select" name="temp_dingin" required>
                                                              <option value="">--- Select ---</option>
                                                              <?php
                                                                foreach ($temp_set as $temp) {
                                                                    if ($temp == $key->dingin) {
                                                                        $select = "selected";
                                                                    } else {
                                                                        $select = "";
                                                                    }
                                                                ?>
                                                                  <option <?= $select ?> value="<?= $temp ?>"><?= $temp ?>&deg; Celcius</option>
                                                              <?php }
                                                                ?>
                                                          </select>
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">Durasi Kipas</label>
                                                          <select class="custom-select" name="durasi_dingin" required>
                                                              <option value="">--- Select ---</option>
                                                              <?php
                                                                foreach ($durasi_kipas as $durasi) {
                                                                    if ($durasi == $key->durasi_dingin) {
                                                                        $select = "selected";
                                                                    } else {
                                                                        $select = "";
                                                                    }
                                                                ?>
                                                                  <option <?= $select ?> value="<?= $durasi ?>"><?= $durasi ?> Menit</option>
                                                              <?php }
                                                                ?>
                                                          </select>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-4">
                                              <div class="card card-warning">
                                                  <div class="card-header">
                                                      <h3 class="card-title">Sedang</h3>
                                                  </div>
                                                  <div class="card-body">
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">Temperature Sedang</label>
                                                          <select class="custom-select" name="temp_sedang" required>
                                                              <option value="">--- Select ---</option>
                                                              <?php
                                                                foreach ($temp_set as $temp) {
                                                                    if ($temp == $key->sedang) {
                                                                        $select = "selected";
                                                                    } else {
                                                                        $select = "";
                                                                    }
                                                                ?>

                                                                  <option <?= $select ?> value="<?= $temp ?>"><?= $temp ?>&deg; Celcius</option>
                                                              <?php }
                                                                ?>

                                                          </select>
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">Durasi Kipas</label>
                                                          <select class="custom-select" name="durasi_sedang" required>
                                                              <option value="">--- Select ---</option>
                                                              <?php
                                                                foreach ($durasi_kipas as $durasi) {
                                                                    if ($durasi == $key->durasi_sedang) {
                                                                        $select = "selected";
                                                                    } else {
                                                                        $select = "";
                                                                    }
                                                                ?>
                                                                  <option <?= $select ?> value="<?= $durasi ?>"><?= $durasi ?> Menit</option>
                                                              <?php }
                                                                ?>
                                                          </select>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-4">
                                              <div class="card card-danger">
                                                  <div class="card-header">
                                                      <h3 class="card-title">Panas</h3>
                                                  </div>
                                                  <div class="card-body">
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">Temperature Panas</label>
                                                          <select class="custom-select" name="temp_panas" required>
                                                              <option value="">--- Select ---</option>
                                                              <?php
                                                                foreach ($temp_set as $temp) {
                                                                    if ($temp == $key->panas) {
                                                                        $select = "selected";
                                                                    } else {
                                                                        $select = "";
                                                                    }
                                                                ?>

                                                                  <option <?= $select ?> value="<?= $temp ?>"><?= $temp ?>&deg; Celcius</option>
                                                              <?php }
                                                                ?>
                                                          </select>
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">Durasi Kipas</label>
                                                          <select class="custom-select" name="durasi_panas" required>
                                                              <option value="">--- Select ---</option>
                                                              <?php
                                                                foreach ($durasi_kipas as $durasi) {
                                                                    if ($durasi == $key->durasi_panas) {
                                                                        $select = "selected";
                                                                    } else {
                                                                        $select = "";
                                                                    }
                                                                ?>
                                                                  <option <?= $select ?> value="<?= $durasi ?>"><?= $durasi ?> Menit</option>
                                                              <?php }
                                                                ?>
                                                          </select>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-lg-2">
                                              <button type="submit" class="btn btn-success">Save Configuration</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
              <?php } ?>
              <!-- FUZZY SET FOR PH -->
              <?php foreach ($ph_db as $key) { ?>
                  <form action="<?= base_url() ?>csettings/updatefuzzyph" method="POST">
                      <div class="row mb-4">
                          <div class="col-lg-12">
                              <div class="card card-warning card-outline">
                                  <div class="card-header">
                                      <h5 class="card-title m-0">Fuzzy set PH Level</h5>
                                  </div>
                                  <div class="card-body">
                                      <div class="row">
                                          <div class="col-lg-4">
                                              <div class="card card-success">
                                                  <div class="card-header">
                                                      <h3 class="card-title">Rendah</h3>
                                                  </div>
                                                  <div class="card-body">
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">PH Rendah</label>
                                                          <select class="custom-select" name="ph_rendah" required>
                                                              <option value="">--- Select ---</option>
                                                              <?php
                                                                foreach ($ph_set as $ph) {
                                                                    if ($ph == $key->rendah) {
                                                                        $select = "selected";
                                                                    } else {
                                                                        $select = "";
                                                                    }
                                                                ?>
                                                                  <option <?= $select ?> value="<?= $ph ?>"><?= $ph ?></option>
                                                              <?php }
                                                                ?>
                                                          </select>
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">Durasi Pompa</label>
                                                          <select class="custom-select" name="durasi_rendah" required>
                                                              <option value="">--- Select ---</option>
                                                              <?php
                                                                foreach ($durasi_pompa as $durasi) {
                                                                    if ($durasi == $key->durasi_rendah) {
                                                                        $select = "selected";
                                                                    } else {
                                                                        $select = "";
                                                                    }
                                                                ?>
                                                                  <option <?= $select ?> value="<?= $durasi ?>"><?= $durasi ?> Menit</option>
                                                              <?php }
                                                                ?>
                                                          </select>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-4">
                                              <div class="card card-warning">
                                                  <div class="card-header">
                                                      <h3 class="card-title">Sedang</h3>
                                                  </div>
                                                  <div class="card-body">
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">PH Sedang</label>
                                                          <select class="custom-select" name="ph_sedang" required>
                                                              <option value="">--- Select ---</option>
                                                              <?php
                                                                foreach ($ph_set as $ph) {
                                                                    if ($ph == $key->sedang) {
                                                                        $select = "selected";
                                                                    } else {
                                                                        $select = "";
                                                                    }
                                                                ?>
                                                                  <option <?= $select ?> value="<?= $ph ?>"><?= $ph ?></option>
                                                              <?php }
                                                                ?>
                                                          </select>
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">Durasi Pompa</label>
                                                          <select class="custom-select" name="durasi_sedang" required>
                                                              <option value="">--- Select ---</option>
                                                              <?php
                                                                foreach ($durasi_pompa as $durasi) {
                                                                    if ($durasi == $key->durasi_sedang) {
                                                                        $select = "selected";
                                                                    } else {
                                                                        $select = "";
                                                                    }
                                                                ?>
                                                                  <option <?= $select ?> value="<?= $durasi ?>"><?= $durasi ?> Menit</option>
                                                              <?php }
                                                                ?>
                                                          </select>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-4">
                                              <div class="card card-danger">
                                                  <div class="card-header">
                                                      <h3 class="card-title">Tinggi</h3>
                                                  </div>
                                                  <div class="card-body">
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">PH tinggi</label>
                                                          <select class="custom-select" name="ph_tinggi" required>
                                                              <option value="">--- Select ---</option>
                                                              <?php
                                                                foreach ($ph_set as $ph) {
                                                                    if ($ph == $key->tinggi) {
                                                                        $select = "selected";
                                                                    } else {
                                                                        $select = "";
                                                                    }
                                                                ?>
                                                                  <option <?= $select ?> value="<?= $ph ?>"><?= $ph ?></option>
                                                              <?php }
                                                                ?>
                                                          </select>
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">Durasi Pompa</label>
                                                          <select class="custom-select" name="durasi_tinggi" required>
                                                              <option value="">--- Select ---</option>
                                                              <?php
                                                                foreach ($durasi_pompa as $durasi) {
                                                                    if ($durasi == $key->durasi_tinggi) {
                                                                        $select = "selected";
                                                                    } else {
                                                                        $select = "";
                                                                    }
                                                                ?>
                                                                  <option <?= $select ?> value="<?= $durasi ?>"><?= $durasi ?> Menit</option>
                                                              <?php }
                                                                ?>
                                                          </select>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-lg-2">
                                              <button type="submit" class="btn btn-primary">Save Configuration</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
              <?php } ?>
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
  </div>