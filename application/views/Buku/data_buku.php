 <section class="content">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <b>Data Buku</b>

                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body table-responsive">
                                    <div class="box-tools m-b-15">
                                    <form action="anggota.php" method="POST">
                                        <div class="input-group">
                                        <input type='text' class="form-control input-sm pull-right" style="width: 150px;"  name='qcari' placeholder='Cari Buku' required /> 
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default" type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>    
                                    </div>
                                    <?php
                    $query1="select * from data_buku";
                    
                    if(isset($_POST['qcari'])){
	               $qcari=$_POST['qcari'];
	               $query1="SELECT * FROM  data_buku 
	               where judul like '%$qcari%'
	               or pengarang like '%$qcari%'  ";
                    }
                    $tampil=mysql_query($query1) or die(mysql_error());
                    ?>
                                    <table id="example" class="table table-hover table-bordered">
                  <thead>
                      <tr>
                        <th><center>Judul </center></th>
                        <th><center>Pengarang </center></th>
                        <th><center>Tahun Terbit </center></th>
                        <th><center>Penerbit </center></th>
                        <th><center>Jumlah </center></th>
                      </tr>
                  </thead>
                     <?php while($data=mysql_fetch_array($tampil))
                    { ?>
                    <tbody>
                    <tr>
                    <td><center><?php echo $data['judul']; ?></center></td>
                    <td><center><?php echo $data['pengarang']; ?></center></td>
                    <td><center><?php echo $data['th_terbit'];?></center></td>
                    <td><center><?php echo $data['penerbit'];?></center></td>
                    <td><center><?php echo $data['jumlah_buku'];?></center></td>
                    <?php   
              } 
              ?>
                   </tbody>
                   </table>
                   
                  <?php $tampil=mysql_query("select * from data_buku order by id");
                        $buku=mysql_num_rows($tampil);
                    ?>
                  
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->