<script language="javascript">
  function pilihdata(id_jadwal, tombol) {
    tombol.disabled = true;
    tombol.textContent = "Jadwal Dipilih";
    // Lakukan tindakan lainnya (misalnya, buka URL atau kirim permintaan AJAX)
    window.open("<?php echo base_url() ?>cdashboard_asesi/pilihjadwal/" + id_jadwal, "_self");
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
    <h4>Pilih Jadwal</h4>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nama Skema</th>
          <th>Waktu Ujian</th>
          <th>Lokasi</th>
          <th>Kuota</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (empty($hasil)) {
          echo "Pilih Skema Terlebih Dahulu Sebelum Memilih Jadwal!";
        } else {
          $no = 1;
          foreach ($hasil as $data) {
            $id_tombol = "btnPilih" . $no; // ID unik untuk setiap tombol
        ?>
            <tr>
              <td><?php echo $data->nama_skema; ?></td>
              <td><?php echo $data->jadwal; ?></td>
              <td><?php echo $data->lokasi; ?></td>
              <td><?php echo $data->kuota; ?></td>
              <td>
                <button type="button" class="btn btn-primary btn-sm" id="<?php echo $id_tombol; ?>" onclick="pilihdata('<?php echo $data->id_jadwal; ?>', this)">Pilih Jadwal</button>
              </td>
            </tr>
        <?php
            $no++;
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</main>