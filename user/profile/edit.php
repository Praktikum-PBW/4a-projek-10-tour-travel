<div class="container py-5">
    <div class="row">
        <div class="col-md-12 text-center mb-5">
            <h4>Edit Data Pengguna</h4>
            <hr class="w-25 mx-auto">
        </div>
        <div class="col-md-12 text-center">
            <img src="../assets/images/<?= $_SESSION['thumbnail']?>" style="width: 500px;"
                class="img-thumbnail rounded-circle mb-3">
        </div>
        <div class="col-md-12">
            <form action="index.php?page=profile_update" method="post">
                <input type="hidden" name="id_cust" value="<?=$_SESSION['id_cust']?>">
                <div class="mb-2">
                    <label for="username" class="form-label">Username</label>
                    <input type="username" name="username" id="username" class="form-control"
                        value="<?=$_SESSION['username']?>" required>
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="nama_cust" class="form-label">Nama</label>
                    <input type="text" name="nama_cust" id="nama_cust" class="form-control"
                        value="<?=$_SESSION['nama_cust']?>">
                </div>
                <div class="mb-2">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat"
                        value="<?=$_SESSION['alamat']?>">
                </div>
                <div class="mb-2">
                    <label for="no_telp" class="form-label">Nomor Telepon</label>
                    <input type="tel" name="no_telp" id="no_telp" class="form-control"
                        placeholder="Masukkan Nomor Telepon" value="<?=$_SESSION['no_telp']?>">
                </div>
                <div class="mb-2">
                    <label for="thumbnail" class="form-label">Thumbnail</label>
                    <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                </div>
                <input type="submit" value="Edit" name="edit" class="btn btn-primary">
                <a href="index.php?page=profile&id_cust<?= $_SESSION['id_cust']?>">
                    <input type="button" value="Kembali" class="btn btn-danger"
                        onclick="return confirm('Apakah anda yakin?')">
                </a>

            </form>
        </div>
    </div>
</div>