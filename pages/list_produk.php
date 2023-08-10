<h1 class="mt-2 mb-3 mx-2"> Data Kelola Produk</h1>

<div class="container">
    <div class="row">
        <div class="col">

        <a href="admin.php?page=entrip"><input class="submit btn btn-primary mb-3 p-1" name="submit" value="Tambah Data Produk"></a>
        <a href="report/laporanBuku.php"><input class="submit btn btn-secondary mb-3 p-1" name="submit" value="Cetak Data"></a>

            <table border="1px" class="table table-bordered table-striped ">
                <tr>
                    <th>No</th>
                    <th>Kode Seri</th>
                    <th>Gambar</th>
                    <th>Nama Produk</th>
                    <th>Jenis Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                </tr>

                <?php

                include_once 'db.php';
                
                $query = "SELECT * FROM produk";
                $ambil = mysqli_query($link, $query);
                $no=1;
                while($row=mysqli_fetch_array($ambil)) { ?>
                    
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $row['kode_seri'] ?></td>
                      <td> <img src="img/download.jpg" width="50"></td>
                      <td><?= $row['nama_produk'] ?></td>
                      <td><?= $row['jenis_produk'] ?></td>
                      <td><?= $row['harga'] ?></td>
                      <td><?= $row['jumlah'] ?></td>
                    <td>
                         <a href="admin.php?p=edit&id=<?= $row['id'] ?>" class='btn btn-warning badge'>Edit</a> 
                         <a href="proses/hapusBuku.php?id=<?= $row['id']?>" onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger badge">Hapus</a>
                      </td>
                    </tr>

                
            <?php
                $no++;

            }
            
            ?>

            </table>
        </div>
        
    </div>
</div>