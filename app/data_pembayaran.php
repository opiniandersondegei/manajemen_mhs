<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Pemabayaran</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <br></br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Semester</th>
                    <th>Ation</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  $query = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa");
                  while ($mhs = mysqli_fetch_array($query)) {
                    $no++

                  ?>
                    <tr>
                      <td width='5%'><?php echo $no; ?></td>
                      <td><?php echo $mhs['nama']; ?></td>
                      <td><?php echo $mhs['nim']; ?></td>
                      <td><?php echo $mhs['semester']; ?></td>
                      <td>
                        <a class="view-pembayaran btn btn-sm btn-warning" data-nama="<?php echo $mhs['nama']; ?>" data-nim="<?php echo $mhs['nim']; ?>">View Pembayaran</a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- View Data Pembayaran -->
          <?php // include('view/view-data-pembayaran.php');
          ?>
          <div id="hasil-view-pembayaran">

          </div>
          <!-- End View Data Pemabayaran -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Modal View Data-->
<div class="modal fade" id="modal-view">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">View Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="get" action="add/tambah_data.php">
        <div class="modal-body" id="hasil-view-data">



        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger toastsDefaultDanger" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
    </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<script>
  function hapus_data(data_id) {
    //alert('ok');
    //window.location = ("delete/hapus_data.php?id="+data_id );
    Swal.fire({
      title: "Apakah Data akan Dihapus?",
      //showDenyButton: false,
      showCancelButton: true,
      confirmButtonText: "Hapus Data",
      confirmButtonColor: "red",
      //denyButtonText: `Don't save`
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        window.location = ("delete/hapus_data.php?id=" + data_id)
      }
    })
  }
</script>