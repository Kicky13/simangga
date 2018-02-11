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
                    <h2> Komponen </h2>
                    <h3> Daftar Nama Komponen </h3>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Komponen
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" action="<?php echo base_url('index.php/komponen/editKomponen/'.$data['id_komp']); ?>" method="post">
                                        <div class="form-group">
                                            <label>Nama Komponen</label>
                                            <input class="form-control" placeholder="Enter Nama Komponen" name="komp" value="<?php echo $data['nama_komp']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Text area</label>
                                            <textarea class="form-control" rows="3" name="detail"><?php echo $data['detail']; ?></textarea>
                                        </div>
                                        <hr>
                                        <button type="submit" value="update" class="btn btn-primary">UPDATE</button> &nbsp;
                                        <a type="button" href="<?php echo base_url('index.php/komponen'); ?>" class="btn btn-danger">BATAL</a>
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


</body>
</html>
