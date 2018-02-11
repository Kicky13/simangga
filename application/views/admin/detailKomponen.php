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
                     <h2>Daftar Pertanyaan</h2>  
                    </div>
                </div>
                  <hr /> <hr />                
      
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h4>Pertanyaan ( <?php echo $komponen; ?> )</h4>
                        </div>
                        <div class="hr-div"> <hr/></div>
                            <div class="table-responsive">
                                <table class="table" id="#">
                                    <thead>
                                        <tr>
                                            <th>Id Pertanyaan</th>
                                            <th>Pertanyaan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($data as $row) { ?>
                                        <tr>
                                            <td><?php echo $row['id_pert']; ?></td>
                                            <td><?php echo $row['pertanyaan']; ?></td>
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
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    
   
</body>
</html>
