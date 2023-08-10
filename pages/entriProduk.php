<?php

if( isset($_POST['submit']) ){
 
    $img  = $_FILES['gambar']['name'];
    $asal = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($asal, 'img/' .$img);

}

?>

<h1>Entri Data Buku</h1>
        <form method="POST" action="prosesProduk.php" enctype="multipart/form-data">

            <div class="mb-2">
                <label class="form-label">Kode Seri Produk</label>
                <input type="text" class="form-control" name="ks">
            </div>

            <div class="mb-2">
                <label class="form-label">Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>

            <div class="mb-2">
                <label class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="np">
            </div>

            <div class="mb-2">
                <label class="form-label">Jenis Produk</label>
                <select class="form-select" name="jp" aria-label="Default select example">
                    <option selected>-- Pilih Kategori --</option>
                    <option value="Sistem Informasi">Asli</option>
                    <option value="Ilmu Komputer">Tiruan</option>
                    <option value="Buku Lainnya">Modifikasi</option>
                </select>
            </div>

            <div class="mb-2">
                <label class="form-label">Harga Produk</label>
                <input type="text" class="form-control" name="har">
            </div>

            <div class="mb-2">
                <label class="form-label">Jumlah</label>
                <input type="text" class="form-control" name="jum">
            </div> 
            
            
            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
        </form>
        