<section class="content">

                    <div class="text-left" style="margin-top: 10px;">
                <p>
                 <a href="<?php echo base_url();?>index.php/anggota/tambah" class="btn btn-primary btn-small">Tambah Anggota <i class="fa fa-plus"></i></a>
               </p>
                </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <b><center>Data Anggota</center></b>

                                </header>
                              
                                <div class="panel-body table-responsive">
                                    <div class="box-tools m-b-15">  
                                    </div>
                                    <?php
                    $query1="select * from data_anggota";
                    
                    if(isset($_POST['qcari'])){
                   $qcari=$_POST['qcari'];
                   $query1="SELECT * FROM  data_anggota 
                   where no_induk like '%$qcari%'
                   or nama like '%$qcari%'  ";
                    }
                    $tampil=mysql_query($query1) or die(mysql_error());
                    ?>
              <table id="example" class="table table-hover table-bordered">
                  <thead>
                      <tr>
                        <th><center>NPM </center></th>
                        <th><center>Nama </center></th>
                        <th><center>Jenis Kelamin </center></th>
                        <th><center>Kelas </center></th>
                        <th><center>Tempat Lahir </center></th>
                        <th><center>Alamat </center></th>
                        <th><center>Aksi</center></th>
                      </tr>
                  </thead>
                     <?php while($data=mysql_fetch_array($tampil))
                    { ?>
                    <tbody>
                    <tr>
                    <td><?php echo $data['npm']; ?></td>
                    <td><?php echo $data['nama']; ?></a></td>
                    <td><?php echo $data['jk'];?></td>
                    <td><?php echo $data['kelas'];?></td>
                    <td><?php echo $data['ttl'];?></td>
                    <td><?php echo $data['alamat'];?></td>
                    <td>
                      <center>
                        <div id="thanks">
                          <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Anggota" href="#"><span class="glyphicon glyphicon-edit"></span></a>
                          <a onclick="return confirm ('Yakin hapus <?php echo $data['nama'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Anggota" href=""><span class="glyphicon glyphicon-trash">
                          </a>
                      </center>
                    </td>
                  </tr>
                </div>
                 <?php   
              } 
              ?>
                   </tbody>
                   </table>
                   
                  <?php $tampil=mysql_query("select * from data_anggota order by npm");
                        $user=mysql_num_rows($tampil);
                    ?>
           
                  
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
              <!-- row end -->
                </section><!-- /.content -->
               
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->