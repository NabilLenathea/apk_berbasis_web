<h5>Halaman Tambah Data Kelas.</h5>
<a href="?url=kelas" class="btn btn-primary"> Kembali</a>

<hr>
    <form action="?url=proses-tambah-kelas" method="post">

        <div class="form-group mb-2">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" placeholder="Masukkan Nama Kelas" required>
        </div>

        <div class="form-group mb-2">
            <label>Kompetensi Keahlian</label>
            <input type="text" name="kompetensi_keahlian" class="form-control" placeholder="Masukkan Kompetensi Keahlian" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success"> Simpan </button>
            <button type="reset" class="btn btn-warning"> Reset </button>
        </div>
    </form>