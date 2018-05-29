<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/home/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/home/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/home/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/home/dist/css/skins/_all-skins.min.css">
</head>
<body>
<section class="content">
        <div class="callout callout-info">
          <h4>Selamat Datang di SIPEs-WEB!</h4>
          <p>SIPEs-WEB merupakan Sistem Informasi Perpustakaan berbasis web mengenai buku-buku dan anggota diperpustakaan yang dikembangkan ke dalam sistem informasi online. Sehingga informasi dapat diakses dan di perbaharui dengan mudah.</p>
        </div>
                    <div class="row" style="margin-bottom:5px;">


                        <div class="col-md-4">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-blue"><i class="ion-ios7-people-outline"></i></span>
                                <div class="sm-st-info">
                                    <span>0</span>
                                    Jumlah Anggota
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-violet"><i class="fa fa-book"></i></span>
                                <div class="sm-st-info">
                                    <span>0</span>
                                    Jumlah Buku
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-red"><i class="fa fa-archive"></i></span>
                                <div class="sm-st-info">
                                    <span>0</span>
                                    Jumlah Peminjaman Buku
                                </div>
                            </div>
                        </div>
          
                    </div>

                    <!-- Main row -->
             <div class="row">

                        <div class="col-md-8">
                            <!--earning graph start-->
                              <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik Pengunjung</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
                                        <!--earning graph end-->

                                    </div>
                                    <div class="col-lg-4">

                                        <!--chat start-->
                                        <section class="panel">
                                            <header class="panel-heading">
                                                Pemberitahuan
                                            </header>
                                                <div class="panel-body" id="noti-box">
                                                <?php
                                                $tampil=mysql_query("select * from data_anggota order by npm desc limit 1");
                                                while($data2=mysql_fetch_array($tampil)){
                                                ?>
                                                    <div class="alert alert-block alert-danger">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong><?php echo $data2['nama'];?></strong>, Telah terdaftar menjadi anggota.
                                                    </div>
                                                    <?php } ?>
                                                    
                                                <?php
                                                $tampil=mysql_query("select * from data_buku order by id desc limit 1");
                                                while($data4=mysql_fetch_array($tampil)){
                                                ?>
                                                    <div class="alert alert-info">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong><?php echo $data4['judul']; ?></strong>, Buku baru telah ditambahkan.
                                                    </div>
                                                <?php } ?>
                                                   
                                        </section>
                      </div>

                  </div>
          
              <!-- row end -->
                </section><!-- /.content -->
<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/home/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/home/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>assets/home/bower_components/chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/home/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/home/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/home/dist/js/demo.js"></script>


</script>
</body>
</html>


 