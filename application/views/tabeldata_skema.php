<div class="container mt-3">
  <h4>Data Skema</h4>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Id Skema</th>
        <th>Nama Skema</th>
        <th>Deskripsi</th>
        <th>Id Jurusan</th>
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
            <td><?php echo $data->id_skema; ?></td>
            <td><?php echo $data->nama_skema; ?></td>
            <td><?php echo $data->deskripsi; ?></td>
            <td><?php echo $data->id_jurusan; ?></td>
            <td>
              <button type="button" class="btn btn-primary btn-sm" onclick="editdata('<?php echo $data->id_skema; ?>');">Edit</button>

              <button type="button" class="btn btn-danger btn-sm" onclick="editdata('<?php echo $data->id_skema; ?>');">Hapus</button>
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