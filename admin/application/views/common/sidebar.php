<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
	<aside class="app-sidebar">
		
		<ul class="side-menu">
			<!-- Dashboard STARTS -->
			<li class="sidebar_header">
				<a class="sidebar_header_uppercase <?php echo(($this->uri->segment(1) == 'admin_dashboard')?'active':'');?>" href="<?php echo base_url('admin_dashboard');?>">Dashboard</a>
			</li>
			<li class="sidebar_header">
				<a class="sidebar_header_uppercase <?php echo(($this->uri->segment(1) == 'listing_category')?'active':'');?>" href="<?php echo base_url('listing_category');?>">Category</a>
			</li>
			<li class="sidebar_header">
				<a class="sidebar_header_uppercase <?php echo(($this->uri->segment(1) == 'listing_product')?'active':'');?>" href="<?php echo base_url('listing_product');?>">Product</a>
			</li>
			<!-- Dashboard Ends -->

		</ul>
	</aside>