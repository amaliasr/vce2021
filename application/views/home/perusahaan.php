    
    <!-- Header -->
    <header id="header" class="header" style="padding-top: 13%;">
        <div class="container">
            <?php if(count($event_now) > 0){ ?>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success" role="alert">
                      <h5 class="alert-heading">Event Hari Ini</h5>
                      <?php foreach($event_now as $key){ ?>
                          <p><?=$key->nama ?> <?=$key->nama_perusahaan ?> <?="by ".$key->user_by ?></p>
                      <?php } ?>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h1 class="h1-large"><?=$cek[0]->nama_perusahaan ?></h1>
                        <p class="p-large"><?php echo word_limiter($cek[0]->caption , 30, ''); ?>... <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Read More</a></p>
                        <a class="btn-solid-lg mb-4" href="#services">Lihat Lowongan</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">

                    	<div class="video-container">
                        <iframe type="text/html" width="100%" height="100%" src="https://www.youtube.com/embed/<?=$cek[0]->link_video ?>?rel=0&modestbranding=1&autohide=1&mute=0&showinfo=0&controls=0&autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Services -->
    <div id="services" class="bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-5">Lowongan Kerja</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
            	<?php foreach ($lowongan as $key) { ?>
                <div class="col-lg-4 mb-3">
                    <!-- Card -->
                    <a href="<?=base_url() ?>job/<?=$key->kode ?>" class="default-texting"><div class="card default-texting p-3" style="width: 100%">
					  <div class="card-body">
					    <h5 class="card-title text-white"><?=$key->nama_lowongan ?></h5>
					    <h6 class="card-subtitle mb-2 text-muted"><?=$key->nama_perusahaan ?></h6>
					    <p class="card-text"><i class="fa fa-map-marker"></i> <?=$key->penempatan ?></p>
					  </div>
					</div></a>
                    <!-- end of card -->
                </div> <!-- end of col -->
            	<?php } ?>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->
    <!-- Customers -->
    <!-- end of customers -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?=$cek[0]->nama_perusahaan ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="<?=base_url(); ?>m_upload/logo/<?=$cek[0]->logo ?>" style="width: 50%" class="mb-2 rounded mx-auto d-block">
            <p class="text-justify"><?=$cek[0]->caption ?></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    