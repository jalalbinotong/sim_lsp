<script language="javascript">
  function simpandata() {
    // var id_skema = $('#id_skema').val();
    // if (id_skema == "") {
    //   alert("Id Skema  masih kosong");
    //   $('#id_skema').focus();
    //   return false;
    // }
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
    <form name="data_skema" id="data_skema" method="post" action="<?php echo base_url('cdashboard_lsp/simpandata'); ?>">
      <br>

      <label class="form-label">Id Skema :</label>
      <input type="text" class="form-control" id="id_skema" name="id_skema">


      <div class="mb-3 mt-3">
        <label class="form-label">Nama Skema :</label>
        <input type="text" class="form-control" id="nama_skema" name="nama_skema">
        <!-- <label class="form-label">Nama Skema:</label>
        <select id="id_skema" name="id_skema" class="form-select" aria-label="Default select example">
          <option value="none" selected>Pilih Skema</option>
          <option value="4041">Junior Web Development</option>
        </select> -->
      </div>


      <div class="mb-3 mt-3">
        <label class="form-label">Deskripsi :</label>
        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"></textarea>
      </div>

      <div class="mb-3 mt-3">
        <!-- <label class="form-label">Id Jurusan :</label>
        <input type="text" class="form-control" id="id_jurusan" name="id_jurusan"> -->
        <label class="form-label">Jurusan:</label>
        <select id="id_jurusan" name="id_jurusan" class="form-select" aria-label="Default select example">
          <option value="none" selected>Pilih jurusan</option>
          <option value="4001">Teknik Elektro</option>
        </select>
      </div>
      <br>

      <button type="button" class="btn btn-primary" onClick="simpandata()">Simpan</button>
    </form>
  </div>