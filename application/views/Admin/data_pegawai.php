<script language="javascript">
  function hapusdata(NIP) {
    if (confirm("Apakah anda yakin menghapus data ini")) {
      window.open("<?php echo base_url() ?>cdashboard/hapusdata/" + NIP, "_self");
    }
  }

  function editdata(NIP) {
    load("cdashboard/editdata/" + NIP, "#script");
  }
</script>

<div class="container mt-3">
  <h4>Data Pegawai</h4>
  <table class="table table-striped">
    <thead>
    <tr>
          <th>No</th>
          <th>NIP</th>
          <th>Nama</th>
          <th>Kelamin</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Nomor Handphone</th>
          <th>Alamat</th>
          <th>Email</th>
          <th>Jabatan</th>
          <th>Golongan</th>
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
              <td><?php echo $data->NIP; ?></td>
              <td><?php echo $data->nama; ?></td>
              <td><?php echo $data->kelamin; ?></td>
              <td><?php echo $data->tempat_lahir; ?></td>
              <td><?php echo $data->tgl_lahir; ?></td>
              <td><?php echo $data->nomor_hp; ?></td>
              <td><?php echo $data->alamat; ?></td>
              <td><?php echo $data->email; ?></td>
              <td><?php echo $data->jabatan; ?></td>
              <td><?php echo $data->golongan; ?></td>
              <td>
                <button type="button" class="btn btn-primary btn-sm" onclick="editdata('<?php echo $data->NIP; ?>')">Edit</button>
                <button type="button" class="btn btn-danger btn-sm" onclick="hapusdata('<?php echo $data->NIP; ?>');">Hapus</button>
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