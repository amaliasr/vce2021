 <?php $this->load->view('admin/header'); ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php $this->load->view('admin/navbar'); ?>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <?php $this->load->view('admin/breadcrum'); ?>
          <!-- Card stats -->
          <div class="row mb-2">
            <div class="col">
              <form action="<?=site_url('akses')?>" method="POST" role="form" target="_blank">
                <!-- <button target="_blank" type="submit" name="download" class="btn btn-danger"><i class="fa fa-file"></i> Download Laporan PDF</button> -->
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Pelamar</h5>
                      <span class="h2 font-weight-bold mb-0"><?=$jum_pelamar[0]->jumlah ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="fa fa-user"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <!-- <span class="text-success mr-2"><?=$jum_siswa ?></span> -->
                    <!-- <span class="text-nowrap">Since last month</span> -->
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Lowongan</h5>
                      <span class="h2 font-weight-bold mb-0"><?=$jum_lowongan[0]->jumlah ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="fa fa-user"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <!-- <span class="text-success mr-2"><?=$jum_siswa ?></span> -->
                    <!-- <span class="text-nowrap">Since last month</span> -->
                  </p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <?php $this->load->view('admin/footer'); ?>
   