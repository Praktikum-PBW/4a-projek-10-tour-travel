<?php
if ($_SESSION['id_cust']) {
?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h4>Profile</h4>
            <img src="../assets/images/<?= $_SESSION['thumbnail']?>" style="width: 500px;"
                class="img-thumbnail rounded-circle mb-3">
        </div>
        <div class="col-md-12">
            <input type="hidden" name="id_cust" value="<?=$_SESSION['id_cust']?>">
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="username" name="username" id="username" class="form-control" disabled
                    value="<?=$_SESSION['username']?>">
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" disabled>
            </div>
            <div class="mb-2">
                <label for="nama_cust" class="form-label">Nama</label>
                <input type="text" name="nama_cust" id="nama_cust" class="form-control" disabled
                    value="<?=$_SESSION['nama_cust']?>">
            </div>
            <div class="mb-2">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" disabled
                    value="<?=$_SESSION['alamat']?>">
            </div>
            <div class="mb-2">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
                <input type="text" name="no_telp" id="no_telp" class="form-control" disabled
                    value="<?=$_SESSION['no_telp']?>">
            </div>
            <a href="indexs.php?page=profile_edit&id_cust=<?=$_SESSION['id_cust']?>" class="btn btn-primary">Edit</a>
        </div>
    </div>
</div>

<?php
} else {
    header("Location:../../signin.php");
}
?>