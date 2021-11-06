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
            <table class="table table-bordered table-responsive" id="dataTable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Logo</th>
                  <th>Email</th>
                  <th>Link Video</th>
                  <th>Uri</th>
                  <th>Var</th>
                  <th>No Telp</th>
                </tr>
              </thead>
              <tbody>
                <?php $a=1;foreach ($perusahaan as $key) {?>
                  <tr>
                    <td><?=$a ?></td>
                    <td class="text-wrap"><a href="<?=base_url() ?>akses/detail_perusahaan/<?=$key->id ?>"><?=$key->nama_perusahaan ?></a></td>
                    <td><?=$key->logo ?></td>
                    <td><?=$key->email ?></td>
                    <td class="text-wrap"><?=$key->link_video ?></td>
                    <td class="text-wrap"><?=$key->uri ?></td>
                    <td class="text-wrap"><?=$key->var ?></td>
                    <td>0<?=$key->no_telp ?></td>
                  </tr>
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
   