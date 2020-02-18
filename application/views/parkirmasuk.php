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
              <h1>Parkir Masuk</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url('Keluar') ?>">Kendaraan Keluar</a></li>
              </ol>
            </div>
          </div>
          </div>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">Input Kendaraan Masuk</h3>
                  </div>
                  <form action="<?php echo base_url('masuk/kendaraanmasuk') ?>" method="post">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kendaraan</label>
                        <select class="form-control" name="jenis" required="">
                          <option value="" selected disabled="">Pilih Kendaraan</option>
                          <?php foreach ($jenis as $row) { ?>
                          <option value="<?php echo $row['kd_kendaraan'] ?>"><?php echo strtoupper($row['nama_kendaraan']) ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="">Nomor Plat</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><input class="form-control" type="text" name="plat" size="7" value="B"></span>
                            <input type="number" class="form-control" id="" placeholder="Nomor Plat" name="nomor">
                            <span class="input-group-text"><input class="form-control" type="text" name="back" size="10" ></span>
                          </div>
                        </div>
                       <?php echo $this->session->flashdata('pesan') ?>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary pull-right">Cetak Tiket</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card card-default">
                  <div class="card-header">
                    <h3 class="card-title">Data Kendaraan Masuk Hari <?php echo hari_indo(date('N',strtotime(date('Y-m-d')))).', '.tanggal_indo(date('Y-m-d',strtotime(''.date('Y-m-d').''))) ?></h3>
                  </div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Kode Karcis</th>
                        <th>Plat Nomor</th>
                        <th>Jenis</th>
                        <th>Jam Masuk</th>
                        <th>Penjaga</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($masuk as $row) { ?>
                      <tr>
                        <td><?php echo $row['kd_masuk'] ?></td>
                        <td><?php echo $row['plat_masuk'] ?></td>
                        <td><?php echo strtoupper($row['nama_kendaraan']) ?></td>
                        <td><?php echo date('H:i:s',strtotime($row['tgl_masuk'])) ?></td>
                        <td><?php echo $row['create_masuk'] ?></td>
                        <td><a href="<?php echo base_url('masuk/cetakstruk/'.$row['kd_masuk']) ?>"><i class="fa fa-barcode"></i></a> | <a href="<?php echo base_url('masuk/delete/'.$row['kd_masuk']) ?>"><i class="fa fa-trash"></i></a></td>
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