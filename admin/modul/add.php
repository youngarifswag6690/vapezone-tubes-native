<?php 
	include'../include/connection.php';
	switch(@$_GET['act']){
		default:
 ?>
 <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Blog Posts</span>
                <h3 class="page-title">Add New Post</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                  <div class="card-body">
                    <form class="add-new-post" method="post" action="action.php?module=product&act=input" enctype="multipart/form-data" >
                      <input class="form-control form-control-lg mb-3" type="text" placeholder="Name Product" name="product_name">
                      <div class="mb-3">
                        <textarea class="mytextarea" name="description"></textarea>
                      </div>
                      <input class="form-control form-control-lg mb-3" type="text" placeholder="Price" name="price">
                      <input class="form-control form-control-lg mb-3" type="text" placeholder="Category"name="category">
                      <input type="file" name="image" class="form-control form-control-lg mb-3">
                      <button name="submit">Save</button>
                    </form>
                  </div>
                </div>
                <!-- / Add New Post Form -->
              </div>
              <div class="col-lg-3 col-md-12">
                <!-- Post Overview -->
                <div class='card card-small mb-3'>
                  
                </div>
                <!-- / Post Overview -->
                <!-- Post Overview -->
                
                <!-- / Post Overview -->
              </div>
            </div>
          </div>
<?php 
break;}
 ?>