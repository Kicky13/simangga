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
                    <h4>Komponen - <?php echo $data[0]['nama_komp']; ?></h4>
                </div>
            </div>

            <hr/>
            <hr/>

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $data[0]['detail']; ?>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Pertanyaan
                        </div>
                        <div class="hr-div"></div>
                        <form role="form" action="<?php echo base_url('index.php/kuesioner/submitJawaban/'.$data[0]['id_komp']); ?>" method="post">
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Komponen</th>
                                        <th>Pertanyaan</th>
                                        <th>Ya</th>
                                        <th>Tidak</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1;
                                    foreach ($data as $item) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $item['nama_komp']; ?></td>
                                            <td><?php echo $item['pertanyaan']; ?></td>
                                            <td><input type="radio" name="<?php echo 'id-' . $item['id_pert']; ?>"
                                                       value="1" required/></td>
                                            <td><input type="radio" name="<?php echo 'id-' . $item['id_pert']; ?>"
                                                       value="0" required/></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                        </form>
                    </div>
                </div>


                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
            <!-- /. WRAPPER  -->
            <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
            <?php $this->load->view('komponen/footer'); ?>
            <script>
                $(document).ready(function () {
                    $('#dataTables-example').dataTable();
                });
            </script>


</body>
</html>
