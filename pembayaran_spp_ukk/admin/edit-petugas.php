<?php
    $id_petugas = $_GET['id_petugas'];
    include '../koneksi.php';
    $sql = "SELECT*FROM petugas WHERE id_petugas = '$id_petugas'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
?>

<h5>Halaman edit petugas.</h5>
<a href="?url=petugas" class="btn btn-primary"> Kembali</a>

<hr>
    <form action="?url=proses-edit-petugas&id_petugas=<?= $id_petugas; ?>" method="post">

        <div class="form-group mb-2">
            <label>Username</label>
            <input value="<?= $data['username'] ?>" type="text" name="username" class="form-control" required>
        </div>

        <div class="form-group mb-2">
            <label>Password</label>
            <input value="<?= $data['password'] ?>" type="password" name="password" class="form-control" required>
        </div>

        <div class="form-group mb-2">
            <label>Nama Petugas</label>
            <input value="<?= $data['nama_petugas'] ?>" type="text" name="nama_petugas" class="form-control" required>
        </div>
        
        <div class="form-group mb-2">
            <select name="level" class="form-control" required>
                <option value="<?= $data['level'] ?>"> <?= $data['level'] ?> </option>
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success"> Simpan </button>
            <button type="reset" class="btn btn-warning"> Reset </button>
        </div>
    </form>