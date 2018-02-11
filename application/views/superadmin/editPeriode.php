<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $this->load->view('komponen/head'); ?>
<body>
<div id="wrapper">
    <?php $this->load->view('komponen/topbar'); ?>
    <!-- /. NAV TOP  -->
    <?php $this->load->view('komponen/nav_super'); ?>

    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2> Periode </h2>
                    <h3> Form Data Periode </h3>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Edit Data Periode
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="post" action="<?php echo base_url('index.php/periode/editPeriode/'.$data['id_periode']); ?>">
                                        <div class="form-group">
                                            <label>Tanggal Awal</label>
                                            <input name="awal" value="<?php echo $data['tgl_awal']; ?>" class="form-control datepicker" placeholder="Input Tanggal Awal Periode" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Akhir</label>
                                            <input name="akhir" value="<?php echo $data['tgl_akhir']; ?>" class="form-control datepicker" placeholder="Input Tanggal Akhir Periode" required>
                                        </div>

                                        <hr>
                                        <button type="submit" value="update" class="btn btn-primary">UPDATE</button> &nbsp;
                                        <a href="<?php echo base_url('index.php/periode'); ?>" type="button" class="btn btn-danger">BATAL</a>
                                        </hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Form Elements -->
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
    $('.datepicker').datepicker({
        format: 'yyyy/mm/dd',
        startdate: '-3d'
    });
</script>

</body>
</html>
