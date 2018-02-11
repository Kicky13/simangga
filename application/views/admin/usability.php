<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $this->load->view('komponen/head'); ?>
<body>
    <div id="wrapper">
        <?php $this->load->view('komponen/topbar'); ?>  
           <!-- /. NAV TOP  -->
                <?php $this->load->view('komponen/nav_admin'); ?>  
           <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Komponen Usability</h2>  
                    </div>
                </div>
                  <hr /> <hr />                
      
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h4>Tabel Komponen</h4>
                        </div>
                        <div class="hr-div"> <hr/></div>
                            <div class="table-responsive">
                                <table class="table" id="#">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Komponen</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1;
                                    foreach ($data as $row) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row['nama_komp']; ?></td>
                                            <td><?php echo $row['detail']; ?></td>
                                            <td><a href="<?php echo base_url('index.php/usability/detailKomponen/'.$row['id_komp'].'/'.$row['nama_komp']); ?>" class="label label-success">Detail</a></td>
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
