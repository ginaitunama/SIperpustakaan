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
                     <?php foreach($data->result() as $row)
                    { ?>
                    <tbody>
                    <tr>
                    <td><?php echo $row->npm ;?></td>
                    <td><?php echo $row->nama; ?></a></td>
                    <td><?php echo $row->jk ;?></td>
                    <td><?php echo $row->kelas ;?></td>
                    <td><?php echo $row->ttl ;?></td>
                    <td><?php echo $row->alamat ;?></td>
                    <td>
                      <center>
                        <div id="thanks">
                        <a href="<?php echo base_url();?>index.php/anggota/edit/<?php echo $row->npm ;?>" class="btn btn-sm btn-primary" title="Edit Anggota" data-placement="bottom" data-toggle="tooltip"><span class="glyphicon glyphicon-edit"></span></a>
                        <a href="<?php echo base_url();?>index.php/anggota/delete/<?php echo $row->npm ;?>" onclick="return confirm ('Yakin hapus <?php echo $row->nama ;?>');" class="btn btn-sm btn-danger" title="Hapus Anggota" data-placement="bottom" data-toggle="tooltip"><span class="glyphicon glyphicon-trash"></span></a>
                      </div>
                          
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