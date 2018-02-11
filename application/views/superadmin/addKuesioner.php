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
                    <h2> Kuisioner </h2>
                    <h3> Kuisioner - Daftar Pertanyaan </h3>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Pertanyaan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="post" action="<?php echo base_url('index.php/kuesioner/addKuesioner'); ?>">
                                        <div class="form-group">
                                            <label>Komponen</label>
                                            <select name="komp" class="form-control">
                                                <?php foreach ($komp as $item){ ?>
                                                <option value="<?php echo $item['id_komp']; ?>"><?php echo $item['nama_komp']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pertanyaan</label>
                                            <textarea name="pertanyaan" class="form-control" rows="3"></textarea>
                                        </div>
                                        <hr>
                                        <button type="submit" value="submit" class="btn btn-primary">SIMPAN</button> &nbsp;
                                        <a href="<?php echo base_url('index.php/kuesioner'); ?>" type="button" class="btn btn-danger">BATAL</a>
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
