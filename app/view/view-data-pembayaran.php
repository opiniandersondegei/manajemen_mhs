<?php include('../../conf/config.php'); ?>
<!-- Modal Input Pembayaran -->
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <!-- Horizontal Form -->
        <div class=" modal-content card card-info">
            <div class="card-header">
                <h3 class="card-title">Input Data Pembayaran</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" value="<?php echo $_POST['nama']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" value="<?php echo $_POST['nim']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">UAS</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="uas" value='0' oninput="bayar()">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Semester</label>
                    <div class="col-sm-10">
                        <input type="number " class="form-control" id="smt" value='0' oninput="bayar()">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="hsl" value='0' readonly>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info" onclick="bayar()">Bayar</button>
                <button type="submit" class="btn btn-default float-right">Batal</button>
            </div>
            <!-- /.card-footer -->
            <script>
                function Bayar() {
                    uas = document.getElementBy('uas').value;
                    smt = document.getElementBy('smt').value;
                    jml = parseInt(uas) + parseInt(smt);
                    hsl = documen.getElementBy('hsl');
                    if (!isNan(jml)) {
                        hsl.value = jml;
                    } else {
                        hsl.value = 0;
                    }
                    // alert(jml);

                }
            </script>

        </div>
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- End Modal Input Pembayaran -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Pembayaran: <?php $_POST['nim']; ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        </button>
        <button type="button" class="btn btn-info" data-toggle="modal"
            data-target="#modal-lg">
            Tambah Data
        </button>
        <br></br>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Pembayaran</th>
                    <th>Keterangan</th>
                    <th>Tgl Bayar</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                $total = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran");
                while ($mhs = mysqli_fetch_array($query)) {
                    $no++

                ?>
                    <tr>
                        <td width='5%'><?php echo $no; ?></td>
                        <td><?php echo $mhs['nama']; ?></td>
                        <td><?php echo $mhs['nim']; ?></td>
                        <td class="text-right"><?php echo number_format($mhs['pembayaran']) . ',-'; ?></td>
                        <td><?php echo $mhs['keterangan']; ?></td>
                        <td><?php echo $mhs['tgl_bayar']; ?></td>
                    </tr>
                    </tr>

                <?php $total += $mhs['pembayaran'];
                } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan=3>Jumlah</th>
                    <th class="text-right"><?php echo 'Rp.' . number_format($total) . ',-'; ?></th>
                    <th>CSS grade</th>
                    <th colspan=2></th>

                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>