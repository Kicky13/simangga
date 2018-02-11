<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $this->load->view('komponen/head'); ?>
<body>
<div id="wrapper">
    <?php $this->load->view('komponen/topbar'); ?>
    <!-- /. NAV TOP  -->
    <?php $this->load->view('komponen/nav_super'); ?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>User</h2>
                    <h4>Tabel Detail - User</h4>
                </div>
            </div>

            <hr />  <hr />

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar User
                        </div>
                        <div class="hr-div">
                            <hr> <a href="<?php echo base_url('index.php/user/formAdduser'); ?>" class="btn btn-success ">Tambah Baru</a>
                            </hr><hr/></div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Jabatan</th>
                                    <th>Level</th>
                                    <th>ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $n = 1;
                                foreach ($data as $row){ ?>
                                <tr>
                                    <td><?php echo $n++; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['password']; ?></td>
                                    <td><?php echo $row['jabatan']; ?></td>
                                    <td><?php echo $row['level']; ?></td>
                                    <td><a href="<?php echo base_url('index.php/user/formEdituser/'.$row['id_user']); ?>" class="label label-default">EDIT</a> &nbsp;<a href="<?php echo base_url('index.php/user/deleteUser/'.$row['id_user']); ?>" class="label label-danger">DELETE</a></td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>


                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
            <!-- /. WRAPPER  -->
            <?php $this->load->view('komponen/footer'); ?>
            <script>
                $(document).ready(function () {
                    $('#dataTables-example').dataTable();
                });
            </script>


</body>
</html>
