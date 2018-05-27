<section class="content">

    <div class="row">
          <div class="col-xs-12">
                <div class="panel">
                      <header class="panel-heading">
                        <b><center>Input Data Anggota</center></b>

                      </header>
                               
                                <div class="panel-body">
                      <form class="form-horizontal style-form" style="margin-top: 20px;" action="<?php echo base_url();?>index.php/anggota/simpan" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return cekform();">
                         
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NPM</label>
                              <div class="col-sm-8">
                                  <input name="npm" type="text" id="npm" class="form-control" placeholder="npm" required />
                                  <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-8">
                                  <input name="nama" type="text" id="nama" class="form-control" placeholder="Nama" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                              <div class="col-sm-4">
                                  <select class="form-control" name="jk" id="jk">
                                  <option value="L"> Laki - Laki</option>
                                  <option value="P"> Perempuan</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kelas</label>
                              <div class="col-sm-8">
                                  <input name="kelas" class="form-control" id="kelas" type="text" placeholder="Kelas" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tempat Tanggal Lahir</label>
                              <div class="col-sm-8">
                                  <input name="ttl" class="form-control" id="ttl" type="text" placeholder="Tempat Tanggal Lahir" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-8">
                                  <input name="alamat" class="form-control" id="alamat" type="text" placeholder="Alamat" required />
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