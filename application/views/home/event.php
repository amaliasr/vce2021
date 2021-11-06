<div id="contact" class="form-1">
        <div class="container">
            <h3 class="mb-5">Event</h3>
            <div class="row">
                <?php foreach($event as $key) {?>
                <div class="col-12">
                    <div class="card mb-3" style="width: 100%">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="<?=base_url(); ?>m_upload/event/<?=$key->image ?>" class="img-fluid rounded-start imgshape" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title"><?=$key->nama ?> <?=$key->nama_perusahaan ?></h5>
                            <p class="card-text"><i class="fa fa-user"></i> Speaker by : <?=$key->user_by ?></p>
                            <p class="card-text"><small class="text-muted"><i class="fa fa-calendar"></i> <?=date('d Month Y',strtotime($key->tgl)) ?></small></p>
                            <a href="<?=$key->link_join ?>" target="_blank"><button type="button" class="btn btn-primary">Join Now</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <?php } ?>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->