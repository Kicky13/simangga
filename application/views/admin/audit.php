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
                        <h2>Hasil Perhitungan <?php echo $data['nama_komp']; ?></h2>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-6">
                        <form role="form">
                            <div class="form-group">
                                <label> PILIH LEVEL PENGGUNA </label> 
                                <select class="form-control" id="pilihan">
                                    <option selected disabled>PILIH SALAH SATU LEVEL</option>
                                    <option value="awam">PENGGUNA AWAM</option>
                                    <option value="aktif">PENGGUNA AKTIF</option>
                                    <option value="terampil">PENGGUNA TERAMPIL</option>
                                </select>
                            </div>
                        </form>                 
                    </div>
                </div>
                <hr/>
                <div class="row" id="awam">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                PENGGUNA AWAM
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Kode Pertanyaan</th>
                                                <th>Id Pertanyaan</th>
                                                <th>Ya (%)</th>
                                                <th>Tidak (%)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($awam as $row) { ?>
                                            <tr>
                                                <td><?php echo $row['kode_pertanyaan'] ?></td>
                                                <td><?php echo $row['id_pert'] ?></td>
                                                <td><?php echo $row['ya'] ?></td>
                                                <td><?php echo $row['tidak'] ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <a href="<?php echo base_url('index.php/audit/hitungAwam/'.$data['id_komp']); ?>" type="button" class="btn btn-primary" <?php /*echo ($data['awam']['ya'] == 'Kosong') ? "":"disabled"; */?>>HITUNG</a>
                            </hr>

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
                                            <td>Usability Website Dinyatakan sangat baik bagi pengguna namun masih ada yang perlu diperbaiki</td>
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

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Ya (%)</th>
                                                <th>Tidak (%)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $data['awam']['ya']; ?></td>
                                                <td><?php echo $data['awam']['tidak']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-4">         
                                <canvas id="canvas_a"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
                <div class="row" id="aktif">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                PENGGUNA AKTIF
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id Komponen</th>
                                                <th>Id Pertanyaan</th>
                                                <th>Ya (%)</th>
                                                <th>Tidak (%)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($aktif as $item) { ?>
                                            <tr>
                                                <td><?php echo $item['kode_pertanyaan'] ?></td>
                                                <td><?php echo $item['id_pert'] ?></td>
                                                <td><?php echo $item['ya'] ?></td>
                                                <td><?php echo $item['tidak'] ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <a href="<?php echo base_url('index.php/audit/hitungAktif/'.$data['id_komp']); ?>" type="button" class="btn btn-primary" <?php /*echo ($data['aktif']['ya'] == 'Kosong') ? "":"disabled";*/ ?>>HITUNG</a>
                                </hr>

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
                                            <td>Usability Website Dinyatakan sangat baik bagi pengguna namun masih ada yang perlu diperbaiki</td>
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

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Ya (%)</th>
                                                <th>Tidak (%)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $data['aktif']['ya']; ?></td>
                                                <td><?php echo $data['aktif']['tidak']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-4">   
                                <canvas id="canvas_b"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
                <div class="row" id="terampil">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                PENGGUNA TERAMPIL
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id Komponen</th>
                                                <th>Id Pertanyaan</th>
                                                <th>Ya (%)</th>
                                                <th>Tidak (%)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($terampil as $item) { ?>
                                            <tr>
                                                <td><?php echo $item['kode_pertanyaan'] ?></td>
                                                <td><?php echo $item['id_pert'] ?></td>
                                                <td><?php echo $item['ya'] ?></td>
                                                <td><?php echo $item['tidak'] ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <a href="<?php echo base_url('index.php/audit/hitungTerampil/'.$data['id_komp']); ?>" type="button" class="btn btn-primary" <?php /*echo ($data['terampil']['ya'] == 'Kosong') ? "":"disabled";*/ ?>>HITUNG</a>
                            </hr>

                            <div class="panel panel-default">
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
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Ya (%)</th>
                                                <th>Tidak (%)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $data['terampil']['ya']; ?></td>
                                                <td><?php echo $data['terampil']['tidak']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-4">         
                                <canvas id="canvas_c"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                    <!-- /. PAGE INNER  -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<?php $this->load->view('komponen/footer'); ?>

<script>
var pilihan = $("#pilihan").val();
        console.log(pilihan);
        $("#awam").hide();
            $("#aktif").hide();
            $("#terampil").hide();
    $("#pilihan").change(function(){
        var pilihan = $("#pilihan").val();

        if (pilihan == "awam") {
            $("#awam").show();
            $("#aktif").hide();
            $("#terampil").hide();
            
        }else if(pilihan == "aktif"){
            $("#awam").hide();
            $("#aktif").show();
            $("#terampil").hide();
        }else{
            $("#awam").hide();
            $("#aktif").hide();
            $("#terampil").show();
        }    
    });

    var ctxa = $("#canvas_a");
    var ctxb = $("#canvas_b");
    var ctxc = $("#canvas_c");

    var myCharta = new Chart(ctxa, {
    type: 'pie',
    data: {
        labels: ["Ya", "Tidak"],
        datasets: [{
            label: '# of Votes',
            data: [<?php echo $data['awam']['ya']; ?>, <?php echo $data['awam']['tidak']; ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                            ],
            borderWidth: 1
        }]
    },
    
});

var myCharta = new Chart(ctxb, {
    type: 'pie',
    data: {
        labels: ["Ya", "Tidak"],
        datasets: [{
            label: '# of Votes',
            data: [<?php echo $data['aktif']['ya']; ?>, <?php echo $data['aktif']['tidak']; ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                            ],
            borderWidth: 1
        }]
    },
    
});

var myCharta = new Chart(ctxc, {
    type: 'pie',
    data: {
        labels: ["Ya", "Tidak"],
        datasets: [{
            label: '# of Votes',
            data: [<?php echo $data['terampil']['ya']; ?>, <?php echo $data['terampil']['tidak']; ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                            ],
            borderWidth: 1
        }]
    },
    
});
    
</script>
</body>
</html>
