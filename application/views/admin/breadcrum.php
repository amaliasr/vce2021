<div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0"><?=$nama_menu ?></h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?=site_url('akses/')?>"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active"><a href="<?=site_url('akses/'.$link)?>"><?=$nama_menu ?></a></li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <?php if($nama_menu != 'Menu' AND $nama_menu != 'Display' AND $nama_menu != 'Penjualan' AND $nama_menu != 'Konten' AND $nama_menu != 'Ubah Password' AND $nama_menu != 'Home' AND $nama_menu != 'Usaha Anda'  AND $nama_menu != 'Hasil Penjualan' AND $nama_menu != 'Penilaian' AND $sidebar != 'detail_perusahaan'){ ?>
              <a href="#" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#exampleModalCenter<?=$variable ?>"><i class="fa fa-plus"></i> Tambah <?=$nama_menu ?></a>
              <?php } ?><!-- Button trigger modal -->
              <?php if($nama_menu == 'Penjualan'){ ?>
              <a href="#" class="btn btn-neutral" data-toggle="modal" data-target="#exampleModalCenterpenjualan"><i class="fa fa-plus"></i> Tambah Pencapaian
              <?php } ?>
              <!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
            </div>
          </div>