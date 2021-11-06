<div class="loading" id="spinner">Loading&#8230;</div>
    <!-- Header -->
    <header id="header" class="header" style="padding-top: 10%;">
        <div class="container">
            <h3 class="mb-4">Profile</h3>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Edit Profile</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Pas Foto</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="cv_pane-tab" data-bs-toggle="tab" data-bs-target="#cv_pane" type="button" role="tab" aria-controls="cv_pane" aria-selected="false">CV</button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="row mt-5">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary mb-4 pull-right" id="simpan_profile">Simpan Profile</button>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-lg-3"><label class="text-left">Nama Lengkap</label></div>
                                <div class="col-lg-9"><input type="text" class="form-control" id="" name="name" required="required" value="<?=$user[0]->name ?>"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3"><label class="text-left">Email</label></div>
                                <div class="col-lg-9"><input type="text" class="form-control" id="" name="email" required="required" value="<?=$user[0]->email ?>" disabled></div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-3"><label class="text-left">Tanggal Lahir</label></div>
                                <div class="col-lg-9"><input type="date" class="form-control" id="" name="dob" required="required" value="<?=$user[0]->dob ?>"></div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-3"><label class="text-left">Provinsi Asal</label></div>
                                <div class="col-lg-9"><select name="id_province" id="id_province" class="form-control" required="required">
                                    <option value="">- Pilih Provinsi -</option>
                                    <?php foreach($provinces as $key){ ?>
                                        <option value="<?=$key->id ?>" <?php if($user[0]->id_province == $key->id){echo "selected";} ?>><?=$key->name ?></option>
                                    <?php } ?>
                                </select></div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-3"><label class="text-left">Kota/Kabupaten Asal</label></div>
                                <div class="col-lg-9"><select name="kota_asal" id="kota_asal" class="form-control" required="required">
                                  <option value="">- Pilih Kota/Kabupaten -</option>
                                </select></div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-3"><label class="text-left">Jenis Kelamin</label></div>
                                <div class="col-lg-9"><select name="gender" id="gender" class="form-control" required="required">
                                    <option value="L" <?php if($user[0]->gender == 'L'){echo "selected";} ?>>Laki - Laki</option>
                                    <option value="P" <?php if($user[0]->gender == 'P'){echo "selected";} ?>>Perempuan</option>
                                </select></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3"><label class="text-left">No. Telp</label></div>
                                <div class="col-lg-9"><input type="number" class="form-control" id="" name="telp" required="required" value="<?=$user[0]->telp ?>"></div>
                            </div>
                        </div> <!-- end of col -->
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-lg-3"><label class="text-left">Jenjang</label></div>
                                <div class="col-lg-9"><select name="kualifikasi" id="kualifikasi" class="form-control" required="required">
                                        <option value="S1" <?php if($user[0]->kualifikasi == 'S1'){echo "selected";} ?>>S1</option>
                                        <option value="S2" <?php if($user[0]->kualifikasi == 'S2'){echo "selected";} ?>>S2</option>
                                        <option value="S3" <?php if($user[0]->kualifikasi == 'S3'){echo "selected";} ?>>S3</option>
                                        <option value="D4" <?php if($user[0]->kualifikasi == 'D4'){echo "selected";} ?>>D4</option>
                                        <option value="D3" <?php if($user[0]->kualifikasi == 'D3'){echo "selected";} ?>>D3</option>
                                        <option value="D2" <?php if($user[0]->kualifikasi == 'D2'){echo "selected";} ?>>D2</option>
                                        <option value="D1" <?php if($user[0]->kualifikasi == 'D1'){echo "selected";} ?>>D1</option>
                                        <option value="SMA" <?php if($user[0]->kualifikasi == 'SMA'){echo "selected";} ?>>SMA</option>
                                        <option value="SMK" <?php if($user[0]->kualifikasi == 'SMK'){echo "selected";} ?>>SMK</option>
                                        <option value="SMP" <?php if($user[0]->kualifikasi == 'SMP'){echo "selected";} ?>>SMP</option>
                                </select></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3"><label class="text-left">Institusi / Universitas / Politeknik / Sekolah</label></div>
                                <div class="col-lg-9"><input type="text" class="form-control" id="" name="institusi" value="<?=$user[0]->institusi ?>" required="required"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3"><label class="text-left">Fakultas</label></div>
                                <div class="col-lg-9"><input type="text" class="form-control" id="" name="fakultas" value="<?=$user[0]->fakultas ?>" required="required"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3"><label class="text-left">Program Studi / Jurusan</label></div>
                                <div class="col-lg-9"><input type="text" class="form-control" id="" name="jurusan" value="<?=$user[0]->jurusan ?>" required="required"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3"><label class="text-left">IPK / Nilai Rata - Rata</label></div>
                                <div class="col-lg-9"><input type="number" class="form-control" id="" name="ipk" value="<?=$user[0]->ipk ?>" required="required"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3"><label class="text-left">Nilai TOEFL</label></div>
                                <div class="col-lg-9"><input type="number" class="form-control" id="" name="toefl" value="<?=$user[0]->toefl ?>"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3"><label class="text-left">Nilai TOEIC</label></div>
                                <div class="col-lg-9"><input type="number" class="form-control" id="" name="toeic" value="<?=$user[0]->toeic ?>"></div>
                            </div>
                        </div>
                    </div> <!-- end of row -->
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <!-- upload -->
                  <div class="row mt-5">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary mb-4 pull-right" id="simpan_file">Simpan File</button>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-lg-4"><label class="text-left">Pas Foto</label></div>
                                <div class="col-lg-8">
                                  <input type="file" class="form-control" id="pas_foto" name="pas_foto">
                                  <input type="hidden" class="form-control" id="" name="file_foto" value="<?=$user[0]->pas_foto; ?>">
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <img src="<?=base_url() ?>m_upload/pas_foto/<?=$user[0]->pas_foto ?>" class="img-responsive" alt="Image" style="width: 100%">
                        </div>
                    </div> <!-- end of row -->
              </div>
              <div class="tab-pane fade" id="cv_pane" role="tabpanel" aria-labelledby="cv_pane-tab">
                  <!-- upload -->
                  <div class="row mt-5">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary mb-4 pull-right" id="simpan_file_cv">Simpan File CV</button>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-lg-4"><label class="text-left">Curriculum Vitae (.pdf)</label></div>
                                <div class="col-lg-8">
                                  <input type="file" class="form-control" id="cv" name="cv">
                                  <input type="hidden" class="form-control" id="" name="file_cv" value="<?=$user[0]->cv; ?>">
                                  <a href="<?=base_url(); ?>m_upload/cv/<?=$user[0]->cv; ?>" target="_blank"><?=$user[0]->cv; ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            
                        </div>
                    </div> <!-- end of row -->
              </div>
            </div>
            
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $("#spinner").hide();
        $(document).ready(function(){
            

            function select() {
              var kota_asal_id = '<?=$user[0]->kota_asal ?>';
              var id_province_id = '<?=$user[0]->id_province ?>';
              if (kota_asal_id != "" || id_province_id != "") {
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url(); ?>home/province",
                  data: {id_province_id : $("#id_province_id").val()}, 
                  dataType: "json",
                  beforeSend: function(e) {
                    $("#spinner").show();
                  },
                  success: function(response){
                    $("#spinner").hide();
                    $.each(response,function(key,value){
                      html += '<option value="'+value['id']+'">'+value['name']+'</option>';
                    });
                    $("#kota_asal").html(html);
                  },
                  error: function (e) {
                    $("#spinner").hide();
                  }
                });
              }
              
            }
            select();
            $("#id_province").change(function(){
              var html = "";
              $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>home/province",
                data: {id_province : $("#id_province").val()}, 
                dataType: "json",
                beforeSend: function(e) {
                  $("#spinner").show();
                },
                success: function(response){
                  $("#spinner").hide();
                  $.each(response,function(key,value){
                    html += '<option value="'+value['id']+'">'+value['name']+'</option>';
                  });
                  $("#kota_asal").html(html);
                },
                error: function (e) {
                  $("#spinner").hide();
                }
              });
            });
            
            $("#simpan_profile").on('click',function(){
               var name           = $('input[name="name"]').val();
               var dob            = $('input[name="dob"]').val();
               var telp           = $('input[name="telp"]').val();
               var institusi      = $('input[name="institusi"]').val();
               var fakultas       = $('input[name="fakultas"]').val();
               var jurusan        = $('input[name="jurusan"]').val();
               var ipk            = $('input[name="ipk"]').val();
               var toefl          = $('input[name="toefl"]').val();
               var toeic          = $('input[name="toeic"]').val();
               var id_province    = $('select[name="id_province"]').val();
               var kota_asal      = $('select[name="kota_asal"]').val();
               var gender         = $('select[name="gender"]').val();
               var kualifikasi    = $('select[name="kualifikasi"]').val();
               if (name == "") {
                  swal("Ada yang masih Kosong", "Silahkan Cek Ulang", "error");
               }else{
                  $.ajax({
                    url: '<?php echo base_url(); ?>home/simpan_profile',
                    type: 'POST',
                    data: {name:name,dob:dob,telp:telp,institusi:institusi,fakultas:fakultas,jurusan:jurusan,ipk:ipk,toefl:toefl,toeic:toeic,id_province:id_province,kota_asal:kota_asal,gender:gender,kualifikasi:kualifikasi},
                    beforeSend: function() {
                        // $("#simpan_profile").attr("disabled", true);
                        $("#spinner").show();
                    },
                    error: function(e) { 
                        $("#spinner").hide();
                        // $("#simpan_profile").removeAttr("disabled", true);
                        swal("Gagal Terkirim", "Silahkan Coba Lagi", "error");
                    },
                    success: function(response){
                        $("#spinner").hide();
                        swal("Berhasil Tersimpan", "Data Profile Anda Tersimpan", "success");
                    }
                  });
               }
            });
            $("#simpan_file").on('click',function(){
              var timestamp = Date.now()
              var pasfile = $('#pas_foto').prop('files')[0];
              var fileExtensionpas = pasfile["name"].split('.').pop();
              var newFileNamepas = "FOTO_" + timestamp + "." + fileExtensionpas;
              var form_data = new FormData();
              form_data.append('file', pasfile, newFileNamepas);
              $.ajax({
                url: '<?php echo base_url(); ?>home/simpan_file',
                type: 'POST',
                contentType: false,
                processData: false,
                data: form_data,
                beforeSend: function() {
                    // $("#simpan_profile").attr("disabled", true);
                    $("#spinner").show();
                },
                error: function(e) { 
                    $("#spinner").hide();
                    // $("#simpan_profile").removeAttr("disabled", true);
                    swal("Gagal Terkirim", "Silahkan Coba Lagi", "error");
                },
                success: function(response){
                    // console.log(response);
                    $("#spinner").hide();
                    swal("Berhasil Tersimpan", "File Anda Tersimpan", "success");
                    location.reload();
                }
              });
            });

            $("#simpan_file_cv").on('click',function(){
              var timestamp = Date.now()
              var cvfile = $('#cv').prop('files')[0];
              var fileExtensioncv = cvfile["name"].split('.').pop();
              var newFileNamecv = "CV_" + timestamp + "." + fileExtensioncv;
              var form_data = new FormData();
              form_data.append('file', cvfile, newFileNamecv);
              $.ajax({
                url: '<?php echo base_url(); ?>home/simpan_cv',
                type: 'POST',
                contentType: false,
                processData: false,
                data: form_data,
                beforeSend: function() {
                    // $("#simpan_profile").attr("disabled", true);
                    $("#spinner").show();
                },
                error: function(e) { 
                    $("#spinner").hide();
                    // $("#simpan_profile").removeAttr("disabled", true);
                    swal("Gagal Terkirim", "Silahkan Coba Lagi", "error");
                },
                success: function(response){
                    console.log(response);
                    $("#spinner").hide();
                    swal("Berhasil Tersimpan", "File Anda Tersimpan", "success");
                    location.reload();
                }
              });
            });
        });
    </script>
    