<script language="javascript">
  function simpandata() {
    var NamaLengkap = $('#NamaLengkap').val();
    if (NamaLengkap == "") {
      alert("Nama lengkap masih kosong");
      $('#NamaLengkap').focus();
      return false;
    }

    var Alamat = $('#Alamat').val();
    if (Alamat == "") {
      alert("Alamat masih kosong");
      $('#Alamat').focus();
      return false;
    }

    var Telp = $('#Telp').val();
    if (Telp == "") {
      alert("Telp masih kosong");
      $('#Telp').focus();
      return false;
    }

    var Email = $('#Email').val();
    if (Email == "") {
      alert("Email masih kosong");
      $('#Email').focus();
      return false;
    }


    $('#formdata').submit();
  }
</script>

</script>

<div style="padding-top: 100px">
  <div class="container-fluid">
    <h4>List Pengajuan Berkas</h4>
    <table class="table table-striped">
      <thead>
        <tr>
          <th></th>
          <th>ID Berkas</th>
          <th>NIM</th>
          <th>Nama Lengkap</th>
          <th>Prodi</th>
          <th>Skema</th>
          <th>Aksi</th>

        </tr>
      </thead>
      <tbody>
        <?php
        if (empty($hasil)) {
          echo "List Asesi Akan Muncul Disini Ketika Asesi Sudah Mengirim Berkas FR APL.01 <hr>";
        } else {
          $no = 1;
          foreach ($hasil as $data) :
        ?>

            <tr>
              <td>
                <?php echo $no; ?>
              </td>
              <td>
                <?php echo $data->id; ?>
              </td>
              <td>
                <?php echo $data->nim; ?>
              </td>
              <td>
                <?php echo $data->nama_lengkap; ?>
              </td>
              <td>
                <?php echo $data->nama_prodi; ?>
              </td>
              <td>
                <!-- <?php echo $data->skema; ?> -->
              </td>
              <td>
                <button type="button" class="btn btn-primary btn-sm" onclick="editdata('<?php echo $data->id_asesi; ?>')">Lihat Berkas</button>
              </td>
            </tr>
        <?php
            $no++;
          endforeach;
        }
        ?>

      </tbody>
    </table>
  </div>
</div>