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
</head>
<body class="hold-transition sidebar-mini">
<!-- navbar -->
<?php $this->load->view('partials/base_nav'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Laporan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <!-- Page Heading -->              
                    <tr>
                        <td style="vertical-align:middle;">Laporan Data </td>
                        <td style="text-align:center;">
                        <a class="btn btn-sm btn-default" href="#lap_jual_pertanggal" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr> 
      </div>
    </div>
    <div class="card">
            <div class="card-header">              
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Karcis</th>
                  <th>No Plat</th>
                  <th>Tanggal Masuk</th>
                  <th>Tanggal Keluar</th>
                  <th>Lama Parkir</th>
                  <th>Total Harga</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($la as $row) { ?>
                      <tr>
                        <td><?php echo $row['kd_masuk'] ?></td>
                        <td><?php echo $row['plat_masuk'] ?></td>
                        <td><?php echo date('H:i:s',strtotime($row['tgl_jam_masuk'])) ?></td>
                        <td><?php echo date('H:i:s',strtotime($row['tgl_jam_keluar'])) ?></td>
                        <td><?php echo $row['lama_parkir_keluar']; ?></td>
                        <td>Rp <?php echo $row['total_keluar'] ?></td>
                      </tr>
                    <?php } ?>
                </tfoot>
              </table>
            </div>
          </div>
    <!-- /.row -->
    <div class="modal fade" id="lap_jual_pertanggal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Pilih Tanggal</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url('laporan/laportanggal') ?>" target="_blank">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-xs-3" > Dari Tanggal</label>
                            <div class="col-xs-9">
                                <div class='input-group date' id='datepicker' style="width:300px;">
                                    <input type='date' name="mulai" class="form-control" value="" placeholder="Tanggal..." required/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3" > Sampai Tanggal</label>
                            <div class="col-xs-9">
                                <div class='input-group date' id='datepicker' style="width:300px;">
                                    <input type='date' name="sampai" class="form-control" value="" placeholder="Tanggal..." required/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button class="btn btn-info"><span class="fa fa-print"></span> Cetak</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- End of Main Content -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php $this->load->view('partials/base_footer'); ?>

</div>
<!-- ./wrapper -->

<!-- script -->
<?php $this->load->view('partials/base_js'); ?>
</body>
</html>
