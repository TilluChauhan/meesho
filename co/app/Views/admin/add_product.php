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
<?php
	
	//
 $data = $mydata[0];
 //print_r($data);
?>
<?php
 $add=true;
 $up=null;	
		if(isset($_GET['edit'])){
			$add=false;
			$up=$_GET['edit'];
		 }
 ?>

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
              <h1 class="hhh">Product ADD </h1>
			 
			<?php 
				
				//print_r($mydata);
				//print_r($data['detail']);
			?>
				
            <!-- Light table -->
			<section class="ad1">
				<h1>messho</h1>
					<div class="ad3">
					  <div class="form-group">
						<label for="email">Product Title:</label>
						<input type="text" class="form-control" placeholder="Enter Product Title" id="Title" value="<?php echo !$add ? $data['Title'] : ""; ?>">
					  </div>
					  <div class="form-group">
						<label for="text">Price:</label>
						<input type="text" class="form-control" placeholder="Enter Price" id="Price" value="<?= !$add ? $data['Price'] : "";?>">
					  </div>
					  <div class="form-group">
						<label for="text">Discount:</label>
						<input type="text" class="form-control" placeholder="Enter Discount" value="<?= !$add ? $data['Discount'] : "";?>" id="Discount">
					  </div>
					  <div class="form-group">
						<label for="text">Size:</label>
						<input type="text" class="form-control" placeholder="Enter Size" value="<?= !$add ? $data['Size'] : "";?>" id="Size">
					  </div>
					  <div class="form-group">
						<label for="text">Product Image:</label>
						<input type="file" class="form-control" placeholder="EnterProduct Image" id="image">
					  </div>
					  <div class="form-group">
						<label for="text">Detail Image:</label>
						<input type="file" class="form-control" placeholder="Enter Detail Image" id="d_image">
					  </div>
					  <div class="form-group">
						<label for="text">Product Details:</label>
						<input value="<?= !$add ? $data['detail'] : "";?>" class="form-control"  id="Details" rows=""></input>
						
						</textarea>
					  </div>
					  <div class="form-group form-check">
						<label class="form-check-label">
						  <input class="form-check-input" type="checkbox"> Remember me
						</label>
					  </div>
					  <?php
						 if($add){
							?>
							  <button id="submit" type="submit" class="btn btn-primary">Submit</button>
							  
							<?php
						 }else{
							?>
							<button id="edit" type="submit" class="btn btn-primary">Update</button>
							
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
   <?= view('admin/common/script')?>
	<script>
	$(document).ready(function(){

		$("#submit").click(function(){
		var title=$('#Title').val();
		var price=$('#Price').val();
		var discount=$('#Discount').val();
		var size=$('#Size').val();
		var image=$('#image')[0].files[0];
		var d_image=$('#d_image')[0].files[0];
		var detail=$('#Details').val();
		console.log(title);
		console.log(price);
		console.log(discount);
		console.log(size);
		console.log(image);
		console.log(d_image);
		console.log(detail);
		 var obj={
		 P_Title:title,
		 P_price:price,
		 P_discount:discount,
		 P_size:size,
		 P_image:image,
		 P_dimage:d_image,
		 P_detail:detail
		 }
		 
		 console.log(obj);
		 $.ajax({
			url:"<?php echo base_url('/public/add_product');?>",
			type:"POST",
			datatype:"json",
			data:obj,
			success:function(data){
					alert(data);
			}
		 });
		 
	});
	$('#edit').click(function(){
		//alert('Tusae');
		var id="<?php echo $up;?>";
		var title=$('#Title').val();
		var price=$('#Price').val();
		var discount=$('#Discount').val();
		var size=$('#Size').val();
		var image=$('#image')[0].files[0];
		var d_image=$('#d_image')[0].files[0];
		var detail=$('#Details').val();
		console.log(id);
		console.log(title);
		console.log(price);
		console.log(discount);
		console.log(size);
		console.log(image);
		console.log(d_image);
		console.log(detail);
		
		var update=new FormData();
		update.append('T_id',id);
		update.append('T_title',title);
		update.append('T_price',price);
		update.append('T_discount',discount);
		update.append('T_size',size);
		update.append('T_image',image);
		update.append('T_dimage',d_image);
		update.append('T_detail',detail);
		
		
		// var update={'T_title':title,
					// 'T_price':price,
					// 'T_discount':discount,
					// 'T_size':size,
					// 'T_image':image,
					// 'T_dimage':d_image,
					// 'T_detail':detail
					// }
				console.log(update);
				$.ajax({
					 url:"<?= base_url('public/update_product')?>",
					 type:"POST",
					 dataType:"json",
					 contentType:false,
					 processData:false,
					 data:update,
					 success:function(data){
					 console.log(data);
					 }
				 });
	});
	//edit work
	});
	</script>
</body>

</html>