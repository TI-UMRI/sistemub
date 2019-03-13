<h1>Laporan Data Barang</h1>

 
<div class="row">
<div class="col-md-12">
<table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Barang</th>
                      <th>Jumlah Barang</th>                     
                    </tr>
                  </thead>
                  <tbody>
        <?php 
        
          $i=1;
          foreach ($nama_barang->result() as $hasil) {
        ?>
                    <tr>
                      <td><?=$i;?></td>
                      <td><?=$hasil->nama_barang;?></td>
                      <?php 
                      $this->load->model('mlaporan_barang');
                      $rekap = $this->mlaporan_barang->rekap_barang($hasil->nama_barang);
                      foreach ($rekap->result() as $row){
                      $jumlah = $row->jumlah;
                      }
                      ?>
                      <td><?=$jumlah;?></td>
                      
                    </tr>
        <?php 
        $i++;
        }
      
        ?>            
                                       
                  </tbody>
                </table>
</div>
</div>

     
