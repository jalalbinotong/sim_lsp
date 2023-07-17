<script language="javascript">
  function pilihdata(id_jadwal, tombol) {
    tombol.disabled = true;
    tombol.textContent = "Jadwal ";
    // Lakukan tindakan lainnya (misalnya, buka URL atau kirim permintaan AJAX)
    window.open("<?php echo base_url() ?>cdashboard_asesi/pilihjadwal/" + id_jadwal, "_self");
    localStorage.setItem('tombolDisabled', 'true');
  }

  window.onload = function() {
    var tombolDisabled = localStorage.getItem('tombolDisabled');
    if (tombolDisabled && tombolDisabled === 'true') {
      var tombol = document.getElementById('btnPilih');
      tombol.disabled = true;
      tombol.textContent = "Jadwal Dipilih";
    }
  }

  function gantiJadwal(id_jadwal) {
    window.open("<?php echo base_url() ?>cdashboard_asesi/gantijadwal/" + id_jadwal, "_self");
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
          <th>Kuota Yang Tersisa</th>
          <th>Status</th>
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
                <?php
                if ($id_jadwal !== null && $id_jadwal !== '') {
                  echo "Anda Sudah Memilih Jadwal";
                } else if ($data->kuota == 0) {
                  echo "Anda Sudah Memilih Jadwal";
                } else {
                  echo "Anda Belum Memilih Jadwal";
                }
                ?>
              </td>
              <td>
                <?php if ($data->kuota == 0) { ?>
                  <button type="button" class="btn btn-primary btn-sm" id="<?php echo $id_tombol; ?>" disabled>Kuota Tidak Tersedia</button>
                <?php } else if ($id_jadwal !== null && $id_jadwal !== '') { ?>
                  <button type="button" class="btn btn-primary btn-sm" id="<?php echo $id_tombol; ?>" disabled>Anda Sudah Memilih Jadwal</button>
                  <button type="button" class="btn btn-danger btn-sm" id="<?php echo $id_tombol; ?>" onclick="gantiJadwal()">Ganti Jadwal</button>

                <?php } else { ?>
                  <button type="button" class="btn btn-primary btn-sm" id="<?php echo $id_tombol; ?>" onclick="pilihdata('<?php echo $data->id_jadwal; ?>', this)">Pilih Jadwal</button>
                <?php } ?>

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