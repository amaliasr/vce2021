    
    <!-- Header -->
    <header id="header" class="header" style="padding-top: 15%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h1 class="h1-large"><?=$cek[0]->nama_lowongan ?></h1>
                        <p class="p-large"><?=$cek[0]->describe ?></p>
                        <p class="p-large"><i class="fa fa-map-marker"></i> <?=$cek[0]->penempatan ?></p>
                        <?php if(count($saved) > 0){ ?>
                            <button class="btn btn-outline-primary mb-4"><i class="fa fa-check"></i> Tersimpan</button>
                        <?php }else{ ?>
                            <a href="<?=base_url(); ?>simpan/<?=$cek[0]->id ?>"><button class="btn btn-outline-primary mb-4"><i class="fa fa-bookmark-o"></i> Simpan</button></a>
                        <?php } ?>
                        
                        <a href="<?=base_url(); ?>apply/<?=$cek[0]->kode ?>"><button class="btn btn-primary mb-4">Kirim Lamaran</button></a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <img src="<?=base_url(); ?>m_upload/lowongan/<?=$cek[0]->image ?>" class="img-responsive" alt="Image" style="width: 100%;">
                </div> <!-- end of image-container -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- Customers -->

    <!-- end of customers -->
    

    