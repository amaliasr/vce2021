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
            <div class="card-header border-0 pull-right">
              <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenterLowongan"><i class="fa fa-plus"></i></button>
            </div>
            <!-- Light table -->
            <div class="card-body ">
              <div class="row">
                <table class="table table-bordered table-responsive">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Penempatan</th>
                      <th>Deskripsi</th>
                      <th>Kode</th>
                      <th>Image</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $a=1;foreach ($lowongan as $key) {?>
                    <tr>
                      <td><?=$a ?></td>
                      <td><a href="" data-toggle="modal" data-target="#ubahLowongan<?=$key->id ?>"><?=$key->nama_lowongan ?></a></td>
                      <td><?=$key->penempatan ?></td>
                      <td><?=$key->describe ?></td>
                      <td><?=$key->kode ?></td>
                      <td><?=$key->image ?></td>
                      <td><?=$key->status ?></td>
                    </tr>
                    <div class="modal fade" id="ubahLowongan<?=$key->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Ubah Lowongan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="<?=site_url('akses/ubah_lowongan/'.$key->id)?>" method="POST" role="form" enctype="multipart/form-data">
                          <div class="modal-body">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputvariable">Nama</label>
                                <input type="text" class="form-control" name="nama_lowongan" value="<?=$key->nama_lowongan ?>">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputvariable">Penempatan</label>
                                <input type="text" class="form-control" name="penempatan" value="<?=$key->penempatan ?>">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputvariable">Upload Foto</label>
                                <input type="file" class="form-control" name="gambar">
                                <input type="hidden" class="form-control" name="old_file" value="<?=$key->image ?>">
                              </div>
                              <div class="form-group col-md-6">
                                <img src="<?=base_url(); ?>m_upload/lowongan/<?=$key->image ?>" class="img-responsive" style="width:100%" alt="Image">
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputvariable">Deskripsi Singkat</label>
                                <textarea class="form-control" name="describe"><?=$key->describe ?></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            
                            <a href="<?=site_url('akses/hapus_lowongan/'.$key->id)?>" onClick="return confirm('Are you sure you want to delete?')"><button type="button" class="btn btn-danger">Hapus</button></a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <?php $a++;} ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenterLowongan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Tambah Lowongan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?=site_url('akses/tambah_lowongan/'.$parent[0]->id)?>" method="POST" role="form" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputvariable">Nama</label>
                  <input type="text" class="form-control" name="nama_lowongan" >
                </div>
                <div class="form-group col-md-6">
                  <label for="inputvariable">Penempatan</label>
                  <input type="text" class="form-control" name="penempatan" >
                </div>
                <div class="form-group col-md-12">
                  <label for="inputvariable">Upload Foto</label>
                  <input type="file" class="form-control" name="foto" >
                </div>
                <div class="form-group col-md-12">
                  <label for="inputvariable">Deskripsi Singkat</label>
                  <textarea class="form-control" name="describe"></textarea>
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
   