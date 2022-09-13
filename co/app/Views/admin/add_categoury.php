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
<?php  $cat=$mydata[0];
					//print_r($cat);
		$add=true;
		$upid=null;
		if(isset($_GET['edit'])){
			$add=false;
			$upid=$_GET['edit'];
		}
					?>
<!DOCTYPE html>
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
              <h1 class="hhh">Categoury ADD table</h1>
            </div>
            <!-- Light table -->
			<section class="ad1">
				<h1>messho</h1>
				
					<div class="ad3">
					  <div class="form-group">
						<label for="email">categoury:</label>
						<input type="text" value="<?= !$add ? $cat['cat_name'] : ""?>" class="form-control" placeholder="Enter categoury" id="category">
					  </div>
					  <div class="form-group">
						<label for="email">Status</label>
						<input type="number" value="<?= !$add ? $cat['status'] : ""?>" class="form-control" placeholder="Enter categoury" id="status">
					  </div>


					  <div class="form-group form-check">
						<label class="form-check-label">
						  <input class="form-check-input" type="checkbox"> Remember me
						</label>
					  </div>
					  <?php if($add){
					  ?>
						 <button id="cat" class="btn btn-primary">Submit</button>
					<?php 
					  }else{
						 ?>
						 <button id="upcat" class="btn btn-primary">Update</button>
					<?php
					  }
					  ?>
					 
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
		$("#cat").click(function(){
			var name=$('#category').val();
			var status=$('#status').val();
			console.log(name);
			
			console.log(status);
			var obj={P_cat:name,P_status:status}
			console.log(obj);
			
			$.ajax({
				url:"<?= base_url('/public/add_category');?>",
				type:"POST",
				datatype:"json",
				data:obj,
				success:function(data){
					alert(data);
				}
			});
		});
		$('#upcat').click(function(){
			var id="<?php echo $upid;?>";
			var cname=$('#category').val();
			var status=$('#status').val();
			console.log(id);
			console.log(cname);
			console.log(status);
			
			var obj={'T_id':id,'T_cname':cname,'T_status':status}
			console.log(obj);
			
			$.ajax({
				url:"<?= base_url('public/update_category');?>",
				type:"POST",
				dataType:"json",
				data:obj,
				sucess:function(data){
					console.log(data);
				}
			});
		});
	});

  </script>
</body>

</html>