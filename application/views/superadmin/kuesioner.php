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
                    <h2>Kuisioner</h2>
                    <h4>Kuisioner-Kelola Pertanyaan</h4>
                </div>
            </div>

            <hr />  <hr />

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Komponen Pertanyaan
                        </div>
                        <div class="hr-div">
                            <hr> <a href="<?php echo base_url('index.php/kuesioner/formAddkuesioner'); ?>" class="btn btn-success">Tambah Baru</a>
                            </hr><hr/></div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Komponen</th>
                                    <th>Pertanyaan</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1;
                                foreach ($data as $row){ ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['nama_komp']; ?></td>
                                    <td><?php echo $row['pertanyaan']; ?></td>
                                    <td><a href="<?php echo base_url('index.php/kuesioner/formEditkuesioner/'.$row['id_pert']); ?>" class="label label-default">EDIT</a></td>
                                    <td><a href="<?php echo base_url('index.php/kuesioner/deleteKuesioner/'.$row['id_pert']); ?>" class="label label-danger">DELETE</a></td>
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
