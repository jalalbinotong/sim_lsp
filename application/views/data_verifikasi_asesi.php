</script>

<div style="padding-top: 100px">
  <div class="container mt-3">
    <h4>Data FRAPL.01</h4>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Fotocopy KTP</th>
          <th>Bukti Pembayaran</th>
          <th>Pas Foto</th>
          <th>No KTP</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Kebangsaan</th>
          <th>Alamat</th>
          <th>Telepon HP</th>
          <th>Telepon Rumah</th>
          <th>Telepon Kantor</th>
          <th>Kualifikasi Pendidikan</th>
          <th>Nama Institusi</th>
          <th>Jabatan</th>
          <th>Alamat Kantor</th>

        </tr>
      </thead>
      <tbody>
        <?php
        if (empty($hasil)) {
          echo "Asesi Belum Mengajukan Data FRAPL.01 <hr>";
        } else {
          $no = 1;
          foreach ($hasil as $data) :
        ?>

            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $data->foto_ktp; ?></td>
              <td><?php echo $data->bukti_pembayaran; ?></td>
              <td><?php echo $data->foto; ?></td>
              <td><?php echo $data->no_ktp; ?></td>
              <td><?php echo $data->tempat_lahir; ?></td>
              <td><?php echo $data->tgl_lahir; ?></td>
              <td><?php echo $data->jenis_kelamin; ?></td>
              <td><?php echo $data->kebangsaan; ?></td>
              <td><?php echo $data->alamat; ?></td>
              <td><?php echo $data->telpon_hp; ?></td>
              <td><?php echo $data->telpon_rumah; ?></td>
              <td><?php echo $data->telpon_kantor; ?></td>
              <td><?php echo $data->KualifikasiPendidikan; ?></td>
              <td><?php echo $data->nama_institusi; ?></td>
              <td><?php echo $data->jabatan; ?></td>
              <td><?php echo $data->alamat_kantor; ?></td>
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
</div>