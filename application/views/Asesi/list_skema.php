<script language="javascript">
  function pilihdata(id_skema) {

    window.open("<?php echo base_url() ?>cdashboard_asesi/pilihskema/" + id_skema, "_self");

  }
</script>

<main id="main" class="main">
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
  ?>

  <div class="container mt-3">
    <h4>List Skema</h4>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nama Skema</th>
          <th>Informasi Skema</th>
          <th>Prodi</th>
          <th>Aksi</th>

        </tr>
      </thead>
      <tbody>
        <?php
        if (empty($hasil)) {
          echo "Tidak terdapat skema pada database";
        } else {
          $no = 1;
          foreach ($hasil as $data) :
        ?>

            <tr>
              <td>
                <?php echo $data->nama_skema; ?>
              </td>
              <td>
                <?php echo $data->deskripsi; ?>
              </td>
              <td>
                <?php echo $data->nama_jurusan; ?>
              </td>
              <td>
                <button type="button" class="btn btn-primary btn-sm" onclick="pilihdata('<?php echo $data->id_skema; ?>')">Pilih Skema</button>
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
</main>