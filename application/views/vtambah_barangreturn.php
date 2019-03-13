
          <h1>Tambah Barang Return</h1>
          
          <div class="row">
            <div class="col-md-12">
              <form role="form" id="templatemo-preferences-form" action="<?=base_url();?>barang_return/tambah" method="post">
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="id_return" class="control-label">Kode Return</label>
                    <input type="text" class="form-control" id="id_return" name="id_return">
                  </div>
                </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="kode_barang" class="control-label">Kode Barang</label>
                    <input type="text" class="form-control" id="kode_barang" name="kode_barang">
                  </div>
                </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="nama_barang" class="control-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                  </div>
                  </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="jumlah_barang" class="control-label">Jumlah Barang</label>
                    <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang">
                  </div>
                  </div>
                <div class="row">  
                <div class="col-md-6 margin-bottom-15">
                  <label for="satuan">Satuan</label>
                  <select class="form-control margin-bottom-15" id="satuan" name="satuan">
                     <option>Dus</option>
                     <option>Drum</option>
                     <option>Pail</option>
                     
                  </select> 
                </div>
                  </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="ket" class="control-label">Keterangan</label>
                    <input type="text" class="form-control" id="ket" name="ket">
                  </div>
              </div>  
              <div class="row templatemo-form-buttons">
                <div class="col-md-12">
                  <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                  <input type="reset" class="btn btn-default" name="reset" value="Reset">   
                </div>
              </div>
            </form>
          </div>
        </div>