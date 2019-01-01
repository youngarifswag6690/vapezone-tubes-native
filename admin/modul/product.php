<?php 
	include'../include/connection.php';
	switch(@$_GET['act']){
		default:
 ?>
 <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Data Product</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Product</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">No</th>
                          <th scope="col" class="border-0">Product Name</th>
                          <th scope="col" class="border-0">Description</th>
                          <th scope="col" class="border-0">Category</th>
                          <th scope="col" class="border-0">Price</th>
                          <th scope="col" class="border-0">Image</th>
                          <th scope="col" class="border-0">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php 
                      		$r = mysqli_query($conn, "select * from product order by id_product");
                      		$nomor=1;
                      		while($i=mysqli_fetch_array($r)){
                      	 ?>
                        <tr>
                          <td><?php 
                          echo $nomor++; ?></td>
                          <td><?php 
                          echo $i['product_name'] ;?></td>
                          <td><?php 
                          echo $i['description']; ?></td>
                          <td><?php 
                          echo $i['category']; ?></td>
                          <td><?php 
                          echo $i['price']; ?></td>
                          <td><img src="<?php 
                          echo '../image/'. $i['image']; ?>" width="100" height="100">  </td>
                          <td><a class='btn btn-primary' href=?module=product&act=editproduct&id=<?php echo $i["id_product"];?>>Edit</a> 
        <a class='btn btn-danger' href="action.php?module=product&act=hapus&id=<?php echo $i["id_product"];?>">Hapus</a></td>
                        </tr>
                        <?php } ?>
                      </tbody>
<!--  -->
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
            <!-- Default Dark Table -->
            
            <!-- End Default Dark Table -->
          </div>
<?php 
break;
case "editproduct":
$edit=mysqli_query($conn,"select * from product where
            id_product='$_GET[id]'");
          $r=mysqli_fetch_array($edit);
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
                    <form class="add-new-post" method="post" action="action.php?module=product&act=editproduct" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $r['id_product']; ?>">

                      <input class="form-control form-control-lg mb-3" type="text" placeholder="Name Product" name="name"
                      value="<?php  echo $r['product_name']; ?>">
                      <div class="mb-3">
                        <textarea class="mytextarea" name="des" ><?php  echo$r['description']; ?></textarea>
                      </div>
                      <input class="form-control form-control-lg mb-3" type="text" placeholder="Price" name="pr"value="<?php  echo$r['price']; ?>">
                      <input class="form-control form-control-lg mb-3" type="text" placeholder="Category"name="cat" value="<?php  echo$r['category']; ?>">
                      <input type="file" name="image" class="form-control form-control-lg mb-3"
                      >
                      <input type="submit" name="submit" value="simpan">
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