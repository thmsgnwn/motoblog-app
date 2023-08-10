<h2 class="mt-2 mb-3 mx-2">Data Klien Perusahaan Kami</h2>

<div class="container">
    <div class="row">
        <div class="col">

            <table border="1px" class="table table-bordered table-striped ">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Hp</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                <?php

                include_once 'db.php';
                
                $query = "SELECT * FROM klien";
                $ambil = mysqli_query($link, $query);
                $no=1;
                while($row=mysqli_fetch_array($ambil)) { ?>
                    
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $row['nama'] ?></td>
                      <td><?= $row['email'] ?></td>
                      <td><?= $row['no_hp'] ?></td>
                      <td><?= $row['alamat'] ?></td>
                      <td><?= $row['status'] ?></td>
                    <td>
                         <a href="admin.php?page=editk&id=<?= $row['id'] ?>" class='btn btn-warning badge'>Edit</a> 
                         <a href="pages/hapusKlien.php?id=<?= $row['id']?>" onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger badge">Hapus</a>
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