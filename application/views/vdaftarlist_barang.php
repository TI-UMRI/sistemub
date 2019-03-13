<center><h1>Laporan Data Stock Barang</h1></center>

          
<div class="row">
<div class="col-md-12">
<table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Jumlah Barang</th>
                      <th>Satuan</th>
                      <th>Merek Barang</th>
                      
                    </tr>
                  </thead>
                  <tbody>
        <?php 
        if(count($barang->result()) == 0) {
          echo "<tr><td colspan=5>Data Stock Barang Masih Kosong</td></tr>";
        } else {
          $i=1;
          foreach ($barang->result() as $hasil) {
        ?>
                    <tr>
                      <td><?=$i;?></td>
                      <td><?=$hasil->kode_barang;?></td>
                      <td><?=$hasil->nama_barang;?></td>
                      <td><?=$hasil->jumlah_stok;?></td>
                      <td><?=$hasil->satuan;?></td>
                      <td><?=$hasil->merk_barang;?></td>                     
                    </tr>
        <?php 
        $i++;
        }
      }
        ?>            
                                       
                  </tbody>
                </table>
                <p align="center"><button type="submit" class="btn-btn-primary"><i class="fa fa-print"></i><a href="<?=base_url();?>daftarlist_barang/ekspor">Ekspor PDF</a></button>
    <br><br>
               
</div>
</div>                