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
              <h3 class="mb-0">View</h3>
            </div>
            <!-- Light table -->
            <div class="card-body ">
            <table class="table table-bordered table-responsive">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Perusahaan</th>
                      <th>Tgl</th>
                      <th>Kode</th>
                      <th>Pembicara</th>
                      <th>Deskripsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $a=1;foreach ($event as $key) {?>
                    <tr>
                      <td><?=$a ?></td>
                      <td><a href="" data-toggle="modal" data-target="#ubahEvent<?=$key->id_event ?>"><?=$key->nama ?></a></td>
                      <td><?=$key->nama_perusahaan ?></td>
                      <td><?=date('d/m/Y',strtotime($key->tgl)) ?></td>
                      <td><?=$key->kode ?></td>
                      <td><?=$key->user_by ?></td>
                      <td><?=$key->describe ?></td>
                    </tr>
                    <div class="modal fade" id="ubahEvent<?=$key->id_event ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Ubah Lowongan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="<?=site_url('akses/ubah_event/'.$key->id_event)?>" method="POST" role="form" enctype="multipart/form-data">
                          <div class="modal-body">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputvariable">Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?=$key->nama ?>">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputvariable">Perusahaan</label>
                                <select name="id_perusahaan" class="form-control" required="required" data-live-search="true">
                                  <?php foreach($perusahaan as $row){ ?>
                                    <option value="<?=$row->id ?>" <?php if($row->id == $key->id_perusahaan){echo "selected";} ?>><?=$row->nama_perusahaan ?></option>
                                  <?php } ?>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputvariable">Tanggal Acara</label>
                                <input type="date" class="form-control" name="tgl" value="<?=$key->tgl ?>">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputvariable">Pembawa Acara</label>
                                <input type="text" class="form-control" name="user_by" value="<?=$key->user_by ?>">
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputvariable">Deskripsi</label>
                                <textarea name="describe" class="form-control" rows="5"><?=$key->describe ?></textarea>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputvariable">Link Join</label>
                                <input type="text" class="form-control" name="link_join" value="<?=$key->link_join ?>">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputvariable">Upload Foto</label>
                                <input type="file" class="form-control" name="foto" >
                                <input type="hidden" class="form-control" name="old_file" value="<?=$key->image ?>">
                              </div>
                          </div>
                          </div>
                          <div class="modal-footer">
                            
                            <a href="<?=site_url('akses/hapus_event/'.$key->id)?>" onClick="return confirm('Are you sure you want to delete?')"><button type="button" class="btn btn-danger">Hapus</button></a>
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
            <form action="<?=site_url('akses/tambah_event/')?>" method="POST" role="form" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputvariable">Nama</label>
                    <input type="text" class="form-control" name="nama" value="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputvariable">Perusahaan</label>
                    <select name="id_perusahaan" id="input" class="form-control selectpicker" required="required" data-live-search="true">
                      <?php foreach($perusahaan as $row){ ?>
                        <option value="<?=$row->id ?>"><?=$row->nama_perusahaan ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputvariable">Tanggal Acara</label>
                    <input type="date" class="form-control" name="tgl" value="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputvariable">Pembawa Acara</label>
                    <input type="text" class="form-control" name="user_by" value="">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputvariable">Deskripsi</label>
                    <textarea name="describe" class="form-control" rows="5"></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputvariable">Link Join</label>
                    <input type="text" class="form-control" name="link_join">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputvariable">Upload Foto</label>
                    <input type="file" class="form-control" name="foto" >
                    <input type="hidden" class="form-control" name="old_file">
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
   