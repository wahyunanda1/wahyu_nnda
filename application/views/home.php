<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header">
        	<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="float: right;">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Cari barang..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
          <h5><b>Data Barang Elektronik</b></h5>
        </div>
        <div class="card-body">
           <div class="box-body" style="overflow-x: auto;">
              <table id="table-elektronik" class="table table-bordered table-striped" style="text-align: center;">
                  <thead>
                   
		<tr>
			<th>No.</th>
			<th>Tanggal dan Waktu</th>
			<th>Nama Barang</th>
			<th>Kondisi Barang</th>
			<th>Jumlah</th>
		</tr>

		<?php
			include 'koneksi.php';
			$no=1;
			$tampil=mysqli_query($query,"SELECT * FROM tb_elektronik");mysqli_error($query);
			$panggil= mysqli_num_rows($tampil);
			while ($hasil=mysqli_fetch_array($tampil)) {

		?>

		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $hasil['waktu_diinput']; ?></td>
			<td><?php echo $hasil['nama_barang']; ?></td>
			<td><?php echo $hasil['kondisi_barang']; ?></td>
			<td><?php echo $hasil['jumlah']; ?></td>
		</tr>
	
		<?php
			}
			?>


	</table>
                  </tbody>
                </table>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header">
        	<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="float: right;">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Cari barang..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
          <h5><b>Data Barang Non Elektronik</b></h5>
        </div>
        <div class="card-body">
           <div class="box-body" style="overflow-x: auto;">
              <table id=table-nonelektronik class="table table-bordered table-striped" style="text-align: center;">
                  <thead>
                   <tr>
			<th>No.</th>
			<th>Tanggal dan Waktu</th>
			<th>Nama Barang</th>
			<th>Kondisi Barang</th>
			<th>Jumlah</th>
		</tr>

		<?php
			include 'koneksi.php';
			$no=1;
			$tampil=mysqli_query($query,"SELECT * FROM tb_nonelektronik");mysqli_error($query);
			$panggil= mysqli_num_rows($tampil);
			while ($hasil=mysqli_fetch_array($tampil)) {

		?>

		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $hasil['waktu_diinput']; ?></td>
			<td><?php echo $hasil['nama_barang']; ?></td>
			<td><?php echo $hasil['kondisi_barang']; ?></td>
			<td><?php echo $hasil['jumlah']; ?></td>
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
<script>
  $(document).ready(function() {
  $('#table-elektronik').DataTable();
  $('#table-nonelektronik').DataTable();
});
</script>