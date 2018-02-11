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
                    <h2>Hasil Audit Kuisioner</h2>
                    <h4>EVALUASI TEKNIS SISTEM</h4>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Persentase (%) Evaluasi Teknis Sistem SIMANGGA
                        </div>
                        <div class="panel-body">
                            <div>
                                <canvas id="canvas"></canvas>
                            </div>
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
            labels: ["<?php echo $data[0]['saran']; ?>", "<?php echo $data[1]['saran']; ?>", "<?php echo $data[2]['saran']; ?>", "<?php echo $data[3]['saran']; ?>"],
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
                    <?php echo $data[0]['jumlah']; ?>,
                    <?php echo $data[1]['jumlah']; ?>,
                    <?php echo $data[2]['jumlah']; ?>,
                    <?php echo $data[3]['jumlah']; ?>]
            }]
        }
    });
</script>
</body>
</html>
