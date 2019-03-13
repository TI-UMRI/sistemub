
          <h1>Tambah Konsumen</h1>
          
          <div class="row">
            <div class="col-md-12">
              <form role="form" id="templatemo-preferences-form" action="<?=base_url();?>konsumen/tambah" method="post">
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="kode_konsumen" class="control-label">Kode Konsumen</label>
                    <input type="text" class="form-control" id="kode_konsumen" name="kode_konsumen">
                  </div>
                  </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="nama_konsumen" class="control-label">Nama Konsumen</label>
                    <input type="text" class="form-control" id="nama_konsumen" name="nama_konsumen">
                  </div>
                </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="alamat_konsumen" class="control-label">Alamat Konsumen</label>
                    <input type="text" class="form-control" id="alamat_konsumen" name="alamat_konsumen">
                  </div>
                </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="telepon" class="control-label">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon">
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