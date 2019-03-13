<h1>Kelola Barang Keluar</h1>

          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="active"><a href="<?=base_url();?>barang_keluar/tambah">Tambah Barang Keluar</a></li>                
              </ul>          
            </div>
          </div> 
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
                      <th>Ubah</th>
                      <th>Hapus</th>
                    </tr>
                  </thead>
                  <tbody>
        <?php 
        if(count($barang_keluar->result()) == 0) {
          echo "<tr><td colspan=7>Data Barang Keluar Masih Kosong</td></tr>";
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
                      <td><a href="<?=base_url();?>barang_keluar/edit/<?=$hasil->id_keluar;?>" class="btn btn-default">Edit</a></td>
                      <td><a href="<?=base_url();?>barang_keluar/hapus/<?=$hasil->id_keluar;?>" class="btn btn-link">Delete</a></td>
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