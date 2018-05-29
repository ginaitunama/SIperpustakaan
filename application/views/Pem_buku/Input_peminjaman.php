<section class="content">

    <div class="row">
          <div class="col-xs-12">
                <div class="panel">
                      <header class="panel-heading">
                        <b><center>Input Peminjaman</center></b>

                      </header>
                               
                                <div class="panel-body">
                      <form class="form-horizontal style-form" style="margin-top: 20px;" action="<?php echo base_url();?>index.php/peminjaman/simpan" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return cekform();">
            
                  
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">ID Buku</label>
                              <div class="col-sm-8">
                                  <input name="id" type="text" id="id" class="form-control" placeholder="id" value="<?php echo $id;?> " required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Judul Buku</label>
                              <div class="col-sm-8">
                                  <input name="judul_buku" class="form-control" id="judul_buku" type="text" placeholder="judul_buku" value="<?php echo $judul_buku;?> " required />
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Peminjam</label>
                              <div class="col-sm-8">
                                  <input name="nama_peminjam" class="form-control" id="nama_peminjam" type="text" placeholder="nama_peminjam" value="<?php echo $nama_peminjam;?> " required />
                              </div>
                          </div>
                    
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tgl Pinjam</label>
                              <div class="col-sm-8">
                                  <input name="tgl_pinjam" class="form-control" id="tgl_pinjam" type="text" placeholder="tgl_pinjam" value="<?php echo $tgl_pinjam;?> "  required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tgl Kembali</label>
                              <div class="col-sm-8">
                                  <input name="tgl_kembali" class="form-control" id="tgl_kembali" type="text" placeholder="tgl_kembali" value="<?php echo $tgl_kembali;?> " required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-4">
                                <select class="form-control" name="status" id="status" value="<?php echo $status;?> ">
                                  <option value="Pilih">--Pilih--</option>
                                  <option value="pinjam">Pinjam</option>
                                  <option value="kembali">Kembali</option>
                                </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                              <div class="col-sm-8">
                                  <input name="ket" class="form-control" id="ket" type="text" placeholder="ket" value="<?php echo $ket;?> " required />
                              </div>
                          </div>

                          <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
	                              <a href="input_peminjaman.php" class="btn btn-sm btn-danger">Batal </a>
                              </div>
                          </div>
                          <div style="margin-top: 20px;"></div>
                      </form>
                                </div>
                            </div><
                        </div>
                    </div>
              
                </section>
              </diV>s