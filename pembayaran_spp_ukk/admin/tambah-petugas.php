<h5>Halaman Tambah petugas.</h5>
<a href="?url=petugas" class="btn btn-primary"> Kembali</a>

<hr>
    <form action="?url=proses-tambah-petugas" method="post">

        <div class="form-group mb-2">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="form-group mb-2">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="form-group mb-2">
            <label>Nama Petugas</label>
            <input type="text" name="nama_petugas" class="form-control" required>
        </div>
        
        <div class="form-group mb-2">
            <select name="level" class="form-control" required>
                <option value=""> Pilih Level Petugas </option>
                <option value="admin">Admin</option>
                <option value="petugas">Petugas </option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success"> Simpan </button>
            <button type="reset" class="btn btn-warning"> Reset </button>
        </div>
    </form>