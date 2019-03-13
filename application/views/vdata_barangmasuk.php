<h1>Kelola Barang Masuk</h1>

          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="active"><a href="<?=base_url();?>barang_masuk/tambah">Tambah Barang Masuk</a></li>                
              </ul>          
            </div>
          </div> 
<div class="row">
<div class="col-md-12">
<table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Kode Masuk</th>
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Jumlah Barang</th>
                      <th>Satuan</th>
                      <th>Nama Supplier</th>
                      <th>Tanggal</th>
                      <th>Ubah</th>
                      <th>Hapus</th>
                    </tr>
                  </thead>
                  <tbody>
        <?php 
        if(count($barang_masuk->result()) == 0) {
          echo "<tr><td colspan=7>Data Barang Masuk Masih Kosong</td></tr>";
        } else {
          $i=1;
          foreach ($barang_masuk->result() as $hasil) {
        ?>
                    <tr>
                      <td><?=$i;?></td>
                      <td><?=$hasil->id_masuk;?></td>
                      <td><?=$hasil->kode_barang;?></td>
                      <td><?=$hasil->nama_barang;?></td>
                      <td><?=$hasil->jumlah_barang;?></td>
                      <td><?=$hasil->satuan;?></td>
                      <td><?=$hasil->nama_supplier;?></td>
                      <td><?=$hasil->tanggal;?></td>
                      <td><a href="<?=base_url();?>barang_masuk/edit/<?=$hasil->id_masuk;?>" class="btn btn-default">Edit</a></td>
                      <td><a href="<?=base_url();?>barang_masuk/hapus/<?=$hasil->id_masuk;?>" class="btn btn-link">Delete</a></td>
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