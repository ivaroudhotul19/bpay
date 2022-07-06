<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/admin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />
    <title>Transaction Entry</title>
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <a href="../admin.php" class="btn_s">Home</a>
        <a href="../layanan/layanan.php" class="btn_s">Layanan</a>
        <a href="transaction.php" class="btn_s">Transaction</a>
      </div>
      <div class="right_content">
        <div class="navbar">
          <img src="../gambar/logo.png" alt="" />
          <button class="btn">
            <a href="">Sign Out</a>
          </button>
        </div>
        <div class="content">
          <h3>Input Transaction</h3>
          <div class="form-login">
            <form action="transaction-proses.php" method="post">
              <label for="nama">Nama</label>
              <input
                class="input"
                type="text"
                name="nama"
                id="nama"
                placeholder="Nama"
              />
              <label for="jenis">Jenis Layanan</label>
              <input
                class="input"
                type="text"
                name="jenis"
                id="jenis"
                placeholder="Jenis Layanan"
              />
              <label for="harga">Harga</label>
              <input
                class="input"
                type="text"
                name="harga"
                id="harga"
                placeholder="Harga"
              />
              <label for="tgl">Tanggal</label>
              <input
                class="input"
                type="date"
                name="tgl"
                id="tgl"
                style="margin-bottom: 20px"
              />
              <button type="submit" class="btn btn-simpan" name="simpan">
                Simpan
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
