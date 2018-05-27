 <section class="content">
<div class="text-left" style="margin-top: 10px;">
  <p>
    <a href="<?php echo base_url();?>index.php/buku/tambah" class="btn btn-primary btn-small">Tambah Buku <i class="fa fa-plus"></i></a>
  </p>
 </div>
<div class="row">
    <div class="col-xs-12">
        <div class="panel">
            <header class="panel-heading">
                
                <b><center>Data Buku</center></b>

            </header>
                <div class="panel-body table-responsive">
                                    
                    <?php
                    $query1="select * from data_buku";
                    
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
                  
            </aside>

        </div>