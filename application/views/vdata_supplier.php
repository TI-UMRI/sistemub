<h1>Kelola Supplier</h1>

          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="active"><a href="<?=base_url();?>supplier/tambah">Tambah Supplier</a></li>                
              </ul>          
            </div>
          </div> 
<div class="row">
<div class="col-md-12">
<table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Kode Supplier</th>
                      <th>Nama Supplier</th>
                      <th>Alamat Supplier</th>
                      <th>Telepon</th>
                      <th>Merk Barang</th>
                      <th>Ubah</th>
                      <th>Hapus</th>
                    </tr>
                  </thead>
                  <tbody>
        <?php 
        if(count($supplier->result()) == 0) {
          echo "<tr><td colspan=7>Data Supplier Masih Kosong</td></tr>";
        } else {
          $i=1;
          foreach ($supplier->result() as $hasil) {
        ?>
                    <tr>
                      <td><?=$i;?></td>
                      <td><?=$hasil->kode_supplier;?></td>
                      <td><?=$hasil->nama_supplier;?></td>
                      <td><?=$hasil->alamat_supplier;?></td>
                      <td><?=$hasil->telp;?></td>
                      <td><?=$hasil->merk_barang;?></td>
                      <td><a href="<?=base_url();?>supplier/edit/<?=$hasil->kode_supplier;?>" class="btn btn-default">Edit</a></td>
                      <td><a href="<?=base_url();?>supplier/hapus/<?=$hasil->kode_supplier;?>" class="btn btn-link">Delete</a></td>
                    </tr>
        <?php 
        $i++;
        }
      }
        ?>            
                                       
                  </tbody>
                </table>
</div>
<h5><b>PRODUK : </b></h5>
<div class="col-md-1 col-sm-1 col-xs-1">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <img src="<?=base_url();?>/template2/assets/img/ptm.jpg" id="ptmimg" alt=" ptm" />
                        <div class="progress progress-striped active">
                           
</div>
                         <h5></h5>
                    </div>
                </div>
                 <div class="col-md-1 col-sm-1 col-xs-1">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <img src="<?=base_url();?>/template2/assets/img/cst.png" id="cstimg" alt="cst" />
                        <div class="progress progress-striped active">
                           
</div>
                         <h5></h5>
                    </div>
                </div>
                 <div class="col-md-1 col-sm-1 col-xs-1">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <img src="<?=base_url();?>/template2/assets/img/sh.png" id="shimg" alt="sh" />
                        <div class="progress progress-striped active">
                             
</div>
                         <h5></h5>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1">
                    <div class="dashboard-div-wrapper bk-clr-four">
                        <img src="<?=base_url();?>/template2/assets/img/un.jpg" id="unimg" alt=" un" />
                        <div class="progress progress-striped active">
                             
</div>
                         <h5></h5>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <img src="<?=base_url();?>/template2/assets/img/ty.jpg" id="tyimg" alt=" ty" />
                        <div class="progress progress-striped active">
                             
</div>
                         <h5></h5>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <img src="<?=base_url();?>/template2/assets/img/tt.jpg" id="ttimg" alt=" tt" />
                        <div class="progress progress-striped active">
                             
</div>
                         <h5></h5>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <img src="<?=base_url();?>/template2/assets/img/tp.jpg" id="tpimg" alt="tp" />
                        <div class="progress progress-striped active">
                             
</div>
                         <h5></h5>
                    </div>
                    </div>
                 <div class="col-md-1 col-sm-1 col-xs-1">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <img src="<?=base_url();?>/template2/assets/img/o.jpg" id="oimg" alt="o" />
                        <div class="progress progress-striped active">
                             
</div>
                         <h5></h5>
                    </div>
</div>
</div>                