<section class="content">
  

    <div class="row">
          <div class="col-xs-12">
                <div class="panel">
                      <header class="panel-heading">
                        <b><center>Input Buku</center></b>

                      </header>
                               
                                <div class="panel-body">
                      <form class="form-horizontal style-form" style="margin-top: 20px;" action="<?php echo base_url();?>index.php/buku/simpanbuku" method="post" enctype="multipart/form-data" name="form1" id="form1">
                         
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Judul Buku</label>
                              <div class="col-sm-8">
                                  <input name="judul" type="text" id="judul" class="form-control" placeholder="judul buku" required />
                                  <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Pengarang</label>
                              <div class="col-sm-8">
                                  <input name="pengarang" type="text" id="pengarang" class="form-control" placeholder="nama pengarang" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tahun Terbit</label>
                              <div class="col-sm-8">
                              <input name="th_terbit" type="text" id="th_terbit" class="form-control" placeholder="tahun terbit" required />
                          </div>
                        </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Penerbit</label>
                              <div class="col-sm-8">
                                  <input name="penerbit" class="form-control" id="penerbit" type="text" placeholder="penerbit" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">ISBN</label>
                              <div class="col-sm-8">
                                  <input name="isbn" class="form-control" id="isbn" type="text" placeholder="ISBN" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kategori</label>
                               <div class="col-sm-4">
                                  <select class="form-control" name="jkategorik" id="kategori">
                                  <option value="bukucerita">Buku Cerita</option>
                                  <option value="modul">Modul</option>
                                  <option value="modul">Buku Pelajaran</option>
                                  </select>
                              </div>
                              
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jumlah Buku</label>
                              <div class="col-sm-8">
                                  <input name="jumlah_buku" class="form-control" id="jumlah_buku" type="text" placeholder="jumlah" required />
                              </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
	                              <a href="input-anggota.php" class="btn btn-sm btn-danger">Batal </a>
                              </div>
                          </div>
                          <div style="margin-top: 20px;"></div>
                      </form>
                                </div>
                            </div><
                        </div>
                    </div>
              
                </section>
             </aside>

        </div>