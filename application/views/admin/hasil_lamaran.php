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
              <a href="<?=base_url(); ?>akses/download_lamaran"><button type="button" class="btn btn-success">Download List Excel</button></a>
              <button type="button" class="btn btn-primary">Download CV</button>
            </div>
            <!-- Light table -->
            <div class="card-body ">
            <table class="table table-bordered table-responsive" id="dataTable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Email Perlamar</th>
                  <th>Surat Lamaran</th>
                  <th>Waktu Lamar</th>
                  <th>Lowongan</th>
                  <th>CV</th>
                </tr>
              </thead>
              <tbody>
                <?php $a=1;foreach ($lamaran as $key) {?>
                  <tr>
                    <td><?=$a ?></td>
                    <td><?=$key->email ?></td>
                    <td class="text-wrap"><?=$key->surat_lamaran ?></td>
                    <td><?=$key->waktu_lamar ?></td>
                    <td><?=$key->nama_lowongan ?></td>
                    <td><a href="<?=base_url(); ?>m_upload/cv/<?=$key->cv ?>" target="_blank"><?=$key->cv ?></a></td>
                  </tr>
                <?php $a++;} ?>
              </tbody>
            </table>
          </div>
          </div>

        </div>
      </div>
      <?php $this->load->view('admin/footer'); ?>
   