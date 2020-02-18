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
              <h1>Parkir Keluar</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url('Masuk') ?>">Kendaraan Masuk</a></li>
              </ol>
            </div>
          </div>
          </div>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">          
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">Input Kendaraan Keluar</h3>
                  </div>
                  <form action="<?php echo base_url('keluar/kendaraankeluar') ?>" method="post">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="">Kode Karcis</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-barcode"></i></span>
                            <input type="text" class="form-control" id="" placeholder="Kode Karcis" name="karcis">
                          </div>
                        </div>
                        <?php echo $this->session->flashdata('pesan') ?>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary pull-right">Cek Karcis</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card card-default">
                  <div class="card-header">
                    <h3 class="card-title">Data Kendaraan Keluar Hari <?php echo hari_indo(date('N',strtotime(date('Y-m-d')))).', '.tanggal_indo(date('Y-m-d',strtotime(''.date('Y-m-d').''))) ?></h3>
                  </div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Kode Karcis</th>
                        <th>Plat Nomor</th>
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                        <th>Lama Parkir</th>
                        <th>Total Bayar</th>
                        <th>Penjaga</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody> 
                    <?php foreach ($keluar as $row) { ?>
                      <tr>
                        <td><?php echo $row['kd_masuk'] ?></td>
                        <td><?php echo $row['plat_masuk'] ?></td>
                        <td><?php echo date('H:i:s',strtotime($row['tgl_jam_masuk'])) ?></td>
                        <td><?php echo date('H:i:s',strtotime($row['tgl_jam_keluar'])) ?></td>
                        <td><?php echo $row['lama_parkir_keluar']; ?></td>
                        <td>Rp <?php echo $row['total_keluar'] ?></td>
                        <td><?php echo $row['create_keluar'] ?></td>
                        <td><a href="<?php echo base_url('keluar/cetakstruk/'.$row['kd_keluar']) ?>"><i class="fa fa-barcode"></i></a></td>
                      </tr>
                    <?php } ?>
                    </tfoot>
                  </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
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