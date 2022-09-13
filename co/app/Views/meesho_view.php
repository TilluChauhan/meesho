
<!DOCTYPE html>
<html>
	<head>
	
		<?php echo  view('common/head_view'); ?>
	</head>
	<body>
		<!--header-->
			<?= view('common/header')?>
		<!--header-->
		
		<?php //print_r($mydata);?>
		
		
		
		<section class="section2 animate__animated  animate__slideInDown">
			<div class="container  ">
				<div class="row row3 ">
					<div class="col-lg-6 col-md-6">
						<div class="web  wbe">
							<div class="web1">
								Lowest Prices<br>
								Best Quality Shopping
							</div>
							<div class="web2">50 lakh+ Styles | 650+ categories
							</div>
							<button class="dwn animate__animated animate__bounce"><span style="padding-right:10px;"><img src="<?php echo base_url('public/image/playstore.png');?>" style="width:23px;"></span>Download  The Meesho App</button>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 we1">
						<div class="web">
							<img src="<?php echo base_url('public/image/mes.jpeg');?>">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section3">
			<div class="container">
				<div class="row row4">
					<div class="col-lg-12 col-md-12 qw1">
						<div class="qw" id="scroll">
							Top Categories to choose from
						</div>
					</div>
				</div>
				<div class="row row14" style="background-image:url('<?php echo base_url('public/image/demo16.webp');?>');">
					<div class="col-lg-4 col-md-12">
						<div class="wq1">
							<div class="wq2" >
								<img  class="imj" style="width:100%; " src="<?php echo base_url('public/image/demo13.jpg');?>">
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-12">
						<div class="row">
						<div class="ee">Fashion Store</div>
							<div class="col-lg-6 col-md-6 cold">
								<div class="wq1">
									<div class="wq2" >
										<img style="width:100%;" src="<?php echo base_url('public/image/demo14.jpg');?>">
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="wq1">
									<div class="wq2" >
										<img style="width:100%;" src="<?php echo base_url('public/image/demo15.jpg');?>">
									</div>
								</div>
							</div>
						
						</div>
				
					</div>
					
				</div>
			</div>
		</section>
		<section class="section4">
			<div class="container" style="background-image:url('<?php echo base_url('public/image/demo4.jpeg');?>')">
				<div class="row row7">
					<div class="col-lg-4 col-md-8">
						<div class="t">
							<p class="tt1">Homecare</p>
							<button class="ttb">VIEW ALL</button>
						</div>
					</div>
					<div class="col-lg-8 col-md-12">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-6" style="text-align:center;">
								<img class="imggg"  style="width:100%;" src="<?= base_url('public/image/demo5.webp');?>">
								<button class="imgb">Bedsheets</button>
							</div>
							<div class="col-lg-4 col-md-4 col-6" style="text-align:center;">
								<img class="imggg" style="width:100%;" src="<?= base_url('public/image/demo6.webp');?>">
								<button class="imgb">Kicthenware</button>
							</div>
							<div class="col-lg-4 col-md-4 col-6" style="text-align:center;">
								<img class="imggg" style="width:100%;" src="<?= base_url('public/image/demo7.webp');?>">
								<button class="imgb">Carpets</button>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		
		<section class="section5">
			<div class="container">
				<div class="row ro9"  style="background-image:url('<?php echo base_url('public/image/demo8.webp');?>');">
					<div class="col-lg-12 col-md-12">
						<div class="tt3">
							<h1 class="tt4">Become a Reseller and</h1>
							<h1 class="tt5">Start your Online Business<br>
							with Zero Investment</h1>
							<div class="tt85">
								<div class="tt86">
									<img src="<?= base_url('public/image/demo9.png');?>">
									<span><img src="<?= base_url('public/image/demo10.png');?>"></span>
								</div>
								
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section6">
			<div class="container roe" style="background-image:url('<?php echo base_url('public/image/demo11.webp');?>');">
				<div class="row  " >
					<div class="col-lg-12 col-md-12">
					`	<div class="tq">
							<h1 class="tq1">Register as a Meesho Supplier</h1>
							<h5 class="tq2">Sell your products to crores of customers at 0% commission</h5>
							<p class="tq3"><i class=" tq4 fa-solid fa-circle-check"></i>Grow your business 10x <span class="tq5">|</span><i class=" tq4 fa-solid fa-circle-check"></i>Enjoy 100% Profit <span class="tq5 ">|</span><i class=" tq4 fa-solid fa-circle-check"></i>Sell all over </p>
							<button class="qws">Sign up now</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Product For You-->
		<?= view('common/product');?>
		<!--Product For You-->
		
		<!--footer-->
		<?= view('common/footer');?>
		<!--footer-->
		<!--script-->
			<?php echo  view('common/script'); ?>
		<!--script-->
		<script>
		$(document).ready(function(){
			});
		</script>
	</body>
		
</html>


