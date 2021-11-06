    <!-- Services -->
    <div id="services" class="bg-gray" style="padding-top: 15%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-5">Saved Jobs</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
            	<?php foreach ($save as $key) { ?>
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

    

    