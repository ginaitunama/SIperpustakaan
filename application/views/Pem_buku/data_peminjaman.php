<section class="content">

                    <div class="text-left" style="margin-top: 10px;">
                
                </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <b><center>Data Peminjaman</center></b>

                                </header>
                              
                                <div class="panel-body table-responsive">
                                    <div class="box-tools m-b-15">  
                                    </div>
                                    
              <table id="example" class="table table-hover table-bordered">
                  <thead>
                      <tr>
                        <th><center>Id Buku </center></th>
                        <th><center>Judul Buku </center></th>
                        <th><center>Nama Peminjam </center></th>
                        <th><center>Tgl Pinjam </center></th>
                        <th><center>Tgl Kembali </center></th>
                        <th><center>Status </center></th>
                        <th><center>Keterangan</center></th>
                        <th><center>Aksi</center></th>
                      </tr>
                  </thead>
                     <?php foreach($data->result() as $row)
                    { ?>
                    <tbody>
                    <tr>
                    <td><?php echo $row->id ;?></td>
                    <td><?php echo $row->judul_buku; ?></a></td>
                    <td><?php echo $row->nama_peminjam ;?></td>
                    <td><?php echo $row->tgl_pinjam ;?></td>
                    <td><?php echo $row->tgl_kembali ;?></td>
                    <td><?php echo $row->status ;?></td>
                    <td><?php echo $row->ket ;?></td>
                    <td>
                      <center>
                        <div id="thanks">
                        <a href="<?php echo base_url();?>index.php/peminjaman/edit/<?php echo $row->id ;?>" class="btn btn-sm btn-primary" title="Edit Data" data-placement="bottom" data-toggle="tooltip"><span class="glyphicon glyphicon-edit"></span></a>
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
                   
           
                  
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
              <!-- row end -->
                </section><!-- /.content -->
               
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->