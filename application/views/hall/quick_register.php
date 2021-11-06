<div class="loading" id="spinner">Loading&#8230;</div>
<!-- Header -->
    <header id="header" class="header" style="padding-top: 15%;height: 100%;">
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6 col-8">
                <div class="card">
                  <div class="card-body">
                    <p class="card-text">
                        <p class="mb-5 text-center">Apakah Anda yakin ini email anda? Anda akan menerima email <b>konfirmasi</b> dalam beberapa menit untuk masuk ke <b>Halaman Hall Virtual Career Expo 2021</b></p>
                        <div class="form-group row">
                            <div class="col-lg-3"><label class="text-left">Email</label></div>
                            <div class="col-lg-9"><input type="text" class="form-control" id="email" name="email" value="<?=$email ?>" required="required"></div>
                        </div> 
                        <div class="row">
                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-primary" id="send_email">Ya, Itu Saya !</button>
                                <button type="button" class="btn btn-dark"  data-bs-toggle="modal" data-bs-target="#exampleModal">Saya Pernah Daftar</button>
                            </div>
                        </div>
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
             <div class="form-group row">
                <div class="col-lg-3"><label class="text-left">Password ( Cek Email Sebelumnya )</label></div>
                <div class="col-lg-9"><input type="text" class="form-control" id="password" name="password" required="required"></div>
            </div> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="login">Login</button>
          </div>
        </div>
      </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $("#spinner").hide();
        $(document).ready(function(){
            $("#send_email").on('click',function(){
                var email    = $('input[name="email"]').val();
                $.ajax({
                    url: '<?php echo base_url(); ?>hall/kirim_email',
                    type: 'POST',
                    data: {email:email},
                    beforeSend: function() {
                        $("#spinner").show();
                    },
                    error: function(e) { 
                        $("#spinner").hide();
                        swal("Gagal Terkirim", "Silahkan Coba Lagi", "error");
                    },
                    success: function(response){
                        $("#spinner").hide();
                        swal("Berhasil Terkirim", "Silahkan tunggu email konfirmasi agar dapat masuk ke Hall", "success");
                    }
                });
            });

            $("#login").on('click',function(){
                var email    = $('input[name="email"]').val();
                var password  = $('input[name="password"]').val();
                console.log(email,password);
                $.ajax({
                    url: '<?php echo base_url(); ?>hall/login',
                    type: 'POST',
                    data: {email:email,password:password},
                    beforeSend: function() {
                        $("#spinner").show();
                    },
                    error: function(e) { 
                        $("#spinner").hide();
                        swal("Gagal", "Silahkan Coba Lagi", "error");
                    },
                    success: function(response){
                        console.log(response);
                        $("#spinner").hide();
                        swal("Login Berhasil", "", "success");
                        $(location).attr('href', '<?=base_url() ?>');
                    }
                });
            });
        });
    </script>
    