<h1 class="mt-2 mb-3 mx-2"> Data Kelola Gallery</h1>

<div class="container">
    <div class="row">
        <div class="col">

        <a href="admin.php?page=entrig"><input class="submit btn btn-primary mb-3 p-1" name="submit" value="Tambah Data Gallery"></a>
        <a href="report/laporanBuku.php"><input class="submit btn btn-secondary mb-3 p-1" name="submit" value="Cetak Data"></a>

            <table border="1px" class="table table-bordered table-striped ">
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>

                <?php

                include_once 'db.php';
                
                $query = "SELECT * FROM gallery";
                $ambil = mysqli_query($link, $query);
                $no=1;
                while($row=mysqli_fetch_array($ambil)) { ?>
                    
                    <tr>
                      <td><?= $no ?></td>
                      <td> <img src="img/download.jpg" width="50"></td>
                      <td><?= $row['judul'] ?></td>
                      <td><?= $row['keterangan'] ?></td>
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