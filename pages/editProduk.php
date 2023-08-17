<?php

include_once('db.php');

$id=$_GET['id'];

$update = "SELECT * FROM produk WHERE id = '$id'";
$query = mysqli_query($link, $update);
$row = mysqli_fetch_array($query);

?>

<h1>Form Ubah Data Produk</h1>
        <form method="POST" action="pages/prosesEditProduk.php?id=<?= $id; ?>" enctype="multipart/form-data">

            <div class="mb-2">
                <input type="hidden" class="form-control" name="id" value="<?= $row['id'] ?>">
                <label class="form-label">Kode Seri</label>
                <input type="text" class="form-control" name="kode_seri" value="<?= $row['kode_seri'] ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" value="<?= $row['nama_produk'] ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">Jenis Produk</label>
                <select class="form-select" name="jenis_produk" aria-label="Default select example">
                    <option selected>-- Pilih Kategori --</option>
                    <option value="Original/Asli">Asli</option>
                    <option value="KW/Tiruan">Tiruan</option>
                    <option value="Modifikasi">Modifikasi</option>
                </select>
            </div>
            <div class="mb-2">
                <label class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" value="<?= $row['harga'] ?>">
            </div>
            
            <div class="mb-2">
                <label class="form-label">Jumlah</label>
                <input type="text" class="form-control" name="jumlah" value="<?= $row['jumlah'] ?>">
            </div>
           
            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
        </form>
        