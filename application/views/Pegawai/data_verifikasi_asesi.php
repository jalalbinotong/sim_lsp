<script language="javascript">
  function pilihdata(id) {

    window.open("<?php echo base_url() ?>cdashboard_lsp/verifdataasesi/" + id, "_self");

  }
</script>

<main id="main" class="main">

  <div class="container">
    <div class="col-sm-10 col-md-8 col-lg-8 mx-auto d-table h-100">
      <div class="pagetitle">
        <h1>Verifikasi Data FR APL.01</h1>
      </div>
      <div class="card  ">
        <div class="card-body mt-4">

          <!-- General Form Elements -->
          <form>
            <div class="row mb-3 offset-sm-1">
              <label class="col-sm-4 col-form-label">Tempat Lahir</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" value=" <?php echo $hasil->tempat_lahir; ?>" disabled>
              </div>
            </div>

            <div class="row mb-3 offset-sm-1">
              <label class="col-sm-4 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" value=" <?php echo $hasil->tgl_lahir; ?>" disabled>
              </div>
            </div>

            <fieldset class="row mb-3 offset-sm-1">
              <legend class="col-form-label col-sm-4 pt-0">Jenis Kelamin</legend>
              <div class="col-sm-6">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="male" <?php if ($hasil->jenis_kelamin == 'L') echo 'checked'; ?> disabled>
                  <label class="form-check-label" for="gridRadios1">
                    Laki-Laki
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="female" <?php if ($hasil->jenis_kelamin == 'P') echo 'checked'; ?> disabled>
                  <label class="form-check-label" for="gridRadios3">
                    Perempuan
                  </label>
                </div>
              </div>
            </fieldset>

            <div class="row mb-3 offset-sm-1">
              <label class="col-sm-4 col-form-label">Alamat</label>
              <div class="col-sm-6">
                <textarea class="form-control" rows="4" disabled><?php echo $hasil->alamat; ?></textarea>
              </div>
            </div>

            <div class="row mb-3 offset-sm-1">
              <label class="col-sm-4 col-form-label">Telfon HP</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $hasil->telpon_hp; ?>" disabled>
              </div>
            </div>

            <div class="row mb-3 offset-sm-1">
              <label class="col-sm-4 col-form-label">Kualifikasi Pendidikan</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $hasil->kualifikasi_pendidikan; ?>" disabled>
              </div>
            </div>

            <div class="row mb-3 offset-sm-1">
              <label class="col-sm-4 col-form-label">Nama Institusi</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $hasil->nama_institusi; ?>" disabled>
              </div>
            </div>

            <div class="row mb-3 offset-sm-1">
              <label class="col-sm-4 col-form-label">Jabatan</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $hasil->jabatan; ?>" disabled>
              </div>
            </div>

            <div class="row mb-3 offset-sm-1">
              <label class="col-sm-4 col-form-label">Status</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $hasil->status; ?>" disabled>
              </div>
            </div>

            <div class="row mb-3 offset-sm-1">
              <label class="col-sm-4 col-form-label">Persetujuan</label>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary">Setujui Berkas</button>
                <button type="submit" class="btn btn-danger">Tolak Berkas</button>
              </div>
            </div>
          </form><!-- End General Form Elements -->
        </div>
      </div>
    </div>
</main>