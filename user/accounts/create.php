<?php
if(isset($_POST['buat'])){
    $username = htmlentities(htmlspecialchars(strip_tags(trim($_POST['username']))));
    $pass = htmlentities(htmlspecialchars(strip_tags(trim($_POST['password']))));
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_cust']))));
    $alamat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['alamat']))));
    $telp = htmlentities(htmlspecialchars(strip_tags(trim($_POST['no_telp']))));
    $status = htmlentities(htmlspecialchars(strip_tags(trim($_POST['status']))));
    $pass = sha1($pass);

    $extensi_diperbolehkan = array('png', 'jpg');
    $thumbnail = $_FILES['thumbnail']['name'];
    $x = explode('.', $thumbnail);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['thumbnail']['size'];
    $file_tmp = $_FILES['thumbnail']['tmp_name'];

    if (in_array($ekstensi, $extensi_diperbolehkan) === true) {
        if ($ukuran < 10044070) {
            move_uploaded_file($file_tmp, '../assets/images/' . $thumbnail);
            $query = mysqli_query($koneksi, "INSERT INTO tb_user VALUES(null,'$username','$pass','$nama','$alamat','$telp','$status','$thumbnail')");
            if ($query) {
                header("Location: index.php?page=signin");
            } else {
                echo "Gagal";
            }
        } else {
            echo "Ukuran file terlalu besar";
        }
    } else {
        echo "Ekstensi dilarang";
    }
}
?>