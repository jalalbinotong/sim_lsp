<script language="javascript">
  function pilihdata(id_jadwal) {

    window.open("<?php echo base_url() ?>cdashboard_asesi/pilihjadwal/" + id_jadwal, "_self");

  }
</script>

<main id="main" class="main">
  <div class="container mt-3">
    <h4>Pilih Jadwal</h4>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nama Skema</th>
          <th>Waktu Ujian</th>
          <th>Lokasi</th>
          <th>Aksi</th>

        </tr>
      </thead>
      <tbody>
        <?php
        if (empty($hasil)) {
          echo "Tidak terdapat jadwal pada database";
        } else {
          $no = 1;
          foreach ($hasil as $data) :
        ?>

            <tr>
              <td>
                <?php echo $data->nama_skema; ?>
              </td>
              <td>
                <?php echo $data->jadwal; ?>
              </td>
              <td>
                <?php echo $data->lokasi; ?>
              </td>
              <td>
                <button type="button" class="btn btn-primary btn-sm" onclick="pilihdata('<?php echo $data->id_jadwal; ?>')">Pilih Jadwal</button>
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