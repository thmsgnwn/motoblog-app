<h1>Form Masukan Data Klien</h1>
        <form method="POST" action="pages/prosesKlien.php" enctype="multipart/form-data">

            <div class="mb-2">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>

            <div class="mb-2">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
            </div>

            <div class="mb-2">
                <label class="form-label">Nomor Hp</label>
                <input type="text" class="form-control" name="no_hp">
            </div>

            <div class="mb-2">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat">
            </div>

            <div class="mb-2">
                <label class="form-label">Status Klien</label>
                <select class="form-select" name="status" aria-label="Default select example">
                    <option selected>-- Pilih Kategori --</option>
                    <option value="Agent">Agent</option>
                    <option value="Costumer">Costumer</option>
                </select>
            </div>
            
            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
        </form>
        