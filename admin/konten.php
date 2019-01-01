<?php
  include '../include/connection.php';
  if ($_GET['module']=='dashboard') {

?>
<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Welcome</span>
                <h3 class="page-title">Vape Zone</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Small Stats Blocks -->
            
            <!-- End Small Stats Blocks -->
            
          </div>

<?php 
  }elseif($_GET['module']=='product'){
      include"modul/product.php";
  }elseif($_GET['module']=='add'){
      include"modul/add.php";
  }elseif($_GET['module']=='profile'){
      include"modul/profile.php";
  }else{
    echo"<p><b>Belum Ada</b></p>";
  }
  
 ?>