<script language="javascript">
  function simpandata() {
    var id_skema = $('#id_skema').val();
    if (id_skema == "") {
      alert("Id Skema  masih kosong");
      $('#id_skema').focus();
      return false;
    }
    var nama_skema = $('#nama_skema').val();
    if (nama_skema == "") {
      alert("Nama Skema  masih kosong");
      $('#nama_skema').focus();
      return false;
    }
    var deskripsi = $('#deskripsi').val();
    if (deskripsi == "") {
      alert("Deskripsi masih kosong");
      $('#deskripsi').focus();
      return false;
    }
    var id_jurusan = $('#id_jurusan').val();
    if (id_jurusan == "") {
      alert("Id Jurusan masih kosong");
      $('#id_jurusan').focus();
      return false;
    }


    $('#data_skema').submit();
  }
</script>

<main id="main" class="main">

  <div class="container">
    <form name="data_skema" id="data_skema" method="post" action="<?php echo base_url('cdashboard_lsp/simpandata'); ?>">
      <br>

      <label class="form-label">Id Skema :</label>
      <input type="text" class="form-control" id="id_skema" name="id_skema">


      <div class="mb-3 mt-3">
        <label class="form-label">Nama Skema :</label>
        <input type="text" class="form-control" id="nama_skema" name="nama_skema">
      </div>


      <div class="mb-3 mt-3">
        <label class="form-label">Deskripsi :</label>
        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
      </div>

      <div class="mb-3 mt-3">
        <label class="form-label">Id Jurusan :</label>
        <input type="text" class="form-control" id="id_jurusan" name="id_jurusan">
      </div>
      <br>

      <button type="button" class="btn btn-primary" onClick="simpandata()">Simpan</button>
    </form>
  </div>