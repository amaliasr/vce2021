<!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; VCE2021
            </div>
          </div>
          <!-- <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div> -->
        </div>
      </footer>
       </div>
  </div>


      
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?=base_url()?>assets/admin/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>assets/admin/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?=base_url()?>assets/admin/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?=base_url()?>assets/admin/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?=base_url()?>assets/admin/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?=base_url()?>assets/admin/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="<?=base_url()?>assets/admin/js/argon.js?v=1.2.0"></script>
  <script src="<?=base_url()?>assets/admin/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>assets/admin/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?=base_url();?>assets/admin/summernote/summernote.js"></script>
  <script src="<?=base_url()?>assets/admin/chart/morris/morris.min.js"></script>
  <script src="<?=base_url()?>assets/admin/chart/morris/morris.js"></script>
  <script src="<?=base_url()?>assets/admin/chart/raphael-min.js"></script>
  <script src="<?=base_url()?>assets/admin/dropify/dropify.min.js"></script>
  
  <script src="<?=base_url()?>assets/admin/dropzone/dropzone.min.js"></script>

  <!-- select search -->
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

  <!-- (Optional) Latest compiled and minified JavaScript translation files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('.dropify').dropify({
            messages: {
                default: 'Drag atau Drop untuk Upload File, Maksimal 3 MB',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
        });
    });
  function myFunctionCopy($id_navbar_konten) {
    var copyText = document.getElementById("myInput"+$id_navbar_konten);
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
    alert("Copied the text: " + copyText.value);
  }
</script>
  
  <script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
    $(document).ready( function () {
        $('#dataTable').DataTable();
    });
  </script>
  <script type="text/javascript">
    //edtor summernote
    $('#editordata').summernote({
      height: 200,
      toolbar: [    
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        ['fontname', ['fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        ['view', ['fullscreen', 'codeview']],
        ['help', ['help']]       
      ],
    });
    <?php foreach ($navbar_konten as $key): ?>
    $('#navbareditor<?=$key->id_navbar_konten?>').summernote({
      height: 200,
      toolbar: [    
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        ['fontname', ['fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        ['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
    });
    <?php endforeach ?>
    <?php foreach ($artikel as $key): ?>
    $('#artikeleditor<?=$key->id_artikel?>').summernote({
      height: 200,
      toolbar: [    
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        ['fontname', ['fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        ['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
    });
    <?php endforeach ?>
  </script>
  
</body>

</html>