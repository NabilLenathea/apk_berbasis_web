<?php
    $nisn = $_GET['nisn'];
    $kekurangan = $_GET['kekurangan'];
    include '../koneksi.php';
    $sql = "SELECT * FROM siswa, spp, kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND nisn='$nisn'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
?>

<h5>Halaman Edit Data kelas.</h5>
<a href="?url=kelas" class="btn btn-primary"> Kembali</a>

<hr>
    <form action="?url=proses-edit-kelas&id_kelas=<?= $id_kelas; ?>" method="post">

        <div class="form-group mb-2">
            <label>Nama Petugas</label>
            <input value="<?= $_SESSION['nama_petugas'] ?>" disabled class="form-control" required>
        </div>

        <div class="form-group mb-2">
            <label>NISN</label>
            <input disabled value="<?= $data['nisn'] ?>" type="text" class="form-control" required>
        </div>

        <div class="form-group mb-2">
            <label>Nama Siswa</label>
            <input disabled value="<?= $data['nisn'] ?>" type="text" class="form-control" required>
        </div>

        <div class="form-group mb-2">
            <label>Tanggal Bayar</label>
            <input type="date" name="tgl_bayar" class="form-control" required>
        </div>

        <div class="form-group mb-2">
            <label> Bulan Bayar </label>

            <select name="bulan_dibayar" class="form-control" required>
                <option value=""> Pilih Bulan Dibayar </option>
                <option value="Januari"> Januari </option>
                <option value="Februari"> Februari </option>
                <option value="Maret"> Maret </option>
                <option value="April"> April </option>
                <option value="Mei"> Mei </option>
                <option value="Juni"> Juni </option>
                <option value="Juli"> Juli </option>
                <option value="Agustus"> Agustus </option>
                <option value="September"> September </option>
                <option value="Oktober"> Oktober </option>
                <option value="November"> November </option>
                <option value="Desember"> Desember </option>
            </select>

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success"> Simpan </button>
            <button type="reset" class="btn btn-warning"> Reset </button>
        </div>
    </form>