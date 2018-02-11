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
                    <h2> Users </h2>
                    <h3> Form Data User </h3>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Data User
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="post" action="<?php echo base_url('index.php/user/addUser'); ?>">
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select name="level" class="form-control">
                                                <option value="3">Responden</option>
                                                <option value="2">Admin Simangga</option>
                                                <option value="1">Super Admin</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <select name="jabatan" class="form-control">
                                                <option value="Admin Simangga">Admin Simangga</option>
                                                <option value="Operator">Operator</option>
                                                <option value="Pimpinan Unit">Pimpinan Unit</option>
                                                <option value="Kepala Prodi">Kepala Prodi</option>
                                                <option value="Ketua GPM">Ketua GPM</option>
                                                <option value="Sekretaris GPM">Sekretaris GPM</option>
                                                <option value="Reviewer">Reviewer</option>
                                            </select>
                                        </div>
                                        <hr>
                                        <button type="submit" value="submit" class="btn btn-primary">SIMPAN</button> &nbsp;
                                        <a href="<?php echo base_url('index.php/user'); ?>" class="btn btn-danger">BATAL</a>
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
