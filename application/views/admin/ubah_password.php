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
          <?php echo $this->session->flashdata('notif'); ?>
          <?php $this->load->view('admin/breadcrum'); ?>
          <!-- Card stats -->
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">

          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0"></h3>
            </div>
            <!-- Light table -->
            <div class="card-body">
              <div class="row">
                
                <div class="col-6">
                  <form action="<?=site_url('akses/doUbahPassword/'.$id_user)?>" method="POST" role="form" enctype="multipart/form-data">
                  Isi format dengan mengisi password baru dan password lama dengan benar
                  <div class="form-group mt-3">
                    <label class="small">Password Lama</label>
                    <input type="password" name="password_lama" class="form-control" required="required">
                  </div>
                  <div class="form-group">
                    <label class="small">Password Baru</label>
                    <input type="password" name="password_baru" class="form-control" required="required">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                  </div>
                  </form>
                </div>
                
                <div class="col-6">
                  
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      

      <?php $this->load->view('admin/footer'); ?>
   