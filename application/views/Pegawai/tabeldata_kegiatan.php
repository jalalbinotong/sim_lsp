<script language="javascript">
  function hapusdata_kegiatan(id_jadwal) {
    if (confirm("Apakah anda yakin menghapus data ini")) {
      window.open("<?php echo base_url() ?>cdashboard_lsp/hapusdata_kegiatan/" + id_jadwal, "_self");
    }
  }

  function editdata_kegiatan(id_jadwal) {
    load("cdashboard_lsp/editdata_kegiatan/" + id_jadwal, "#script");
  }
</script>

<div class="container mt-3">
  <h4>Data Skema</h4>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Skema</th>
        <th>Jadwal</th>
        <th>Lokasi</th>
        <th>Aksi</th>
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
            <td><?php echo $data->nama_skema; ?></td>
            <td><?php echo $data->jadwal; ?></td>
            <td><?php echo $data->lokasi; ?></td>
            <td>
              <button type="button" class="btn btn-primary btn-sm" onclick="editdata_kegiatan('<?php echo $data->id_jadwal; ?>');">Edit</button>

              <button type="button" class="btn btn-danger btn-sm" onclick="hapusdata_kegiatan('<?php echo $data->id_jadwal; ?>');">Hapus</button>
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