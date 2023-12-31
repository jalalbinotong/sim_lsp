<script language="javascript">
  function simpandata_kegiatan() {

    var nama_skema = $('#nama_skema').val();
    if (nama_skema == "") {
      alert("Nama Skema  masih kosong");
      $('#nama_skema').focus();
      return false;
    }
    var pembukaan_pendaftaran = $('#pembukaan_pendaftaran').val();
    if (pembukaan_pendaftaran == "") {
      alert("pembukaan pendaftaran masih kosong");
      $('#pembukaan_pendaftaran').focus();
      return false;
    }
    var penutupan_pendaftaran = $('#penutupan_pendaftaran').val();
    if (penutupan_pendaftaran == "") {
      alert("penutupan pendaftaran masih kosong");
      $('#penutupan_pendaftaran').focus();
      return false;
    }
    var lokasi = $('#lokasi').val();
    if (lokasi == "") {
      alert("Lokasi masih kosong");
      $('#lokasi').focus();
      return false;
    }
    var kuota = $('#kuota').val();
    if (kuota == "") {
      alert("kuota masih kosong");
      $('#kuota').focus();
      return false;
    }


    $('#data_kegiatan').submit();
  }
</script>



<main id="main" class="main">
  <div class="container">
    <?php
    $pesan = $this->session->flashdata('pesan');
    if ($pesan == "") {
      echo "";
    } else {
    ?>
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong><?php echo $pesan; ?></strong>
      </div>

    <?php
    }

    $pesan_danger = $this->session->flashdata('pesan_danger');
    if ($pesan_danger == "") {
      echo "";
    } else {
    ?>
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>
          <?php echo $pesan_danger; ?>
        </strong>
      </div>

    <?php
    }
    ?>
    <form name="data_kegiatan" id="data_kegiatan" method="post" action="<?php echo base_url('cdashboard_lsp/simpandata_kegiatan'); ?>">
      <br>

      <input type="hidden" id="id_jadwal" name="id_jadwal">


      <div class="mb-3">
        <label class="form-label">Nama Skema:</label>
        <select id="id_skema" name="id_skema" class="form-select" aria-label="Default select example">
          <option value="none" selected>Pilih Skema</option>
          <?php
          if (empty($hasil)) {
          ?>
            <option value="">Tidak ada data</option>
            <?php
          } else {
            foreach ($hasil as $data) :
            ?>
              <option value="<?php echo $data->id_skema; ?>"><?php echo $data->nama_skema; ?></option>
          <?php
            endforeach;
          }
          ?>
        </select>
      </div>

      <div class="mb-3 mt-3">
        <label class="form-label">pembukaan pendaftaran :</label>
        <!-- <time datetime="YYYY-MM-DDThh:mm:ssTZD" id="jadwal" name="jadwal"></time> -->
        <input type="date" class="form-control" id="pembukaan_pendaftaran" name="pembukaan_pendaftaran">
      </div>

      <div class="mb-3 mt-3">
        <label class="form-label">Penutupan pendaftaran :</label>
        <!-- <time datetime="YYYY-MM-DDThh:mm:ssTZD" id="jadwal" name="jadwal"></time> -->
        <input type="date" class="form-control" id="penutupan_pendaftaran" name="penutupan_pendaftaran">
      </div>

      <div class="mb-3 mt-3">
        <label class="form-label">Lokasi :</label>
        <input type="text" class="form-control" id="lokasi" name="lokasi">
      </div>
      <div class="mb-3 mt-3">
        <label class="form-label">Kuota :</label>
        <input type="text" class="form-control" id="kuota" name="kuota">
      </div>
      
      <br>

      <button type="button" class="btn btn-primary" onClick="simpandata_kegiatan()">Simpan</button>
    </form>
  </div>