<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $this->load->view('komponen/head'); ?>
<body>
<div id="wrapper">
    <?php $this->load->view('komponen/topbar'); ?>
    <!-- /. NAV TOP  -->
    <?php $this->load->view('komponen/nav_responden'); ?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Hasil Pengisian Kuisioner</h2>
                    <h4>Anda Tergolong Sebagai :
                        Pengguna <?php echo ($responden['id_levelPengguna'] == 1) ? "Awam" : ($responden['id_levelPengguna'] == 2) ? "Aktif" : "Terampil"; ?></h4>
                </div>
            </div>
            <hr/>
            <hr/>
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Hasil Pengisian Kuisioner Anda
                        </div>
                        <div>
                            <canvas id="canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Kritik & Saran Teknis Sistem
                </div>
                <div class="hr-div"></div>
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Komentar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;
                        foreach ($komentar as $value) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $value['saran']; ?></td>
                                <td><?php echo $value['komentar']; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
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
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<?php $this->load->view('komponen/footer'); ?>
<script>
    var ctx = document.getElementById("canvas");
    var BarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["<?php echo $grafik[0]['komp']; ?>", "<?php echo $grafik[1]['komp']; ?>", "<?php echo $grafik[2]['komp']; ?>", "<?php echo $grafik[3]['komp']; ?>", "<?php echo $grafik[4]['komp']; ?>"],
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
                    <?php echo $grafik[0]['nilai_y']; ?>,
                    <?php echo $grafik[1]['nilai_y']; ?>,
                    <?php echo $grafik[2]['nilai_y']; ?>,
                    <?php echo $grafik[3]['nilai_y']; ?>,
                    <?php echo $grafik[4]['nilai_y']; ?>]
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
                    <?php echo $grafik[0]['nilai_n']; ?>,
                    <?php echo $grafik[1]['nilai_n']; ?>,
                    <?php echo $grafik[2]['nilai_n']; ?>,
                    <?php echo $grafik[3]['nilai_n']; ?>,
                    <?php echo $grafik[4]['nilai_n']; ?>]
            }]
        }
    });
</script>

</body>
</html>
