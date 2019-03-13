
          <h1>Edit Barang</h1>

          <div class="row">
            <div class="col-md-12">
              <form role="form" id="templatemo-preferences-form" action="<?=base_url();?>barang/edit/<?=$kode_barang;?>" method="post">

  <?php 
  foreach ($barang->result() as $hasil) {
  ?> 
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="kode_barang" class="control-label">Kode Barang</label>
                    <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?=$hasil->kode_barang;?>">
                  </div>
                </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="nama_barang" class="control-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?=$hasil->nama_barang;?>">
                  </div>
                  </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="jumlah_stok" class="control-label">Jumlah Stok</label>
                    <input type="text" class="form-control" id="jumlah_stok" name="jumlah_stok" value="<?=$hasil->jumlah_stok;?>">
                  </div>
                  </div>
                <div class="row">  
                <div class="col-md-6 margin-bottom-15">
                  <label for="satuan">Satuan</label>
                  <select class="form-control margin-bottom-15" id="satuan" name="satuan">
                    <option><?=$hasil->satuan;?></option>
                    <option>------------------</option>
                    <option>Dus</option>
                    <option>Drum</option>
                    <option>Pail</option>
                   
                  </select>                   
                </div>
                </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="merk_barang" class="control-label">Merk Barang</label>
                    <input type="text" class="form-control" id="merk_barang" name="merk_barang" value="<?=$hasil->merk_barang;?>">
                  </div>
              </div>  
              <div class="row templatemo-form-buttons">
                <div class="col-md-12">
                  <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                  <input type="reset" class="btn btn-default" name="reset" value="Reset">   
                </div>
              </div>
    <?php 
    }
    ?>          
            </form>
          </div>
        </div>