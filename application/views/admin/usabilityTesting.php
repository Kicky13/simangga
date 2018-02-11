<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $this->load->view('komponen/head'); ?>
<body>
<div id="wrapper">
    <?php $this->load->view('komponen/topbar'); ?>
    <!-- /. NAV TOP  -->
    <?php $this->load->view('komponen/nav_admin'); ?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2> Hasil Usability Testing SIMANGGA</h2>
                </div>
            </div>
            <hr/>
            <hr/>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Presentase Usability Testing
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Level Pengguna</th>
                                        <th>Ya (%)</th>
                                        <th>Tidak (%)</th>
                                        <th>Kualifikasi</th>
                                        <th>Hasil</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($bylevel as $row) { ?>
                                        <tr>
                                            <td><?php echo $row['level']; ?></td>
                                            <td><?php echo $row['ya']; ?></td>
                                            <td><?php echo $row['tidak']; ?></td>
                                            <td><?php echo ($row['ya'] <= 54) ? "Kurang" : ($row['ya'] >= 55 && $row['ya'] < 65) ? "Cukup" : ($row['ya'] >= 65 && $row['ya'] < 85) ? "Baik" : "Sangat Baik"; ?></td>
                                            <td><?php echo ($row['ya'] < 65) ? "Tidak Berhasil" : "Berhasil"; ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                </div>
                                <canvas id="canvas"></canvas>
                                </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Presentase Rata-Rata Semua Komponen Semua Pengguna
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>Komponen</th>
                                                <th>Ya (%)</th>
                                                <th>Tidak (%)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($data as $value) { ?>
                                                <tr>
                                                    <td><?php echo $value['nama_komp']; ?></td>
                                                    <td><?php echo ($value['nilaiY'] == null) ? "Kosong" : $value['nilaiY']; ?></td>
                                                    <td><?php echo ($value['nilaiN'] == null) ? "Kosong" : $value['nilaiN']; ?></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                        <div>
                                        </div>
                                    </div>
                                    <hr>
                                    <a href="<?php echo base_url('index.php/audit/hitungUsability'); ?>" type="submit"
                                       class="btn btn-primary" <?php /*echo ($usability['ya'] == 'Kosong') ? "":"disabled";*/ ?>>HITUNG USABILITY</a>
                                    </hr>
                                    <hr/>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Ya (%)</th>
                                                    <th>Tidak (%)</th>
                                                    <th>Kualifikasi</th>
                                                    <th>Hasil</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><?php echo $usability['ya']; ?></td>
                                                    <td><?php echo $usability['tidak']; ?></td>
                                                    <td><?php echo ($usability['ya'] == 'Kosong') ? "Belum Dikalkulasi":($usability['ya'] <= 54) ? "Kurang":($usability['ya'] >= 55 && $usability['ya'] < 65) ? "Cukup":($usability['ya'] >= 65 && $usability['ya'] < 85) ? "Baik":"Sangat Baik";?></td>
                                                    <td><?php echo ($usability['ya'] == 'Kosong') ? "Belum Dikalkulasi":($usability['ya'] < 55) ? "Tidak Berhasil":"Berhasil"; ?></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                        <div class="panel-heading">
                            REKOMENDASI HASIL PERHITUNGAN USABILITY
                        </div>
                    <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <?php foreach ($data as $value ): ?>
                                       <tr>
                                        <?php if ($value ['nilaiY'] < 65): ?>
                                            <th><?php echo $value['nama_komp'] ?></th>
                                        <?php endif ?>
                                            
                                        </tr> 
                                    <?php endforeach ?>
                                    
                                    </thead>
                                </table>
                            </div>
                        </div>
                        </div>

                                    <div class="panel panel-default">
                        <div class="panel-heading">
                            KETERANGAN HASIL PERHITUNGAN USABILITY
                        </div>
                    <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Skor</th>
                                        <th>Kualifikasi</th>
                                        <th>Hasil</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>85 - 100 %</td>
                                            <td>Sangat Baik</td>
                                            <td>Berhasil</td>
                                            <td>Usability Website Memiliki Performa Yang Sangat Baik dan Memuaskan Dari Segi Pengguna</td>
                                        </tr>
                                        <tr>
                                            <td>65 - 84 %</td>
                                            <td>Baik</td>
                                            <td>Berhasil</td>
                                            <td>Usability Website Dinyatakan Berhasil </td>
                                        </tr>
                                        <tr>
                                            <td>55 - 64 %</td>
                                            <td>Cukup</td>
                                            <td>Tidak Berhasil</td>
                                            <td>Usability Website Masih Sangat Lemah Dari Segi Pengguna, Maka Masih Perlu Untuk Diperbaiki kembali </td>
                                        </tr>
                                        <tr>
                                            <td>0 - 54 %</td>
                                            <td>Kurang</td>
                                            <td>Tidak Berhasil</td>
                                            <td>Usability Website Yang di Miliki Sangat Buruk dan Banyak yang harus Diperbaiki</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<?php $this->load->view('komponen/footer'); ?>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
    var ctx = document.getElementById("canvas");
    var BarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Awam", "Aktif", "Terampil"],
            datasets: [{
                label: "Ya (%)",
                backgroundColor: "rgba(38, 185, 154, 0.31)",
                borderColor: "rgba(38, 185, 154, 0.7)",
                pointBorderColor: "rgba(38, 185, 154, 0.7)",
                pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointBorderWidth: 1,
                data: [
                    <?php echo $bylevel[0]['ya']; ?>,
                    <?php echo $bylevel[1]['ya']; ?>,
                    <?php echo $bylevel[2]['ya']; ?>]
            }, {
                label: "Tidak (%)",
                backgroundColor: "rgba(3, 88, 106, 0.3)",
                borderColor: "rgba(3, 88, 106, 0.70)",
                pointBorderColor: "rgba(3, 88, 106, 0.70)",
                pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgba(151,187,205,1)",
                pointBorderWidth: 1,
                data: [
                    <?php echo $bylevel[0]['tidak']; ?>,
                    <?php echo $bylevel[1]['tidak']; ?>,
                    <?php echo $bylevel[2]['tidak']; ?>]
            }]
        }
    });
</script>


</body>
</html>
