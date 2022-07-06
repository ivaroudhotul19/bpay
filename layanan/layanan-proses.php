<?php 
include '../koneksi.php';

function upload() {
    $namaFile = $_FILES['photo']['name'];
    $error = $_FILES['photo']['error'];
    $tmpName = $_FILES['photo']['tmp_name'];
    
    // cek apakah tidak ada gambar yang diupload
    if($error === 4) {
        echo " <script>
            alert('Gambar Harus Diisi');
            window.location = 'layanan-entry.php';
        </script> ";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstentiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstentiGambarValid)) {
        echo " <script>
            alert('File Harus Berupa Gambar');
            window.location = 'layanan-entry.php';
        </script> ";
    }

    // lolos pengecekan, upload gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    $oke = move_uploaded_file($tmpName, '../img_layanan/'.$namaFileBaru);
    return $namaFileBaru;
}

if(isset($_POST['simpan'])) {
    $layanan = $_POST['layanan'];
    $price = $_POST['price'];
    $photo = upload();
    $sql = "INSERT INTO tb_layanan VALUES('', '$photo',  '$layanan', '$price')";

    if(empty($layanan) || empty($price)) {
        echo " <script>
            alert('Pastikan Anda Mengisi Semua Data');
            window.location = 'layanan-entry.php';
        </script> ";
    } elseif(mysqli_query($koneksi, $sql)) {
        echo " <script>
            alert('Data Layanan Berhasil Ditambahkan');
            window.location = 'layanan.php'
        </script> ";
    } else {
        echo " <script>
            alert('Terjadi Kesalahan');
            window.location = 'layanan-entry.php'
        </script> ";
    }
} elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $layanan = $_POST['layanan'];
    $price = $_POST['price'];
    $photoLama = $_POST['photoLama'];
 
    // cek apakah user pilih gambar atau tidak
    if($_FILES['photo']['error']) {
        $photo = $photoLama;
    } else {
        $photo = upload();
    }
    $sql = "UPDATE tb_layanan SET 
    photo = '$photo', layanan = '$layanan', price = '$price' WHERE id = $id ";
 
    if(mysqli_query($koneksi, $sql)) {
        echo " <script>
            alert('Data Layanan Berhasil Diubah');
            window.location = 'layanan.php';
        </script> ";
    } else {
        echo " <script>
            alert('Terjadi Kesalahan');
            window.location = 'layanan-edit.php';
        </script> ";
    }
} elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tb_layanan WHERE id = $id";
 
    if(mysqli_query($koneksi, $sql)) {
        echo " <script>
            alert('Data Layanan Berhasil Dihapus');
            window.location = 'layanan.php';
        </script> ";
    } else {
        echo " <script>
            alert('Data Layanan Gagal Dihapus');
            window.location = 'layanan.php';
        </script> ";
    }
} else {
    header('location: layanan.php');
}