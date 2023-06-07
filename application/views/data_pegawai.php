<script language="javascript">
  function hapusdata(KodeData) {
    if (confirm("Apakah anda yakin menghapus data ini")) {
      window.open("<?php echo base_url() ?>cbelajarcrud/hapusdata/" + KodeData, "_self");
    }
  }

  function editdata(KodeData) {
    load("cbelajarcrud/editdata/" + KodeData, "#script");
  }
</script>

<main id="main" class="main">
  <div class="container-fluid">
    <h4>Daftar Data</h4>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>NIP</th>
          <th>Nama</th>
          <th>Kelamin</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Nomor Handphone</th>
          <th>Alamat</th>
          <th>Email</th>
          <th>Jabatan</th>
          <th>golongan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (empty($hasil)) {
          echo "Data Kosong";
        } else {
          $no = 1;
          foreach ($hasil as $data) :
        ?>

            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $data->NamaLengkap; ?></td>
              <td><?php echo $data->Alamat; ?></td>
              <td><?php echo $data->Telp; ?></td>
              <td><?php echo $data->Email; ?></td>
              <td>
                <button type="button" class="btn btn-primary btn-sm" onclick="editdata('<?php echo $data->KodeData; ?>')">Edit</button>
                <button type="button" class="btn btn-danger btn-sm" onclick="hapusdata('<?php echo $data->KodeData; ?>');">Hapus</button>
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
</main>