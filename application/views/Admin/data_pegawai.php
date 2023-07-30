<script language="javascript">
  function hapusdata(NIP) {
    if (confirm("Apakah anda yakin menghapus data ini")) {
      window.open("<?php echo base_url() ?>cdashboard/hapusdata/" + NIP, "_self");
    }
  }

  function pilihdata(id) {

    window.open("<?php echo base_url() ?>cdashboard/pilih_data_pegawai/" + id, "_self");
  }

  // function editdata(NIP) {
  //   load("cdashboard/editdata/" + NIP, "#script");
  // }
</script>



<main id="main" class="main">
  <div class="container mt-3">
    <h4>Data Pegawai</h4>
    <div class="table-container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Email</th>
            <th style="width: 20%;">Aksi</th>
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
                <td><?php echo $data->email; ?></td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm" onclick="pilihdata('<?php echo $data->id_user; ?>')">Edit Data</button>
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
  </div>
</main>