<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $this->load->view('komponen/head'); ?>
<body>
    <div id="wrapper">
        <?php $this->load->view('komponen/topbar'); ?>   
           <!-- /. NAV TOP  -->
                <?php $this->load->view('komponen/nav_responden'); ?>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Dashboard</h2>   
                        <h5>Welcome SI-WEBSITE </h5>
                    </div>
                </div>              
               
                  <hr/>  <hr/>                
      
                <div class="row">                   
                    <div class="col-md-9 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Sistem Evaluasi Website Simangga
                        </div>
                        <div class="panel-body">
                            <div class="panel-group">
                            <div class="panel-body">
                              
                            </div>
                            </div>
                        </div>
                    </div>            
                </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; SI-WEBSITE</strong>
                             <p class="text-muted">Sistem Evaluasi Pengukuran Website merupakan sistem yang digunakan untuk melakukan evaluasi Sistem Manajemen Anggaran Universitas Jember berbasis website dengan cara mengisian kuisioner, yang mana sistem ini memiliki  fitur untuk memperkirakan hasil evaluasi dengan metode usability testing.</p>
                        </div>
                       
                    </div>
                
           </div> 
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
