<script language="javascript">
  function simpandata_kompetensi() {
    var id_skema = $('#id_skema').val();
    if (id_skema == "") {
      alert("Nama Skema  masih kosong");
      $('#id_skema').focus();
      return false;
    }
    var kode_unit = $('#kode_unit').val();
    if (kode_unit == "") {
      alert("Kode Unit  masih kosong");
      $('#kode_unit').focus();
      return false;
    }
    var judul_unit = $('#judul_unit').val();
    if (judul_unit == "") {
      alert("judul unit masih kosong");
      $('#judul_unit').focus();
      return false;
    }
    var jenis_standar = $('#jenis_standar').val();
    if (jenis_standar == "") {
      alert("jenis standar masih kosong");
      $('#jenis_standar').focus();
      return false;
    }


    $('#kompetensi').submit();
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
    <form name="kompetensi" id="kompetensi" method="post" action="<?php echo base_url('cdashboard_lsp/simpandata_kompetensi'); ?>">
      <br>

      <input type="hidden" id="id_kompetensi" name="id_kompetensi">

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
        <label class="form-label">Kode Unit :</label>
        <input type="text" class="form-control" id="kode_unit" name="kode_unit">
        <!-- <label class="form-label">Nama Skema:</label>
        <select id="id_skema" name="id_skema" class="form-select" aria-label="Default select example">
          <option value="none" selected>Pilih Skema</option>
          <option value="4041">Junior Web Development</option>
        </select> -->
      </div>


      <div class="mb-3 mt-3">
        <label class="form-label">judul unit :</label>
        <textarea type="text" class="form-control" id="judul_unit" name="judul_unit"></textarea>
      </div>

      <div class="mb-3 mt-3">
        <label class="form-label">jenis standar :</label>
        <textarea type="text" class="form-control" id="jenis_standar" name="jenis_standar"></textarea>
      </div>

      <br>

      <button type="button" class="btn btn-primary" onClick="simpandata_kompetensi()">Simpan</button>
    </form>
  </div>