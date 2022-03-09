  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper pt-4">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('notifikasi'); ?>"></div>
    <!-- Main content -->
    <div class="content mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-danger card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Temperature</h5>
              </div>
              <div class="card-body">
                <h1>45 <sup>o</sup>C</h1>
                <a href="#" class="">Suhu Ruangan Saat ini</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-warning card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Water Acid Level</h5>
              </div>
              <div class="card-body">
                <h1>45 <sup>o</sup>C</h1>
                <a href="#" class="">Kadar Asam Air Saat ini</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-success card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Water Basa Level</h5>
              </div>
              <div class="card-body">
                <h1>45 <sup>o</sup>C</h1>
                <a href="#" class="">Kadar Basa Air Saat ini</a>
              </div>
            </div>
          </div>
        </div>
        <!-- FUZZY PARAMETER -->
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fuzzy Set for Fan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Category</th>
                      <th>Value</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Dingin</td>
                      <td>
                        <h5><span class="badge bg-primary">
                            < 25 <sup>o</sup>C
                          </span></h5>
                      </td>
                    </tr>
                    <tr>
                      <td>Sedang</td>
                      <td>
                        <h5><span class="badge bg-warning"> 37 <sup>o</sup>C </span></h5>
                      </td>
                    </tr>
                    <tr>
                      <td>Panas</td>
                      <td>
                        <h5><span class="badge bg-danger">> 37 <sup>o</sup>C </span></h5>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fuzzy Set for Basa Level</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Category</th>
                      <th>Value</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Rendah</td>
                      <td>
                        <h5><span class="badge bg-primary">
                            < 25 <sup>o</sup>C
                          </span></h5>
                      </td>
                    </tr>
                    <tr>
                      <td>Sedang</td>
                      <td>
                        <h5><span class="badge bg-warning"> 37 <sup>o</sup>C </span></h5>
                      </td>
                    </tr>
                    <tr>
                      <td>Tinggi</td>
                      <td>
                        <h5><span class="badge bg-danger">> 37 <sup>o</sup>C </span></h5>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fuzzy Set for Acid Level</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Category</th>
                      <th>Value</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Rendah</td>
                      <td>
                        <h5><span class="badge bg-primary">
                            < 25 <sup>o</sup>C
                          </span></h5>
                      </td>
                    </tr>
                    <tr>
                      <td>Sedang</td>
                      <td>
                        <h5><span class="badge bg-warning"> 37 <sup>o</sup>C </span></h5>
                      </td>
                    </tr>
                    <tr>
                      <td>Tinggi</td>
                      <td>
                        <h5><span class="badge bg-danger">> 37 <sup>o</sup>C </span></h5>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- END FUZZY PARAMETER -->
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-3">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Status Machine</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Fan</td>
                      <td><span class="badge bg-danger">Turn On</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Pump 1 (PH UP)</td>
                      <td><span class="badge bg-warning">Turn On</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Pump 2 (PH UP)</td>
                      <td><span class="badge bg-primary">Turn Off</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>