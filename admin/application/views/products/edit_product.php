<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="<?php echo base_url('images')?>/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('images')?>/favicon.png" />
    <!-- Title -->
    <title>TheBongGuy | Edit Product</title>
	  <link rel="stylesheet" href="<?php echo base_url('css/');?>bootstrap-tagsinput.css">
	<!-- Quantity Plugin -->
	<script src="<?php echo base_url();?>js/jquery-3.2.1.min.js"></script>
	<link href="<?php echo base_url();?>css/quantity_style.css" rel="stylesheet" />
	<script src="<?php echo base_url();?>js/quantity_style.js"></script>
	<script src="<?php echo base_url();?>js/multiupload.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<style>
	.card-body{
		padding: 0.5rem 1.5rem !important;
	}
	.label{
		margin-bottom: 0px !important;
	}
	.file_upload_icon{
		background:linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
		border-radius:50% !important;
		height:53.1px;
		width:53.1px;
		margin-top:-15px;
	}
	/* NEW INSERTED */
	input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 100px;
  border: 2px solid #009fdc;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #FF0000;
  border-radius: 3px;
  color: white;
  text-align: center;
  cursor: pointer;
  font-size: 12px;
  padding: 2px;
  margin-top: 5px;
}

	
	</style>
    <?php $this->load->view('common/metalinks');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!--<div id="global-loader" ><div class="showbox"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>-->
    <div class="page">
      <div class="page-main">
        <?php $this->load->view('common/header');?>
        <?php $this->load->view('common/sidebar');?>
        <div class="my-3 my-md-5 app-content">
          <div class="side-app">
            <div class="page-header">
			  <h4 class="page-title">Edit Product &nbsp;&nbsp; <a href="<?php echo base_url("listing_product");?>" class="btn btn-primary">View List</a></h4>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Bongcrew
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit Product
                </li>
              </ol>
            </div>
			<?php
			  if($this->session->flashdata('failed')){
			?>
			  <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
			<?php
			  }
			  if($this->session->flashdata('success')){
			?>
			  <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
			<?php
				}
			?>
            <form  method="post" enctype="multipart/form-data" action="<?php echo base_url('edit_product/update_product/');?><?php echo $this->uri->segment(2);?>">
              <div class="row">
                <div class="col-lg-12">

                  <div class="card">
					<div class="card-header">
						<h3 class="card-title">Product Classification</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Choose Category </label>
									<select class="form-control" id ="cat_id" name="category" onchange="">
									<?php
										foreach($get_all_category As $all_category){
									?>
										<option value="<?php echo $all_category->cat_id;?>" <?php echo(($fetch_product->product_category_id == $all_category->cat_id)?'selected':'');?>><?php echo ucfirst($all_category->category_name);?></option>
									<?php 
										}
									?>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>

			 	<div id="show_all_info" >
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Product Information</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Product Name</label>
									<input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo $fetch_product->product_name;?>" placeholder="Product Name" >
							  </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Product Title</label>
									<input type="text" class="form-control" id="product_title" name="product_title" value="<?php echo $fetch_product->product_title;?>" placeholder="Product Title" >
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">Product Desc</label>
									<textarea class="form-control" name="product_desc" id="product_desc" placeholder="Enter Product Description" ><?php echo $fetch_product->product_desc;?></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Product Image</h3>
							</div>
							<div class="card-body">
								<div class="row" id="ml_image" style="margin-top:15px;">
									<div class="col-md-3">
										<label class="form-label">Upload Image<br><span style="font-size:12px;">(For multiple images press ctrl.)</span></label>
									</div>
									<div class="col-md-6">
										<span onclick="product_image();" id="hide_span" class="btn btn-icon btn-primary file_upload_icon" style="margin-top:6px;"><i class="fas fa-cloud-upload-alt" style="font-size:31px;"></i><strong style="color:#000000;padding:10px;font-size:15px;">Choose File...</strong></span>
										<input style="display:none;" type="file" name="p_image[]" id="vpb-data-file" multiple />
									  </div>

								</div>
								<div class="row" id="vpb-display-preview">
								<?php
								foreach($fetch_image as $get_image){
								?>
								<span class="pip frm_<?php echo $get_image->product_image_id;?>">
									<img class="imageThumb" height="100" width="100" src="<?php echo $get_image->product_image_path;?>" >
									<br/>
									<span class="remove" onclick="remove_p_img(<?php echo $get_image->product_image_id;?>);">Remove</span>
								</span>
								<input id="img_<?php echo $get_image->product_image_id;?>" type="hidden" value="<?php echo $get_image->product_image_path;?>">
								<?php
								}
								?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Design Image</h3>
							</div>
							<div class="card-body">
								<div class="row" style="margin-top:15px;">
									<div class="col-md-3">
										<label class="form-label">Upload Design Image<br><span style="font-size:12px;"></span></label>
									</div>
									<div class="col-md-6">
										<img src="<?php echo $fetch_product->product_design_img;?>" onclick="designed_image()" style="height:150px;" id="designed_blah">

										<input type="file" name="design_image" id="designed_file"  class="form-control hide_file" style="display:none;" placeholder="Add Meta Image" onchange="readURL(this);">
										<img src="" onclick="designed_image()" style="height:150px;display:none;" id="designed_blah">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Price Specification</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Wholesale Price(in INR)</label>
									<input type="number" name="wholesale_price" id="product_wholesale" class="form-control" value="<?php echo $fetch_product->product_wholesale_price;?>" placeholder="Add Wholesale Price">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Retail Price(in INR)</label>
									<input type="number" name="retail_price" id="product_retail" class="form-control" value="<?php echo $fetch_product->product_retail_price;?>" placeholder="Add Retail Price">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Product Designed By</label>
									<img src="<?php echo base_url();?>images/ajax-loader2.gif" id="AjaxLoader_7" style="float:left;margin-top:11px;margin-left:9px;position: absolute;z-index: 2;display: none;">
									<input type="text" name="designed_by" id="product_designed" class="form-control" value="<?php echo $fetch_product->product_designed_by;?>" placeholder="Designed By">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Product SKU</label>
									<input type="text" name="p_sku" id="product_sku" class="form-control" placeholder="Add Product SKU" readonly>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header"  style="border-top: 1px solid #e7effc;">
						<h3 class="card-title">SEO Optimization</h3>
					</div>
					<div class="card-body">
						<div class="row" style="margin-top:15px;">
						  <div class="col-md-2">
							<label class="form-label">Meta Image
							</label>
						  </div>
						  <div class="col-md-10">
							<img src="<?php echo $fetch_product->product_meta_image;?>" onclick="m_image()" style="height:150px;" id="m_blah">
							<input type="file" name="meta_image" id="m_file"  class="form-control hide_file" style="display:none;" placeholder="Add Meta Image" onchange="readURL_m(this);">
						   <img src="" onclick="m_image()" style="height:150px;display:none;" id="m_blah">
						  </div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Tags</label>
									<input type="text" name="meta_tags" data-role="tagsinput" class="form-control " value="<?php echo $fetch_product->product_meta_tags;?>" placeholder="Add Tags">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Meta Keywords</label>
									<input type="text" name="meta_keyword" data-role="tagsinput" class="form-control" value="<?php echo $fetch_product->product_meta_keyword;?>" placeholder="Add Meta Keywords">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">Meta Description</label>
									<textarea class="form-control" name="meta_desc" id="product_meta_description" placeholder="Enter Meta Description"><?php echo $fetch_product->product_meta_desc;?></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer text-center">
					<button type="submit" name="submit" class="btn btn-primary">Submit
					</button>
					<button type="reset" class="btn btn-secondary">Cancel</button>
				</div>
			  </div>
			</div>
		  </div>


		</form>
	  </div>
          <!--footer-->
          <?php $this->load->view('common/footer');?>
          <!-- End Footer-->
        </div>
      </div>
    </div>
    <!-- Back to top -->
    <a href="#top" id="back-to-top" style="display: inline;">
      <i class="fas fa-angle-up">
      </i>
    </a>
	</body>
	<script src="<?php echo base_url('js/');?>bootstrap-tagsinput.js"></script>
  	<script>
	//meta image starts
	function m_image(){
		$("input[id='m_file']").click();
	}

	function readURL_m(input) {
		
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			
			reader.onload = function (e) {
				$('#m_blah').attr('src', e.target.result);
				
			}

			reader.readAsDataURL(input.files[0]);
			$('#m_blah').show();
			$('#hide_span_m').hide();
		}
	}
	//meta image ends
	//designed image starts
	function designed_image(){
			$("input[id='designed_file']").click();
		}

		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#designed_blah').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
				$('#designed_blah').show();
				$('#hide_span_3').hide();
			}
		}
	//designed image ends
	//MULTIPLE PRODUCT IMAGE STARTS
		function product_image(){
			$("input[id='vpb-data-file']").click();

		}
		function design_image(){
			$("input[id='vpb-data-file-design']").click();
		}
	</script>
	<script>
	  function remove_p_img(img)
	  {
		  var image_name = $('#img_'+img+'').val();
		  $.ajax({
		  url: '<?php echo base_url();?>edit_product/ajax_del_p_img',
		  data: {'img_id': img,'img_name': image_name},
		  type: "post",
		  success: function(response){
			$('.frm_'+img+'').remove();
		  }
		  });
	  }
  </script>
  <script>
  $(document).ready(function() {

	  if (window.File && window.FileList && window.FileReader) {
		$("#vpb-data-file").on("change", function(e) {
		  var files = e.target.files,
			filesLength = files.length;
		  for (var i = 0; i < filesLength; i++) {
			var f = files[i]
			var fileReader = new FileReader();
			fileReader.onload = (function(e) {
			  var file = e.target;
			  $("<span class=\"pip\">" +
				"<img class=\"imageThumb\" height=\"100\" width=\"100\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
				"<br/>" +
				"</span>").insertAfter("#ml_image");
				/*$(this).parent(".pip").remove();
			    $(".remove").click(function(){
				$(this).parent(".pip").remove();
				alert(file);
			    });*/
			  
			  // Old code here
			  /*$("<img></img>", {
				class: "imageThumb",
				src: e.target.result,
				title: file.name + " | Click to remove"
			  }).insertAfter("#files").click(function(){$(this).remove();});*/
			  
			});
			fileReader.readAsDataURL(f);
		  }
		});
	  } else {
		alert("Your browser doesn't support to File API")
	  }
	});
  </script>
</html>
