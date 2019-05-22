<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#0670f0">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">

		<!-- Title -->
		<title>TheBongGuy | Listing Product</title>
		<style>
			b{
				color:black;
				font-weight:1000;
				font-size:20px;
				font-family:arial;
			}
			th{
				color:black;
				font-weight:bold !important;
				font-size:20px;
				font-family:arial;
				background:#ECEEF9;
			}
			.card-body{
				zoom: 64%;
			}
			td{
				color:black;
				font-family:arial;
				font-size:18px;
			}
		</style>
        <?php
		$this->load->view("common/metalinks");
		?>
		<!-- Data table css -->
		<link href="<?php echo base_url('css/dataTables.bootstrap4.min.css');?>" rel="stylesheet" />

	</head>
	<body class="app sidebar-mini rtl">
		<div class="page">
			<div class="page-main">
				<?php
				$this->load->view("common/header");
				?>

				<?php
				$this->load->view("common/sidebar");
				?>

				<div class="app-content my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">View Product &nbsp;&nbsp; <a href="<?php echo base_url("add_product");?>" class="btn btn-primary">Add New</a></h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Listing Product</li>
							</ol>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<?php
										if($this->session->flashdata('success')){
									?>
										<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
									<?php
										}
										if($this->session->flashdata('failed')){
									?>
										<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
									<?php
										}
									?>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered" style="width:100%">
												<thead>
												  <tr>
													<th class="wd-15p">Sl&nbsp;No</th>
													<th class="wd-15p">Category</th>
													<th class="wd-15p">Product&nbsp;Image</th>
													<th class="wd-15p">Product&nbsp;Name</th>
													<th class="wd-15p">Product&nbsp;Title</th>
													<th class="wd-15p">Product&nbsp;Description</th>
													<th class="wd-15p">Wholesale&nbsp;Price</th>
													<th class="wd-15p">Retail&nbsp;Price</th>
													<th class="wd-15p">Added&nbsp;Date</th>
													<th class="wd-15p">Status</th>
													<th class="wd-15p">Action</th>
												  </tr>
												</thead>
												<tbody>
												<?php
													$i = 1;											
													foreach($fetch_product as $product_fetch){
												?>
												  <tr>
												    <td><?php echo $i; ?></td>
													<?php
														$this->load->model('listing_product_m');
														$pro_cat_id = $product_fetch->product_category_id;
														$get_cat_name = $this->listing_product_m->get_name($pro_cat_id);
													?>
													<td><?php echo ucfirst($get_cat_name->category_name);?></td>
													<?php
														$this->load->model('listing_product_m');
														$pro_id = $product_fetch->product_id;
														$get_images = $this->listing_product_m->get_images($pro_id);
													?>
													<td>
													<img src="<?php echo $get_images[0]->product_image_path;?>" height="100">
													</td>
													<td><?php echo $product_fetch->product_name;?></td>
													<td><?php echo $product_fetch->product_title;?></td>
													<td><?php echo $product_fetch->product_desc;?></td>
													<td><?php echo $product_fetch->product_wholesale_price;?></td>
													<td><?php echo $product_fetch->product_retail_price;?></td>
													<td><?php echo date('d/m/Y',$product_fetch->product_added_date);?></td>
													<td class="switch_<?php echo $product_fetch->product_id;?>">
														<label class="custom-switch">
															<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($product_fetch->product_status == 1)?'checked':'');?> onchange="change_status('<?php echo $product_fetch->product_id;?>','<?php echo $product_fetch->product_status;?>');">
															<span class="custom-switch-indicator"></span>
														</label>
													</td>
													<td>
														<a href="<?php echo base_url('edit_product/');?><?php echo $product_fetch->product_id;?>"><img src="<?php echo base_url('images/Edit.png');?>" style="height:30px"></a>
														<a href="<?php echo base_url('listing_product/delete_product/');?><?php echo $product_fetch->product_id;?>"><img src="<?php echo base_url('images/Delete.png');?>" style="height:30px"></a>
													</td>
												  </tr>
											  <?php 
												$i++;
												} 
											  ?>
												</tbody>
											  </table>
										</div>
									</div>
									<!-- table-wrapper -->
								</div>
								<!-- section-wrapper -->

							</div>
						</div>
					</div>
					<!--footer-->
					<?php
					$this->load->view("common/footer");
					?>
					<!-- End Footer-->
				</div>
			</div>
		</div>

		<!--Back to top-->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fas fa-angle-up"></i></a>

		<!-- Data tables -->
		<script src="<?php echo base_url();?>js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>js/dataTables.bootstrap4.min.js"></script>
		<!-- Data table js -->
		<script>
			$(function(e) {
				$('#example').DataTable();
			} );

			function change_status(product_id,product_status)
			{
    		 $.ajax({
		        url: '<?php echo base_url();?>listing_product/change_status',
		        data: {'product_id': product_id,'product_status':product_status}, // change this to send js object
		        type: "post",
		         beforeSend: function(){
		        	$('.success_div').hide();
			        $('#AjaxLoader').show();
			    },
			    complete: function(){
			    	$('.success_div').show();
			        $('#AjaxLoader').hide();
			    },
		        success: function(response){
				 $('.switch_'+product_id+'').html(response);
				 $('.success_div').show();
				 $('#AjaxLoader').hide();
				 $('html, body').animate({scrollTop:$('.page-header').position().top}, 'slow');
		        }
		      });
    		 /* ajax code ends*/
			}
		</script>
	</body>
</html>