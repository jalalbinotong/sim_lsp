<script language="javascript">
  function hapusakun_pegawai(id_user) {
    if (confirm("Apakah anda yakin menghapus data ini")) {
      window.open("<?php echo base_url() ?>cdashboard/hapusakun_pegawai/" + id_user, "_self");
    }
  }

//   function editdata_kegiatan(id_jadwal) {
//     load("cdashboard_lsp/editdata_kegiatan/" + id_jadwal, "#script");
//   }
</script>

<main id="main" class="main">
    <div class="container mt-3">
    <h4>Data Akun Pegawai</h4>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Password</th>
            <th>Tipe User</th>
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
                <td><?php echo $data->nama_lengkap; ?></td>
                <td><?php echo $data->email; ?></td>
                <td><?php echo $data->password; ?></td>
                <td><?php echo $data->tipe_user; ?></td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" onclick="hapusakun_pegawai('<?php echo $data->id_user; ?>');">Hapus</button>
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
</main>