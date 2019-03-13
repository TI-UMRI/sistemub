
          <h1>Tambah Supplier</h1>
          
          <div class="row">
            <div class="col-md-12">
              <form role="form" id="templatemo-preferences-form" action="<?=base_url();?>supplier/tambah" method="post">
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="kode_supplier" class="control-label">Kode Supplier</label>
                    <input type="text" class="form-control" id="kode_supplier" name="kode_supplier">
                  </div>
                  </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="nama_supplier" class="control-label">Nama Supplier</label>
                    <input type="text" class="form-control" id="nama_supplier" name="nama_supplier">
                  </div>
                </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="alamat_supplier" class="control-label">Alamat Supplier</label>
                    <input type="text" class="form-control" id="alamat_supplier" name="alamat_supplier">
                  </div>
                </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="telp" class="control-label">Telepon</label>
                    <input type="text" class="form-control" id="telp" name="telp">
                  </div>
                  </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="merk_barang" class="control-label">Merk Barang</label>
                    <input type="text" class="form-control" id="merk_barang" name="merk_barang">
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