<script language="javascript">
  function pilihdata(id_jadwal, tombol) {
    // Mengubah teks tombol yang dipilih menjadi "Anda Memilih Jadwal"
    tombol.textContent = "Anda Memilih Jadwal";

    // Mengubah status tombol yang dipilih menjadi disabled
    tombol.disabled = true;

    // Melakukan tindakan lainnya (misalnya, membuka URL atau mengirim permintaan AJAX)
    window.open("<?php echo base_url() ?>cdashboard_asesi/pilihjadwal/" + id_jadwal, "_self");

    // Menyimpan status tombol yang dipilih ke dalam localStorage
    localStorage.setItem('tombolDisabled', 'true');
  }

  window.onload = function() {
    var tombolDisabled = localStorage.getItem('tombolDisabled');
    var tombol = document.getElementById('btnPilih');

    if (tombolDisabled && tombolDisabled === 'true') {
      // Mengubah teks tombol yang dipilih menjadi "Anda Memilih Jadwal"
      tombol.textContent = "Anda Memilih Jadwal";

      // Mengubah status tombol yang dipilih menjadi disabled
      tombol.disabled = true;
    } else {
      // Mengubah teks tombol yang tidak dipilih menjadi "Pilih Jadwal"
      tombol.textContent = "Pilih Jadwal";

      // Mengubah status tombol yang tidak dipilih menjadi enabled
      tombol.disabled = false;
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


                <?php if ($data->kuota == 0) { ?>
                  <button type="button" class="btn btn-primary btn-sm" id="<?php echo $id_tombol; ?>" disabled>Kuota Tidak Tersedia</button>
                <?php } else if ($id_jadwal == $data->id_jadwal) { ?>
                  <button type="button" class="btn btn-success btn-sm" id="<?php echo $id_tombol; ?>" disabled>Jadwal Terpilih</button>
                <?php } else { ?>
                  <button type="button" class="btn btn-primary btn-sm" id="<?php echo $id_tombol; ?>" onclick="pilihdata('<?php echo $data->id_jadwal; ?>', this)" <?php echo ($id_jadwal !== null && $id_jadwal !== '') ? 'disabled' : ''; ?>>Pilih Jadwal</button>
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
    <?php if ($id_jadwal !== null && $id_jadwal !== '') { ?>
      <button type="button" class="btn btn-danger btn-sm" id="<?php echo $id_tombol; ?>" onclick="gantiJadwal()">Ganti Jadwal</button>
    <?php } ?>
  </div>
</main>