<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $this->load->view('komponen/head'); ?>
<body>
<div id="wrapper">
    <?php $this->load->view('komponen/topbar'); ?>
    <!-- /. NAV TOP  -->
    <?php $this->load->view('komponen/nav_super'); ?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Hasil Kuisioner Responden</h2>
                    <h4>USABILITY TESTING</h4>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Persentase (%) Hasil Kuisioner Pengguna AWAM, AKTIF & TERAMPIL
                        </div>
                        <div class="panel-body">
                            <div>
                                <canvas id="canvas"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
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
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Hasil Evaluasi Teknis Sistem
                        </div>
                        <div class="panel-body">
                            <div>
                                <canvas id="evaluasi"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. ROW  -->
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<?php $this->load->view('komponen/footer'); ?>
<script>
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
                    <?php echo $grafik[0]['ya']; ?>,
                    <?php echo $grafik[1]['ya']; ?>,
                    <?php echo $grafik[2]['ya']; ?>]
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
                    <?php echo $grafik[0]['tidak']; ?>,
                    <?php echo $grafik[1]['tidak']; ?>,
                    <?php echo $grafik[2]['tidak']; ?>]
            }]
        }
    });
    var ctx = document.getElementById("evaluasi");
    var BarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["<?php echo $grafik2[0]['saran']; ?>", "<?php echo $grafik2[1]['saran']; ?>", "<?php echo $grafik2[2]['saran']; ?>", "<?php echo $grafik2[3]['saran']; ?>"],
            datasets: [{
                label: "Jumlah Komentar",
                backgroundColor: "rgba(38, 185, 154, 0.31)",
                borderColor: "rgba(38, 185, 154, 0.7)",
                pointBorderColor: "rgba(38, 185, 154, 0.7)",
                pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointBorderWidth: 1,
                data: [
                    <?php echo $grafik2[0]['jumlah']; ?>,
                    <?php echo $grafik2[1]['jumlah']; ?>,
                    <?php echo $grafik2[2]['jumlah']; ?>,
                    <?php echo $grafik2[3]['jumlah']; ?>]
            }]
        }
    });
</script>

</body>
</html>
