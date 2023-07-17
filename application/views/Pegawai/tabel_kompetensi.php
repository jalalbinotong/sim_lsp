<script language="javascript">
  function hapusdata_kompetensi(id_kompetensi) {
    if (confirm("Apakah anda yakin menghapus data ini")) {
      window.open("<?php echo base_url() ?>cdashboard_lsp/hapusdata_kompetensi/" + id_kompetensi, "_self");
    }
  }

  function editdata_kompetensi(id_kompetensi) {
    load("cdashboard_lsp/editdata_kompetensi/" + id_kompetensi, "#script");
  }
</script>

<div class="container mt-3">
  <h4>Data Kompetensi</h4>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Skema</th>
        <th>Kode Unit</th>
        <th>Judul Unit</th>
        <th>Jenis Standar</th>
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
            <td><?php echo $data->kode_unit; ?></td>
            <td><?php echo $data->judul_unit; ?></td>
            <td><?php echo $data->jenis_standar; ?></td>
            <td>
              <button type="button" class="btn btn-primary btn-sm" onclick="editdata_kompetensi('<?php echo $data->id_kompetensi; ?>');">Edit</button>

              <button type="button" class="btn btn-danger btn-sm" onclick="hapusdata_kompetensi('<?php echo $data->id_kompetensi; ?>');">Hapus</button>
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