    
    <!-- Header -->
    <header id="header" class="header" style="padding-top: 15%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php if($status_lamaran == 'yes'){ ?>
                        <div class="alert alert-success mb-5" role="alert">
                              <?=$warning ?>
                        </div>
                        <form action="" method="POST" role="form">
                            <div class="form-group">
                                <label for="">Surat Lamaran</label>
                                <textarea class="form-control" name="surat_lamaran" id="surat_lamaran" rows="10" required=""></textarea>
                                <input type="hidden" name="id_lowongan" value="<?=$id_lowongan ?>">
                            </div>
                            <button type="submit" class="btn btn-primary" id="btn_add_data">Kirim Lamaran</button>
                        </form>
                    <?php }else if($status_lamaran == 'no'){ ?>
                        <div class="alert alert-danger mb-5" role="alert">
                              <?=$warning ?>
                        </div>
                        <div class="d-grid gap-2 col-12 text-center">
                            <a href="<?=base_url(); ?>home/profil"><button type="button" class="btn btn-danger "><i class="fa fa-pencil"></i> isi Profil dan CV</button></a>
                        </div>
                    <?php }else if($status_lamaran == 'finish'){ ?>
                        <div class="alert alert-danger mb-5" role="alert">
                          <?=$warning ?>
                        </div>
                        <div class="d-grid gap-2 col-12 text-center">
                            <a href="<?=base_url(); ?>company"><button type="button" class="btn btn-danger">Cari Ulang</button></a>
                        </div>
                    <?php } ?>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- Customers -->
    <!-- end of customers -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#btn_add_data").on('click',function(){
               var surat_lamaran          = $('textarea#surat_lamaran').val();
               var id_lowongan          = $('input[name="id_lowongan"]').val();
               if (surat_lamaran == "") {
                  $("#error_message").show().html("Isi Bagian yang Kosong");
               }else{
                  $("#error_message").html("").hide();
                  $.ajax({
                    url: '<?php echo base_url(); ?>home/kirim_lamaran',
                    type: 'POST',
                    data: {surat_lamaran:surat_lamaran,id_lowongan:id_lowongan},
                    beforeSend: function() {
                        $("#btn_add_data").attr("disabled", true);
                    },
                    error: function(e) { 
                        swal("Gagal Terkirim", "Silahkan Coba Lagi", "error");
                    },
                    success: function(response){
                        swal("Berhasil Terkirim", "Selamat Lamaran anda Telah Berhasil Terkirim, Semoga Sukses", "success");
                        $(location).attr('href', '<?=base_url() ?>company');
                    }
                  });
               }
            });
        });
    </script>
    