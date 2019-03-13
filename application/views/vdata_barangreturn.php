<h1>Kelola Barang Return</h1>

          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="active"><a href="<?=base_url();?>barang_return/tambah">Tambah Barang Return</a></li>                
              </ul>          
            </div>
          </div> 
<div class="row">
<div class="col-md-12">
<table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Kode Return</th>
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Jumlah Barang</th>
                      <th>Satuan</th>
                      <th>Keterangan</th>
                      <th>Ubah</th>
                      <th>Hapus</th>
                    </tr>
                  </thead>
                  <tbody>
        <?php 
        if(count($barang_return->result()) == 0) {
          echo "<tr><td colspan=7>Data Barang Return Masih Kosong</td></tr>";
        } else {
          $i=1;
          foreach ($barang_return->result() as $hasil) {
        ?>
                    <tr>
                      <td><?=$i;?></td>
                      <td><?=$hasil->id_return;?></td>
                      <td><?=$hasil->kode_barang;?></td>
                      <td><?=$hasil->nama_barang;?></td>
                      <td><?=$hasil->jumlah_barang;?></td>
                      <td><?=$hasil->satuan;?></td>
                      <td><?=$hasil->ket;?></td>
                      <td><a href="<?=base_url();?>barang_return/edit/<?=$hasil->id_return;?>" class="btn btn-default">Edit</a></td>
                      <td><a href="<?=base_url();?>barang_return/hapus/<?=$hasil->id_return;?>" class="btn btn-link">Delete</a></td>
                    </tr>
        <?php 
        $i++;
        }
      }
        ?>            
                                       
                  </tbody>
                </table>
</div>
</div>                