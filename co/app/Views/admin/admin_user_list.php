<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php //$del=$_GET['delete'];?>

<!DOCTYPE html>
<html>

<head>
  <?php echo view('admin/common/head');?>
</head>

<body>
  <!-- Sidenav -->
    <?= view('admin/common/sidenavebar');?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?= view('admin/common/nav')?>
    <!-- Header -->
	<?= view('admin/common/header')?>
    <!-- Header -->
    
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="">
            <!-- Card header -->
            <div class="card-header border-0">
              <h1 class="hhh">ADMIN_USER_LIST</h1>
			   <div style="text-align:center;"><a type="button"   class="btn3 btn btn-danger" href="<?php echo base_url('public/meesho/admin/admin_user')?>">Add User</a></div>
            </div>
			  <?php 
				
				//print_r(//$data['Price']);
					//print_r($del);
					print_r($mydata);
			?>
            </div>
			<table class="table table-hover">
				<thead>
				  <tr >
					<th>Id</th>
					<th>Name</th>
					<th>image</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Password</th>
					<th>Status</th>
					<th>CreatedDate</th>
					<th>Edit</th>
					<th>Delete</th>
				  </tr>
				</thead>
				<tbody>
				<?php
					foreach($mydata as $adminlist){
						
						?>
						<tr>
							<td><?= $adminlist['Id']?></td>
							<td><?= $adminlist['Name']?></td>
							<td><?= $adminlist['image']?></td>
							<td><?= $adminlist['Email']?></td>
							<td><?= $adminlist['Mobile']?></td>
							<td><?= $adminlist['Password']?></td>
							<td><?= $adminlist['Status']?></td>
							<td><?= $adminlist['CreatedDate']?></td>
							<td><a type="button"  href="<?= base_url('public/meesho/admin/admin_user')?>?edit=<?= $adminlist['Id']?>"class="btn btn-danger">Edit</a></td>
							<td><a type="button"  href="<?= base_url('public/meesho/admin/admin_user_list')?>?delete=<?= $adminlist['Id']?>"class="btn btn-primary">delete</a></td>
						</tr>
						
						<?php
						}
					?>
				
				
				   
				  
				</tbody>
			  </table>
			
            <!-- Light table -->
			
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                
                
              </table>
            </div>
            <!-- Card footer -->
             <?= view('admin/common/footer')?>
          </div>
        </div>
      </div>
	  
      <!-- Dark table -->
      
      <!-- Footer -->

    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
   <?= view('admin/common/script')?>
	<script>
	
	</script>
</body>

</html>