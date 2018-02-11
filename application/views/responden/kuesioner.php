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
                    <h2>Kuisioner</h2>
                    <h4>Pengisian-Kuisioner</h4>
                </div>
            </div>

            <hr/>
            <hr/>

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <section <?php echo ($kuesioner == 1) ? "hidden" : ""; ?>>
                        <h2>Maaf, Periode Pengisian Kuesioner Telah Ditutup!!!</h2>
                    </section>
                    <section <?php echo ($kuesioner == 0) ? "hidden" : ""; ?>>
                        <section <?php echo ($status['id_levelPengguna'] == 0) ? "" : "hidden"; ?>>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Biodata Responden
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form role="form" method="post"
                                                  action="<?php echo base_url('index.php/kuesioner/levelPengguna/' . $status['id_status']); ?>">
                                                <div class="form-group">
                                                    <label>Berapa lama anda mengakses SIMANGGA dalam 6 bulan terakhir
                                                        ini?</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1"
                                                                   value="option1" checked/> < 5 Jam/Hari
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios2"
                                                                   value="option2"/> >= 5 & < 10 Jam/Hari
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios3"
                                                                   value="option3"/> > 10 Jam/Hari
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Berapa persen(%) pemahaman anda terhadap fitur SIMANGGA ?
                                                    </label>
                                                    <select class="form-control" name="levelPengguna" required>
                                                        <option>---Pilih Salah Satu---</option>
                                                        <option value="1" <?php echo ($status['id_levelPengguna'] == 1) ? "selected" : ""; ?>>
                                                            < 70%
                                                        </option>
                                                        <option value="2" <?php echo ($status['id_levelPengguna'] == 2) ? "selected" : ""; ?>>
                                                            >= 70% & < 80%
                                                        </option>
                                                        <option value="3" <?php echo ($status['id_levelPengguna'] == 3) ? "selected" : ""; ?>>
                                                            >= 80% - 100%
                                                        </option>
                                                    </select>
                                                </div>
                                                <hr>
                                                <button type="submit" class="btn btn-primary" value="submit">SIMPAN
                                                </button>
                                                </hr>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section <?php echo ($status['id_levelPengguna'] == 0) ? "hidden" : ""; ?>>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Daftar Komponen Pertanyaan
                                </div>
                                <div class="hr-div"></div>
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Komponen</th>
                                            <th>Action</th>
                                            <th>Status Pengisian</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 1;
                                        $blm = 0;
                                        foreach ($data as $row) { ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row['nama_komp']; ?></td>
                                                <td>
                                                    <a href="<?php echo ($status['status_' . $row['nama_komp']] == 0) ? base_url('index.php/kuesioner/jawabKuesioner/' . $row['id_komp']) : "#"; ?>"
                                                       class="label label-primary">Mulai</a></td>
                                                <td><?php echo ($status['status_' . $row['nama_komp']] == 0) ? "<label class='label label-warning'>Belum Terisi</label>" : "<label class='label label-success'>Sudah Terisi</label>"; ?></td>
                                                <?php 
                                                if (!($status['status_' . $row['nama_komp']] == 0)) {
                                                    $blm++;
                                                }
                                                 ?>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                        <section <?php echo (($status['status_Learnability'] == 0) || ($status['status_Efficiency'] == 0) || ($status['status_Memorability'] == 0) || ($status['status_Errors'] == 0) || ($status['status_Satisfaction'] == 0)) ? "hidden" : ""; ?>>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Kritik dan Saran
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form role="form"
                                                  action="<?php echo base_url('index.php/kuesioner/submitSaran'); ?>"
                                                  method="post">
                                                <div class="form-group">
                                                    <label>Menurut Teknis Sistem Manakah Yang Perlu diperbaiki ?</label>
                                                    <select name="saran" class="form-control">
                                                        <option value="Design UI">Design UI</option>
                                                        <option value="Kompleksitas Fitur">Kompleksitas Fitur</option>
                                                        <option value="Kompleksitas Informasi">Kompleksitas Informasi
                                                        </option>
                                                        <option value="Performa Website">Performa Website</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Komentar</label>
                                                    <textarea class="form-control" rows="3" name="komentar"></textarea>
                                                </div>
                                                <hr>
                                                <button type="submit" class="btn btn-primary" value="submit">SIMPAN
                                                </button>
                                                </hr>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>
                    <!-- /. PAGE INNER  -->
                </div>
                <!-- /. PAGE WRAPPER  -->
                <!-- /. WRAPPER  -->
                <?php $this->load->view('komponen/footer'); ?>
                <script>
                    
                    <?php 
                            if ($blm > 0 && $blm < 5) { ?>
                                
swal({
  title: "Komponen Belum Terisi Semua",
  text: "Lanjutkan Pengisian Kuisioner Anda!",
  type: "error",
  confirmButtonText: "Oke"
});
                            <?php }
                        ?>
                </script>


</body>
</html>
