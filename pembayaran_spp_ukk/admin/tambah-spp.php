<h5>Halaman Tambah Data SPP.</h5>
<a href="?url=spp" class="btn btn-primary"> Kembali</a>

<hr>
    <form action="?url=proses-tambah-spp" method="post">

        <div class="form-group mb-2">
            <label>Tahun</label>
            <input type="number" name="tahun" maxlength="4" class="form-control" placeholder="Masukkan Tahun" required>
        </div>

        <div class="form-group mb-2">
            <label>Nominal</label>
            <input type="number" name="nominal" maxlength="13" class="form-control" placeholder="Masukkan Nominal" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success"> Simpan </button>
            <button type="reset" class="btn btn-warning"> Reset </button>
        </div>
    </form>