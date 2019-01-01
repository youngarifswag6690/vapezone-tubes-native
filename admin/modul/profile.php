<?php 
	include '../include/connection.php';
	switch(@$_GET['act']){
		default:
 ?>
 <div class="main-content-container container-fluid px-4">
  <?php 
                          $r = mysqli_query($conn, "select * from profile ");
                         $i=mysqli_fetch_array($r);
                         ?>
                          
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Profile</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img class="circle" src="<?php echo "../image/".$i['image']; ?>" alt="User Avatar" width="110"> </div>
                    <h4 class="mb-0"><?php echo $i['nama_toko']; ?></h4>
                    
                    
                  </div>
                  <ul class="list-group list-group-flush">
                    
                    <li class="list-group-item p-4">
                      <strong class="text-muted d-block mb-2">Description</strong>
                      <span><?php echo $i['description']; ?></span>
                    </li>
                  </ul>
                </div>
              </div>
              
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Account Details</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form method="post" action="action.php?module=profile&act=update" enctype="multipart/form-data">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <input type="hidden"name="id_profile" value="<?php echo $i['id_toko']; ?>">
                                <label for="feFirstName">Name</label>
                                <input type="text"name="nama_toko"class="form-control" id="feFirstName" placeholder="Name" value="<?php echo $i['nama_toko']; ?>"> </div>
                              
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Email</label>
                                <input type="email" name="contact"class="form-control" id="feEmailAddress" placeholder="Email" value="<?php echo $i['contact']; ?>"> </div>
                              
                            </div>
                            <div class="form-group">
                              <label for="feInputAddress">Address</label>
                              <input type="text"name="address" class="form-control" id="feInputAddress" value="<?php echo $i['address']; ?>"> </div>
                            
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feDescription">Description</label>
                                <textarea class="form-control" name="description"id="feDescription" rows="5"><?php echo $i['description']; ?></textarea>
                              </div>
                            </div>
                            <input type="file" name="image" class="form-control form-control-lg mb-3"
                      >
                            <button type="submit" name=" submit"class="btn btn-accent">Update Account</button>

                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
          </div>
<?php 
break;}
 ?>