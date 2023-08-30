<?php

//Menangkap data yang di kirim dari form
// $nama_produk = $_POST['nama_produk'];
// $garansi = $_POST['garansi'];
// $return = $_POST['return'];
// $kategori = $_POST['kategori'];
// $deskripsi = $_POST['deskripsi'];
// $foto_nama = $_FILES['foto']['nama'];
// $foto_size = $_FILES['foto']['size'];

// //Mengecek apakah file lebih dari 2 MB atau tidak
// if ($foto_size > 2097152) {

//     //Jika file lebih dari 2 MB makan akan gagal mengupload file
//     header("location : ../kelola_produk.php?pesan=size");
// } else {

//     //Mengecek apakah ada file yang di upload atau tidak
//     if ($foto_nama != "") {

//         //Ekstensi file yang bisa di upload
//         $ekstensi_izin = array('png', 'jpg', 'jpeg');

//         //Memisahkan nama file dengan ekstensinya
//         $pisahkan_ekstensi = explode('.', $foto_nama);
//         $ekstensi = strtolower(end($pisahkan_ekstensi));

//         //Nama file yang berada di dalam direktori temporer server
//         $file_tmp = $_FILES['foto']['tmp_name'];

//         //Membuat angka atau huruf acak berdasarkan waktu diupload
//         $tanggal = md5(date('Y-m-d h:i:s'));

//         //Menyatukan angka atau huruf acak dengan nama file aslinya
//         $foto_nama_new = $tanggal . '-' . $foto_nama;


//         //Mengecek apakah ekstensi file sesuai dengan ekstensi file yang diupload
//         if (in_array($ekstensi, $ekstensi_izin) === true) {

//             //Memindahkan file kedalam folder foto
//             move_uploaded_file($file_tmp, 'foto/' . $foto_nama_new);

//             //Query untuk memasukkan data ke dalam tabel Produk
//             $query = mysqli_query($koneksi, "INSERT INTO produk VALUES ('','$nama_produk','$garansi','$return','$kategori','$deskripsi','$foto_nama_new')");

//             //Mengecek apakah data gagal diinput atau tidak
//             if ($query) {
//                 header("location : ../kelola_produk.php?pesan=berhasil");
//             } else {
//                 header("location : ../kelola_produk.php?pesan=gagal");
//             }
//         } else {

//             //Jika ekstensinya tidak sesuai dengan yang kita tetapkan maka akan eror
//             header("location : ../kelola_produk.php?pesan=ekstensi");
//         }
//     } else {

//         // Apabila tidak ada file yang diupload maka akan menjalankan kode yang ada di bawah ini
//         $query = mysqli_query($koneksi, "INSERT INTO produk ('nama_produk','garansi_produk','return_produk','kategori_produk','deskripsi_produk') VALUES ('$nama_produk','$garansi','$return','$kategori','$deskripsi')");

//         //Mengecek apakah data berhasil di input atau gagal
//         if ($query) {
//             header("location : ../kelola_produk.php?pesan=berhasil");
//         } else {
//             header("location : ../kelola_produk.php?pesan=gagal");
//         }
//     }
// }





include 'konfigurasi/koneksi.php';

//Menangkap data yang di kirim dari form
$nama_produk = $_POST['nama_produk'];
$garansi = $_POST['garansi'];
$return = $_POST['return'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$filename = $_FILES['foto']['name'];
$tmpname = $_FILES['foto']['tmp_name'];
$filesize = $_FILES['foto']['size'];

$formatfile = pathinfo($filename, PATHINFO_EXTENSION);
$rename = 'galeri' . time() . '.' . $formatfile;

$allowedtype = array('png', 'jpg', 'jpeg', 'gif');

if (!in_array($formatfile, $allowedtype)) {

    header("location:tambah_produk.php?pesan=ekstensi");
} else if ($filesize > 2000000) {

    header("location:tambah_produk.php?pesan=size");
} else {

    move_uploaded_file($tmpname, "uploads/" . $rename);

    mysqli_query($koneksi, "insert into produk values ('','$nama_produk','$garansi','$return','$kategori','$deskripsi','$rename')");

    header("location:produk.php?pesan=berhasil");
}





//Menginput data ke database
//mysqli_query($koneksi, "INSERT INTO produk VALUES ('','$nama_produk','$garansi','$return','$kategori','$deskripsi','$foto')");

//Mengalihkan ke halaman index kembali
//header("location:../kelola_produk.php");
?>