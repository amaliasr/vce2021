 <?php $this->load->view('login/header'); ?>
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <?php echo $this->session->flashdata('notif'); ?>
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <h3>Registrasi</h3>
              </div>
              <form action="<?=site_url('akseslog/doregister');?>" method="POST" role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input class="form-control" placeholder="Nama Lengkap" type="text" name="nama_lengkap" required="required">
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email" required="required">
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <select name="var_level" id="input" class="form-control" required="required">
                      <option value="">- Pilih Jenis Akun -</option>
                      <?php foreach ($level_user as $key) { if($key->id_level != 1){?>
                      <option value="<?=$key->var_level ?>"><?=$key->nama_level ?></option>
                      <?php }} ?>
                    </select>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Daftar Sekarang</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   <?php $this->load->view('login/footer'); ?>