<script language="javascript">
  function pilihdata(id) {

    window.open("<?php echo base_url() ?>cdashboard_lsp/verifdataasesi/" + id, "_self");

  }
</script>

<main id="main" class="main">
  <div class="container mt-3">
    <h4>List Pengajuan Berkas</h4>
    <table class="table table-striped">
      <thead>
        <tr>
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
                <?php echo $data->nim; ?>
              </td>
              <td>
                <?php echo $data->nama_lengkap; ?>
              </td>
              <td>
                <?php echo $data->nama_prodi; ?>
              </td>
              <td>
                <?php echo $data->nama_skema; ?>
              </td>
              <td>
                <button type="button" class="btn btn-primary btn-sm" onclick="pilihdata('<?php echo $data->id; ?>')">Lihat Berkas</button>
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