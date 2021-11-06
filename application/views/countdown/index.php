<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Coming Soon</title>
    <style type="text/css">
      body, html{
        background: rgb(0,56,122);
        background: linear-gradient(114deg, rgba(0,56,122,1) 25%, rgba(127,11,142,1) 86%);
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
      }
    </style>
  </head>
  <body class="text-white">
    <div class="container">
      <div class="row align-items-center h-100">
        <div class="px-4 py-5 my-5 text-center">
          <img class="d-block mx-auto mb-4" src="<?=base_url()?>assets/img/logo.png" alt="" width="72" height="57">
          <h1 class="display-5" id="timer"></h1>
          <br>
          <br>
          <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Virtual Career Expo diadakan pada 1 November 2021. Akan ada <b>30+ perusahaan ternama</b> siap membuka Lowongan Kerja untuk Anda. Stay Tune</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript">
    // Set the date we're counting down to
    var countDownDate = new Date("Nov 1, 2021 01:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
      document.getElementById("timer").innerHTML = days + " Hari  Lagi<br><b class='fw-bold'>" + hours + " : "
      + minutes + " : " + seconds + "</b> ";

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>