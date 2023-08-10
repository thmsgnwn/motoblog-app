<h2>Produk Kami</h2>

<div class="container">
    <div class="row">
        <div class="col">

            <table border="1px" class="table table-bordered table-striped ">
                <tr>
                    <th>No</th>
                    <th>Kode Seri</th>
                    <th>Gambar</th>
                    <th>Nama Produk</th>
                    <th>Jenis Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
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
                    </tr>

                
            <?php
                $no++;

            }
            
            ?>

            </table>
        </div>
        
    </div>
</div>
