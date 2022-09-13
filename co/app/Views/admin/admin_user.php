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
<!DOCTYPE html>
<?php 
$user=$mydata[0];
	$add=true;
	$id=null;
	if(isset($_GET['edit'])){
		$add=false;
		$id=$_GET['edit'];
	//print_r($user);
	}



	?>
<html>

<head>
    <?php echo view('admin/common/head');?>
</head>

<body>
  <!-- Sidenav -->
  <?php echo view('admin/common/sidenavebar');?>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?= view('admin/common/nav')?>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tables</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="">
            <!-- Card header -->
            <div class="card-header border-0">
              <h1 class="hhh">USER ADD table</h1>
            </div>
            <!-- Light table -->
			<section class="ad1">
				<h1>messho</h1>
					<div class="ad3">
					  <div class="form-group">
						<label for="email">Name:</label>
						<input type="text" value="<?= $user['Name'];?>" class="form-control" placeholder="Enter Name " id="name">
					  </div>
					  <div class="form-group">
						<label for="text">Mobile:</label>
						<input type="number" class="form-control" placeholder="Enter Mobile" id="mobile">
					  </div>
					  <div class="form-group">
						<label for="text">Email</label>
						<input type="email" class="form-control" placeholder="Enter Your email" id="email">
					  </div>
					  <div class="form-group">
						<label for="text">Password:</label>
						<input type="text" class="form-control" placeholder="Enter Password" id="password">
					  </div>
					  <div class="form-group">
						<label for="text">User Image:</label>
						<input type="file" class="form-control" placeholder="Enter User Image" id="User">
					  </div>
					  <div class="form-group form-check">
						<label class="form-check-label">
						  <input class="form-check-input" type="checkbox"> Remember me
						</label>
					  </div>
					  <?php if($add){
						  ?>
						  <button id="login" type="submit" class="btn btn-primary">Submit</button>
						<?php
					  }else{
						 ?>
						  <button id="login" type="submit" class="btn btn-primary">Update</button>
						<?php
						
					  }?>
					  
					</div>
				</section>
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
   <?= view('admin/common/script'); ?>
	<script>
	$(document).ready(function(){
		$("#login").click(function(){
			alert("hgfhgfhgf");
			 var name = $('#name').val();
			 var mobile = $('#mobile').val();
			 var email = $('#email').val();
			 var password = $('#password').val();
			 var User = $('#User')[0].files[0];			 
			 console.log(name);
			 console.log(mobile);
			 console.log(email);
			 console.log(password);
			 console.log(User);
			var obj=new FormData();
			obj.append('name',name);
			obj.append('mobile',mobile);
			obj.append('email',email);
			obj.append('password',password);
			obj.append('User',User);
			// obj.append('name',name);
			
			// var obj = {
				// name:name,
				// mobile:mobile,
				// email:email,
				// password:password,
				// User:User
			// }
			 // console.log(obj);
		
			$.ajax({  
				url:"<?php echo base_url('/public/ajaxadmin_user'); ?>",
				type: "POST",
				dataType:'json',
				contentType:false,
					 processData:false,
				data:obj,
				success:function(data){
					alert(data);
				}  
			});
		});
	});
	</script>
	
</body>

</html>