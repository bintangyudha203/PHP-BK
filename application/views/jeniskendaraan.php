
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <!-- Responsif Program -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- css -->
  <?php $this->load->view('partials/base_css'); ?>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/datatables/dataTables.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- navbar -->
<?php $this->load->view('partials/base_nav'); ?>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <!-- Page Header -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Jenis Kendaraan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('kendaraan') ?>">Jenis Kendaraan</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="card">
            <div class="card-header">
              <h3 class="card-title"><a href="<?php echo base_url('jeniskendaraan/tambahkendaraan') ?>" class="btn btn-primary">Tambah Jenis</a></h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Kendaraan</th>
                  <th>Nama Jenis</th>
                  <th>Tarif</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
              <?php foreach ($jenis as $row) { ?>
                <tr>
                  <td><?php echo $row['kd_kendaraan'] ?></td>
                  <td><?php echo strtoupper($row['nama_kendaraan']) ?></td>
                  <td>Rp <?php echo $row['harga_kendaraan'] ?></td>
                  <td align="center"><a href="<?php echo base_url('masuk/delete/'.$row['kd_kendaraan']) ?>"><i class="fa fa-trash"></i></a></td>
                </tr>
              <?php } ?>
                </tfoot>
              </table>
            </div>
          </div>

    </section>
  </div>

  <?php $this->load->view('partials/base_footer'); ?>

</div>

<?php $this->load->view('partials/base_js'); ?>
<script src="<?php echo base_url('assets') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets') ?>/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
