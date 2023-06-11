<script language="javascript">
  function simpandata_kegiatan() {

    var nama_skema = $('#nama_skema').val();
    if (nama_skema == "") {
      alert("Nama Skema  masih kosong");
      $('#nama_skema').focus();
      return false;
    }
    var jadwal = $('#jadwal').val();
    if (jadwal == "") {
      alert("Jadwal masih kosong");
      $('#jadwal').focus();
      return false;
    }
    var lokasi = $('#lokasi').val();
    if (lokasi == "") {
      alert("Lokasi masih kosong");
      $('#lokasi').focus();
      return false;
    }


    $('#data_kegiatan').submit();
  }
</script>



<main id="main" class="main">
  <div class="container">
    <form name="data_kegiatan" id="data_kegiatan" method="post" action="<?php echo base_url('cdashboard_lsp/simpandata_kegiatan'); ?>">
      <br>

      <input type="hidden" id="id_jadwal" name="id_jadwal">


      <div class="mb-3">
        <label class="form-label">Nama Skema:</label>
        <select id="id_skema" name="id_skema" class="form-select" aria-label="Default select example">
          <option value="none" selected>Pilih Skema</option>
          <option value="4041">Junior Web Development</option>
        </select>
      </div>

      <div class="mb-3 mt-3">
        <label class="form-label">Jadwal :</label>
        <!-- <time datetime="YYYY-MM-DDThh:mm:ssTZD" id="jadwal" name="jadwal"></time> -->
        <input type="datetime-local" id="jadwal" name="jadwal">
      </div>

      <div class="mb-3 mt-3">
        <label class="form-label">Lokasi :</label>
        <input type="text" class="form-control" id="lokasi" name="lokasi">
      </div>
      <br>

      <button type="button" class="btn btn-primary" onClick="simpandata_kegiatan()">Simpan</button>
    </form>
  </div>