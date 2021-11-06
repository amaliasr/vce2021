    
    <!-- Header -->
    <header id="header" class="header" style="padding-top: 15%;">
        <div class="container">
            <div class="row">
                <?php foreach($perusahaan as $key){ ?>
                    <div class="col-lg-6">
                        <div class="card mb-3" style="width: 100%">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="<?=base_url(); ?>m_upload/logo/<?=$key->logo ?>" class="img-fluid rounded-start imgshape" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title"><?=$key->nama_perusahaan ?></h5>
                                <a href="<?=base_url(); ?>company/<?=$key->uri ?>" target="_blank"><button type="button" class="btn btn-primary">Masuk</button></a>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div> <!-- end of col -->
                <?php } ?>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- Customers -->
    <!-- end of customers -->
    