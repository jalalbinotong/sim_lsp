<main id="main" class="main">
  <div class="col-sm-none col-lg-11 col-md-none justify-content-center">
    <table class="table fluid">
      <thead class="table-dark">
        <?php
        $query = $this->db->query('SELECT NIP,nama,kelamin,tempat_lahir,tgl_lahir,nomor_hp,alamat,email,jabatan,golongan FROM tb_data_pegawai');
        echo $this->table->generate($query);
        ?>
        </tbody>
    </table>
  </div>
</main>