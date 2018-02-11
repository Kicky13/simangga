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
                                    <form role="form" method="post" action="<?php echo base_url('index.php/user/editUser/'.$data['id_user']); ?>">
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select name="level" class="form-control">
                                                <option value="3" <?php echo ($data['level'] == 3)?"selected":""; ?>>Responden</option>
                                                <option value="2" <?php echo ($data['level'] == 2)?"selected":""; ?>>Admin Simangga</option>
                                                <option value="1" <?php echo ($data['level'] == 1)?"selected":""; ?>>Super Admin</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" value="<?php echo $data['username']; ?>" class="form-control" placeholder="Enter ID-Blok Lahan" />
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" name="password" value="<?php echo $data['password']; ?>" class="form-control" placeholder="Enter Luas Lahan (m2)" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <select name="jabatan" class="form-control">
                                                <option value="Admin Simangga" <?php echo ($data['jabatan'] == 'Admin Simangga')?"selected":""; ?>>Admin Simangga</option>
                                                <option value="Operator" <?php echo ($data['jabatan'] == 'Operator')?"selected":""; ?>>Operator</option>
                                                <option value="Pimpinan Unit" <?php echo ($data['jabatan'] == 'Pimpinan Unit')?"selected":""; ?>>Pimpinan Unit</option>
                                                <option value="Kepala Prodi" <?php echo ($data['jabatan'] == 'Kepala Prodi')?"selected":""; ?>>Kepala Prodi</option>
                                                <option value="Ketua GPM" <?php echo ($data['jabatan'] == 'Ketua GPM')?"selected":""; ?>>Ketua GPM</option>
                                                <option value="Sekretaris GPM" <?php echo ($data['jabatan'] == 'Sekretaris GPM')?"selected":""; ?>>Sekretaris GPM</option>
                                                <option value="Reviewer" <?php echo ($data['jabatan'] == 'Reviewer')?"selected":""; ?>>Reviewer</option>
                                            </select>
                                        </div>
                                        <hr>
                                        <button type="submit" value="update" class="btn btn-primary">UPDATE</button> &nbsp;
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
