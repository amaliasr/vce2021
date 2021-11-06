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
              <a href="<?=base_url(); ?>akses/lowongan/<?=$parent[0]->id ?>" target="_blank"><button type="button" class="btn btn-primary">Lowongan</button></a>
              <a href="<?=base_url(); ?>akses/grafik_pengunjung/<?=$parent[0]->id ?>" target="_blank"><button type="button" class="btn btn-primary">Grafik Pengunjung</button></a>
            </div>
            <!-- Light table -->
            <div class="card-body ">
              <form action="<?=site_url('akses/ubah_perusahaan/'.$parent[0]->id)?>" method="POST" role="form" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">Nama Perusahaan</label>
                      <input type="text" class="form-control" id="" name="nama_perusahaan" value="<?=$parent[0]->nama_perusahaan ?>">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">URI</label>
                      <input type="text" class="form-control" id="" name="uri" value="<?=$parent[0]->uri ?>" disabled>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">Google Analytics (Home)</label>
                      <input type="text" class="form-control" id="" name="home_analytics" value="<?=$parent[0]->home_analytics ?>">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">Google Analytics (Admin)</label>
                      <input type="text" class="form-control" id="" name="admin_analytics" value="<?=$parent[0]->admin_analytics ?>">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="">Caption</label>
                      <textarea class="form-control" name="caption"><?=$parent[0]->caption ?></textarea>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">No Telpon</label>
                      <input type="text" class="form-control" id="" name="no_telp" value="<?=$parent[0]->no_telp ?>">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" class="form-control" id="" name="email" value="<?=$parent[0]->email ?>">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">Logo</label>
                      <input type="file" class="form-control" name="foto">
                      <input type="hidden" class="form-control" name="old_file" value="<?=$parent[0]->logo ?>">
                      <img src="<?=base_url(); ?>m_upload/logo/<?=$parent[0]->logo ?>" class="img-responsive" alt="Image" style="width: 100%">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">Link Youtube</label>
                      <input type="text" class="form-control" id="" name="link_video" value="<?=$parent[0]->link_video ?>">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>

        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter<?=$variable ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Tambah <?=$nama_menu ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?=site_url('akses/tambah_perusahaan/')?>" method="POST" role="form" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="inputvariable">Upload File</label>
                      <input type="file" class="form-control" name="file" >
                    </div>
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <?php $this->load->view('admin/footer'); ?>
   