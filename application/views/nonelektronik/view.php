<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header">
          <h4><b>Data Barang Non Elektronik</b></h4>
        </div>
        <div class="card-body">
           <div class="col-md-4">
                <a href="<?= base_url('nonelektronik/add');  ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Barang</a>
              </div>
              <br>
           <div class="box-body" style="overflow-x: auto;">
              <table id="example1" class="table table-bordered table-striped" style="text-align: center;">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Tanggal dan Waktu</th>
                      <th>Nama Barang</th>
                      <th>Kondisi Barang</th>
                      <th>Jumlah</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php 
                          $id_barang = 1;
                          foreach($tb_nonelektronik as $tb_nlk) {
                     ?>
                    <tr>
                      <td><?= $id_barang ++ ?></td>
                      <td><?= $tb_nlk->waktu_diinput ?></td>
                      <td><?= $tb_nlk->nama_barang ?></td>
                      <td><?= $tb_nlk->kondisi_barang ?></td>
                      <td><?= $tb_nlk->jumlah ?></td>
                      <td>   
                        <a href="<?= base_url('nonelektronik/edit/'.$tb_nlk->id_barang) ?>" class="btn btn-success" style="font-size: 13px;"><i class="fa fa-edit"></i> Ubah</a>
                        <a href="<?= base_url('nonelektronik/hapus/'.$tb_nlk->id_barang) ?>" class="btn btn-danger" style="font-size: 13px;" onclick="return confirm('Data barang akan dihapus, Yakin?');" ><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a> 
                      </td>
                      
                    </tr>   
                  <?php } ?>
                  </tbody>
                </table>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>