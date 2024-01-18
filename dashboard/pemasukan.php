<?php
session_start();
$judul = 'Laporan Pemasukan';
include(__DIR__.'/../template/header.php');
if (!isset($_SESSION['users'])) {
    return header('location:'. base_url());
}
include(__DIR__.'/../template/navbar_header.php');
include(__DIR__.'/../template/sitebar.php');

include(__DIR__ . '/../Controller/PemasukanController.php');
$totalPemasukan = adminPemasukan()->SALDO;

if (isset($_POST['tambah'])) {
    if (query($_POST)) {
        set_flash_data('berhasil', 'Data Berhasil Disimpan!');
    }
}
?>
<div class="container">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title"><?= $judul?></h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="<?= base_url('dashboard/index.php')?>">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('dashboard/pemasukan.php')?>"><?= $judul?></a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Total Pemasukan : <?= rupiah(adminPemasukan()->SALDO) ?></h4>
								</div>
								<div class="card-body">
                                    <button class="btn btn-secondary btn-border btn-sm mb-3" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus-circle" style="margin-right: 8px;"></i>Tambah Data</button>
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Nasabah</th>
													<th>Nominal</th>
													<th>Keterangan</th>
													<th>Waktu</th>
													<th>Action</th>
												</tr>
											</thead>
                                            <?php $no =1;?>
											<tbody>
                                                <?php foreach (adminData() as $data) { ?>
                                                <tr>
													<td><?= $no++?></td>
													<td><?= $data[3]?></td>
													<td><?= rupiah($data[5])?></td>
													<td><?= $data[6];?></td>
													<td><?= $data[7];?></td>
													<td>
                                                        <button type="button" href="<?= base_url('dashboard/edit-pemasukan.php?detail=').$data['2']?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit"><i class="fas fa-info-circle" style="margin-right: 10px;"></i>Edit</button>
                                                        <a href="<?= base_url('dashboard/hapus-pemasukan.php?detail=').$data['2']?>" class="btn btn-danger btn-sm"><i class="fas fa-info-circle" style="margin-right: 10px;"></i>Hapus</a>
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
		</div>

<!-- Modal Edit Data -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- end modal -->

<!-- Modal Tambah Data -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah <?= $judul?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="">
            <div class="form-group">
                <label for="formGroupExampleInput2">Nama Nasabah</label>
                <input type="text" class="form-control" name="nama" id="formGroupExampleInput2" placeholder="Nama Nasabah" required>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Nominal</label>
                <input type="text" class="form-control" name="nominal" id="formGroupExampleInput2" placeholder="Nominal" required>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Keterangan</label>
                <input type="text" class="form-control" name="ket" id="formGroupExampleInput2" placeholder="Keterangan" requireq>
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="tambah" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- end modal -->

<?php include(__DIR__.'/../template/footer.php'); ?>