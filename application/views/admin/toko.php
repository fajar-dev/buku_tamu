<div class="section-body">
            <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
            <?php echo $this->session->flashdata('msg') ?>
              <div class="card">
              <div class="card-header">
                <h4 class="text-success">Pengaturan Toko</h4>
              </div>
                <div class="card-body">
                <span class="text-danger"></span>
                <form action="<?php echo site_url() ?>admin/update" method="post">
                  <div class="form-group">
                              <label>Jadwal Buka Toko</label>
                              <input type="text" value="<?php echo htmlentities($row->jadwal_buka_tutup, ENT_QUOTES, 'UTF-8');?>" name="jadwal" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Tentang Toko</label>
                            <textarea class="summernote-simple" name="tentang"><?php echo htmlentities($row->daftar_isi_toko, ENT_QUOTES, 'UTF-8');?></textarea>
                            </div>
                  <button type="submit" class="btn btn-success btn-lg btn-block my-3" tabindex="4">Update</button>
                </form>
              </div>
              </div>
            </div>
            </div>
          </div>
