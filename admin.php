<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body onload="myFunction()">
    <div class="container">
      <div class="sidebar">
        <a href="admin.php" class="btn_s">Home</a>
        <a href="layanan/layanan.php" class="btn_s">Layanan</a>
        <a href="transaction/transaction.php" class="btn_s">Transaction</a>
      </div>
      <div class="right_content">
        <div class="navbar">
          <img src="gambar/logo.png" alt="" />
          <button class="btn">
            <a href="logout.php" class="btn_signout">Sign Out</a>
          </button>
        </div>
        <div class="content">
          <div class="content-teks">
             <h4 id="text"></h4>
            <p class="judul">
            <?php 
              session_start();
              echo "Selamat Datang di Halaman Admin, " . $_SESSION['nama'];
            ?>
            </p>
          </div>
          <div class="content-img">
            <img src="gambar/Capture1.JPG" width="350px" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- <script>
      function myFunction() {
        let nama = prompt("Masukkan Nama Anda : ", "Admin");
        let jam = new Date().getHours();
        if (nama != null) {
          if (jam >= 4 && jam <= 10) {
            document.getElementById("text").innerHTML = `Selamat Pagi ${nama}`;
          } else if (jam >= 11 && jam <= 14) {
            document.getElementById("text").innerHTML = `Selamat Siang ${nama}`;
          } else if (jam >= 15 && jam <= 18) {
            document.getElementById("text").innerHTML = `Selamat Sore ${nama}`;
          } else {
            document.getElementById("text").innerHTML = `Selamat Malam ${nama}`;
          }
        }
      }
    </script> -->
    <script>
      function myFunction() {
        let jam = new Date().getHours();
        if (jam) {
          if (jam >= 4 && jam <= 10) {
            document.getElementById("text").innerHTML = `Selamat Pagi`;
          } else if (jam >= 11 && jam <= 14) {
            document.getElementById("text").innerHTML = `Selamat Siang`;
          } else if (jam >= 15 && jam <= 18) {
            document.getElementById("text").innerHTML = `Selamat Sore`;
          } else {
            document.getElementById("text").innerHTML = `Selamat Malam`;
          }
        }
      }
    </script>

  </body>
</html>