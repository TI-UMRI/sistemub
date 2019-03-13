<center><h1>Laporan Data Barang Keluar</h1></center>

          
<div class="row">
<div class="col-md-12">
<table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Kode Keluar</th>
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Jumlah Barang</th>
                      <th>Satuan</th>
                      <th>Nama Konsumen</th>
                      <th>Tanggal</th>
                      
                    </tr>
                  </thead>
                  <tbody>
        <?php 
        if(count($barang_keluar->result()) == 0) {
          echo "<tr><td colspan=5>Data Barang Keluar Masih Kosong</td></tr>";
        } else {
          $i=1;
          foreach ($barang_keluar->result() as $hasil) {
        ?>
                    <tr>
                      <td><?=$i;?></td>
                      <td><?=$hasil->id_keluar;?></td>
                      <td><?=$hasil->kode_barang;?></td>
                      <td><?=$hasil->nama_barang;?></td>
                      <td><?=$hasil->jumlah_barang;?></td>
                      <td><?=$hasil->satuan;?></td>
                      <td><?=$hasil->nama_konsumen;?></td>
                      <td><?=$hasil->tanggal;?></td>                     
                    </tr>
        <?php 
        $i++;
        }
      }
        ?>            
                                       
                  </tbody>
                </table>
                <p align="center"><button type="submit" class="btn-btn-primary"><i class="fa fa-print"></i><a href="<?=base_url();?>daftarlist_barangkeluar/ekspor">Ekspor PDF</a></button>
    <br><br>
               
</div>
</div>                