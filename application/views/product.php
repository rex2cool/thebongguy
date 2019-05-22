
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Product</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no">
<meta name="description" content="Default Description">
<meta name="keywords" content="fashion, store, E-commerce">
<meta name="robots" content="*">
<meta name="viewport" content="initial-scale=1.0, width=device-width">

<link rel="icon" href="#" type="image/x-icon">
<link rel="shortcut icon" href="#" type="image/x-icon">

<?php
$this->load->view("common/metalinks");
?>


</head>
<body>
<div id="page">

<?php
$this->load->view("common/header");
?>

<div class="page-heading">
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a href="#" title="Go to Home Page">Home</a> <span>-> </span> </li>
            <li class="category1599"> <a href="#" title="">Salad</a> <span>-> </span> </li>
            <li class="category1600"> <a href="#" title="">Bread Salad</a> <span>-> </span> </li>
            <li class="category1601"> <strong>Dakos</strong> </li>
          </ul>
        </div>
        <!--col-xs-12--> 
      </div>
      <!--row--> 
    </div>
    <!--container--> 
  </div>
  <div class="page-title">
    <h2>Top & Skirt</h2>
  </div>
</div>
<!--breadcrumbs--> 
<!-- BEGIN Main Container col2-left -->
<section class="main-container col2-left-layout bounceInUp animated"> 
  <!-- For version 1, 2, 3, 8 --> 
  <!-- For version 1, 2, 3 -->
  <div class="container">
    <div class="row">
      <div class="col-main col-sm-9 col-sm-push-3 product-grid">
      <div class="pro-coloumn">
        <article class="col-main">
          <div class="toolbar">
            <div class="sorter">
              <!-- <div class="view-mode"> <span title="Grid" class="button button-active button-grid">&nbsp;</span><a href="list.html" title="List" class="button-list">&nbsp;</a> </div> -->
            </div>
            <div id="sort-by">
              <label class="left">Sort By: </label>
              <ul>
                <li><a href="#">Position<span class="right-arrow"></span></a>
                  <ul>
                    <li><a href="#">Name</a></li>
                    <li><a href="#">Price</a></li>
                    <li><a href="#">Position</a></li>
                  </ul>
                </li>
              </ul>
              <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
            <div class="pager">
              <div id="limiter">
                <label>View: </label>
                <ul>
                  <li><a href="#">15<span class="right-arrow"></span></a>
                    <ul>
                      <li><a href="#">20</a></li>
                      <li><a href="#">30</a></li>
                      <li><a href="#">35</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="pages">
                <label>Page:</label>
                <ul class="pagination">
                  <li><a href="#">&laquo;</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="category-products">
            <ul class="products-grid">
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                   <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen" class="product-image"><img src="<?php echo base_url();?>images/p1.jpg" alt="Retis lapen casen"></a>
                                
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt" type="button"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" id="product-price-1"><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                      
              </li>
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen" class="product-image"><img src="<?php echo base_url();?>images/p2.jpg" alt="Retis lapen casen"></a>
                                  <div class="new-label new-top-left">New</div>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt" type="button"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" id="product-price-1"><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen" class="product-image"><img src="<?php echo base_url();?>images/p3.jpg" alt="Retis lapen casen"></a>
                                  <div class="sale-label sale-top-right">Sale</div>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt" type="button"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" id="product-price-1"><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen" class="product-image"><img src="<?php echo base_url();?>images/p4.jpg" alt="Retis lapen casen"></a>
                                 <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt" type="button"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" id="product-price-1"><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen" class="product-image"><img src="<?php echo base_url();?>images/p5.jpg" alt="Retis lapen casen"></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt" type="button"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" id="product-price-1"><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen" class="product-image"><img src="<?php echo base_url();?>images/p6.jpg" alt="Retis lapen casen"></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt" type="button"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" id="product-price-1"><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen" class="product-image"><img src="<?php echo base_url();?>images/p7.jpg" alt="Retis lapen casen"></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt" type="button"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" id="product-price-1"><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen" class="product-image"><img src="<?php echo base_url();?>images/p8.jpg" alt="Retis lapen casen"></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt" type="button"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" id="product-price-1"><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
			  <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen" class="product-image"><img src="<?php echo base_url();?>images/p2.jpg" alt="Retis lapen casen"></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt" type="button"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" id="product-price-1"><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
			  <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen" class="product-image"><img src="<?php echo base_url();?>images/p10.jpg" alt="Retis lapen casen"></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt" type="button"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" id="product-price-1"><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
			  <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen" class="product-image"><img src="<?php echo base_url();?>images/p11.jpg" alt="Retis lapen casen"></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt" type="button"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" id="product-price-1"><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
			  <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen" class="product-image"><img src="<?php echo base_url();?>images/p12.jpg" alt="Retis lapen casen"></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt" type="button"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" id="product-price-1"><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
            </ul>
          </div>
        </article>
        </div>
        <!--	///*///======    End article  ========= //*/// --> 
      </div>
      <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated"> 
        <!-- BEGIN SIDE-NAV-CATEGORY -->
        <div class="side-nav-categories">
          <div class="block-title"> Categories </div>
          <!--block-title--> 
          <!-- BEGIN BOX-CATEGORY -->
          <div class="box-content box-category">
  <ul>
    <li> <a class="active" href="#">Women</a> <span class="subDropdown minus"></span>
      <ul class="level0_415" style="display:block">
        <li> <a href="#">Dresses </a> <span class="subDropdown plus"></span>
          <ul class="level1" style="display:none">
            <li> <a href="#"><span>Saree</span></a> </li>
            <li> <a href="#"><span>Top & Skirt</span></a> </li>
            <li> <a href="#"><span>Jeans</span></a> </li>
            <li> <a href="#"><span>Panjabi Dresses</span></a> </li>
          </ul>
          <!--level1--> 
        </li>
        <!--level1-->
        <li> <a href="#">Accessories</a> <span class="subDropdown plus"></span>
          <ul class="level1" style="display:none">
            <li> <a href="#"><span>Hair Accessories</span></a> </li>
            <li> <a href="#"><span>Lifestyle</span></a> </li>
            <li> <a href="#"><span>Scarves</span></a> </li>
            <li> <a href="#"><span>Hats and Gloves</span></a> </li> 
          </ul>
          <!--level1--> 
        </li>
        <!--level1-->
        <li> <a href="#"> Tops </a> <span class="subDropdown plus"></span>
          <ul class="level1" style="display:none">
            <li> <a href="#"><span>Evening</span></a> </li>
            <li> <a href="#"><span>Long Sleeved</span></a> </li>
            <li> <a href="#"><span>Short Sleeved</span></a> </li>
            <li> <a href="#"><span>Sleeveless</span></a> </li>
          </ul>
          <!--level1--> 
        </li>
        <!--level1-->
        <li> <a href="#"> HandBags </a> <span class="subDropdown plus"></span>
          <ul class="level1" style="display:none">
            <li> <a href="#"><span>Toter</span></a> </li>            
            <li> <a href="#"><span>Clutches</span></a> </li>            
            <li> <a href="#"><span>Cross Body</span></a> </li>            
            <li> <a href="#"><span>Shoulder</span></a> </li>
          </ul>
          <!--level1--> 
        </li>                   
      </ul>
      <!--level0--> 
    </li>
    <!--level 0-->
    <li> <a href="#">Men</a> <span class="subDropdown plus"></span>
      <ul class="level0_455" style="display:none">
        <li> <a href="#"> Footwear </a> <span class="subDropdown minus"></span>
          <ul class="level1" style="display:none">
            <li> <a href="#"><span>Sport Shoes</span></a> </li>
            <li> <a href="#"><span>Casual Shoes</span></a> </li>
            <li> <a href="#"><span>Leather Shoes</span></a> </li>
            <li> <a href="#"><span>Canvas Shoes</span></a> </li>
          </ul>
          <!--level1--> 
        </li>
        <!--level1-->
        <li> <a href="#"> Rings </a> <span class="subDropdown minus"></span>
          <ul class="level1" style="display:none">
            <li> <a href="#"><span>Platinum Rings</span></a> </li>
            <li> <a href="#"><span>Gold Rings</span></a> </li>
            <li> <a href="#"><span>Silver Rings</span></a> </li>
            <li> <a href="#"><span>Tungsten Rings</span></a> </li>
          </ul>
          <!--level1--> 
        </li>
        <!--level1-->
        <li> <a href="#"> Jackets </a> <span class="subDropdown minus"></span>
          <ul class="level1" style="display:none">
           <li> <a href="#"><span>Coats</span></a> </li>
           <li> <a href="#"><span>Leather Jackets</span></a> </li>
           <li> <a href="#"><span>Formal Jackets</span></a> </li>
           <li> <a href="#"><span>Blazers</span></a> </li>
          </ul>
          <!--level1--> 
        </li>
        <!--level1-->
        <li> <a href="#"> Bands </a> <span class="subDropdown minus"></span>
          <ul class="level1" style="display:none">
            <li> <a href="#"><span>Platinum Bands</span></a> </li>
            <li> <a href="#"><span>Gold Bands</span></a> </li>
            <li> <a href="#"><span>Silver Bands</span></a> </li>
            <li> <a href="#"><span>Tungsten Bands</span></a> </li>
          </ul>
          <!--level1--> 
        </li>
        <!--level1-->
        <li> <a href="#"> Sunglasses </a> <span class="subDropdown minus"></span>
          <ul class="level1" style="display:none">
            <li> <a href="#"><span>Ray Ban</span></a> </li>
            <li> <a href="#"><span>Fasttrack</span></a> </li>
            <li> <a href="#"><span>Idee</span></a> </li>
            <li> <a href="#"><span>Oakley</span></a> </li>
          </ul>
          <!--level1--> 
        </li>
        <!--level1-->
        <li> <a href="#"> Accessories </a> <span class="subDropdown minus"></span>
          <ul class="level1" style="display:none">
            <li> <a href="#"><span>Bakpacks</span></a> </li>
            <li> <a href="#"><span>Wallets</span></a> </li>
            <li> <a href="#"><span>Laptop Bags</span></a> </li>
            <li> <a href="#"><span>Belts</span></a> </li>
          </ul>
          <!--level1--> 
        </li>

      </ul>
      <!--level0--> 
    </li>
    <!--level 0-->
    <li> <a href="#.html">Electronics</a> <span class="subDropdown plus"></span>
      <ul class="level0_482" style="display:none">
        <li> <a href="#"> Apple iPhone </a> <span class="subDropdown minus"></span>
          <ul class="level1" style="display:none">
            <li> <a href="#"><span>iPhone 4</span></a> </li>
            <li> <a href="#"><span>iPhone 5</span></a> </li>
            <li> <a href="#"><span>iPhone 6</span></a> </li>
            <li> <a href="#"><span>iPad</span></a> </li>
          </ul>
          <!--level1--> 
        </li>
        <!--level1-->
        <li> <a href="#"> Laptops </a> <span class="subDropdown minus"></span>
          <ul class="level1" style="display:none">
            <li> <a href="#"><span>Apple Macbook</span></a> </li>
            <li> <a href="#"><span>Dell</span></a> </li>
            <li> <a href="#"><span>HP</span></a> </li>
            <li> <a href="#"><span>Sony</span></a> </li>
          </ul>
          <!--level1--> 
        </li>
        <!--level1-->
        <li> <a href="#"> Camera </a> <span class="subDropdown minus"></span>
          <ul class="level1" style="display:none">
            <li> <a href="#"><span>Camcorders</span></a> </li>
            <li> <a href="#"><span>Point &amp; Shoot</span></a> </li>
            <li> <a href="#"><span>Digital SLR</span></a> </li>
            <li> <a href="#"><span>Camera Accesories</span></a> </li>
          </ul>
          <!--level1--> 
        </li>
        <!--level1-->
        <li> <a href="#"> Printer </a> <span class="subDropdown minus"></span>
          <ul class="level1" style="display:none">
            <li> <a href="#"><span>Label Printer</span></a> </li>
            <li> <a href="#"><span>Laser Printer</span></a> </li>
            <li> <a href="#"><span>Barcode Printer</span></a> </li>
            <li> <a href="#"><span>LED Printer</span></a> </li>
          </ul>
          <!--level1--> 
        </li>
        <!--level1-->
       <li> <a href="#"> Computer</a> <span class="subDropdown minus"></span>
          <ul class="level1" style="display:none">
            <li> <a href="#"><span>External Hard Disk</span></a> </li>
            <li> <a href="#"><span>Pendrives</span></a> </li>
            <li> <a href="#"><span>Headphones</span></a> </li>
            <li> <a href="#"><span>PC Components</span></a> </li>
          </ul>
          <!--level1--> 
        </li>
        <!--level1-->
       <li> <a href="#"> Accessories </a> <span class="subDropdown minus"></span>
          <ul class="level1" style="display:none">
            <li> <a href="#"><span>Adapters</span></a> </li>
            <li> <a href="#"><span>Batteries</span></a> </li>
            <li> <a href="#"><span>Graphic Card</span></a> </li>
            <li> <a href="#"><span>Head Set</span></a> </li>
          </ul>
          <!--level1--> 
        </li>
        <!--level1-->  
      </ul>
      <!--level0--> 
    </li>
    <!--level 0-->
    <li> <a href="#">Kids</a> </li>
    <!--level 0-->     
    
  </ul>
</div>
          <!--box-content box-category--> 
        </div>
        <!--side-nav-categories-->
        <div class="block block-layered-nav">
          <div class="block-title"> Shop By </div>
          <div class="block-content">
            <p class="block-subtitle">Shopping Options</p>
            <dl id="narrow-by-list">
              <dt class="odd">Category</dt>
              <dd class="odd">
                <ol>
                  <li> <a href="#"> Salad <span class="count">(24)</span> </a> </li>
                  <li> <a href="#"> Soups <span class="count">(24)</span> </a> </li>
                  <li> <a href="#"> Fast Food <span class="count">(24)</span> </a> </li>
                  <li> <a href="#"> Sandwiches <span class="count">(24)</span> </a> </li>
                </ol>
              </dd>
              <dt class="last odd">Price</dt>
              <dd class="last odd">
                <ol>
                  <li> <a href="#"> <span class="price">$0.00</span> - <span class="price">$99.99</span> <span class="count">(26)</span> </a> </li>
                  <li> <a href="#"> <span class="price">$100.00</span> and above <span class="count">(3)</span> </a> </li>
                </ol>
              </dd>
            </dl>
          </div>
        </div>
        <div class="custom-slider">
          <div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active"><img src="<?php echo base_url();?>images/slide3.jpg" alt="slide3">
                  <div class="carousel-caption">
                    <h3><a title=" Sample Product" href="<?php echo base_url('product_details');?>">50% OFF</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a class="link" href="#">Buy Now</a></div>
                </div>
                <div class="item"><img src="<?php echo base_url();?>images/slide1.jpg" alt="slide1">
                  <div class="carousel-caption">
                    <h3><a title=" Sample Product" href="<?php echo base_url('product_details');?>">Hot collection</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="item"><img src="<?php echo base_url();?>images/slide2.jpg" alt="slide2">
                  <div class="carousel-caption">
                    <h3><a title=" Sample Product" href="<?php echo base_url('product_details');?>">Summer collection</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="sr-only">Next</span> </a></div>
          </div>
        </div>
       
        <div class="block block-list block-cart">
          <div class="block-title"> My Cart </div>
          <div class="block-content">
            <div class="summary">
              <p class="amount">There is <a href="#">1 item</a> in your cart.</p>
              <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">$299.00</span> </p>
            </div>
            <div class="ajax-checkout">
              <button type="button" title="Checkout" class="button button-checkout" onClick="#"> <span>Checkout</span> </button>
            </div>
            <p class="block-subtitle">Recently added item(s)</p>
            <ul id="cart-sidebar" class="mini-products-list">
              <li class="item">
                <div class="item-inner"> <a href="#" class="product-image"><img src="<?php echo base_url();?>images/p1.jpg" width="80" alt="product"></a>
                  <div class="product-details">
                    <div class="access"> <a href="#" class="btn-remove1">Remove</a> 
                    <a href="" title="Edit item" class="btn-edit">
                    <i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                    <!--access--> 
                    
                    <strong>1</strong> x <span class="price">$299.00</span>
                    <p class="product-name"><a href="#">RETIS LAPEN CASEN</a></p>
                  </div>
                  <!--product-details-bottoms--> 
                </div>
              </li>
              <li class="item  last1">
                <div class="item-inner"> <a href="#" class="product-image"><img src="<?php echo base_url();?>images/p2.jpg" width="80" alt="product"></a>
                  <div class="product-details">
                    <div class="access"> <a href="#" class="btn-remove1">Remove</a> 
                    <a href="" title="Edit item" class="btn-edit">
                    <i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                    <!--access--> 
                    
                    <strong>1</strong> x <span class="price">$299.00</span>
                    <p class="product-name"><a href="#">RETIS LAPEN CASEN</a></p>
                  </div>
                  <!--product-details-bottoms--> 
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="block block-compare">
          <div class="block-title"> Compare Products </div>
         <div class="block-content">
            <ol id="compare-items">
                    <li class="item odd">
                   <a href="#" class="btn-remove1" onClick="#"></a>
                <a class="product-name" href="#">RETIS LAPEN CASEN</a>            </li>
             <li class="item odd">
                   <a href="#" class="btn-remove1" onClick="#"></a>
                <a class="product-name" href="#">RETIS LAPEN CASEN</a>            </li>
             <li class="item odd">
                   <a href="#" class="btn-remove1" onClick="#"></a>
                <a class="product-name" href="#">RETIS LAPEN CASEN</a>            </li>
             <li class="item odd">
                   <a href="#" class="btn-remove1" onClick="#"></a>
                <a class="product-name" href="#">RETIS LAPEN CASEN</a>            </li>
              </ol>
       
        <div class="ajax-checkout">
            <button type="button" title="Compare" class="button button-compare" onClick="#"><span>Compare</span></button>
            <button class="button button-clear" href="#"><span>Clear</span></button>
        </div><!--ajax-checkout-->
        </div>
          <!--block-content--> 
        </div>
        <!--block block-list block-compare--> 
       

        <div class="block block-poll">
          <div class="block-title"> Community Poll </div>
          <form id="pollForm" action="#" method="post" onSubmit="return validatePollAnswerIsSelected();">
            <div class="block-content">
              <p class="block-subtitle">What is your favorite color</p>
              <ul id="poll-answers">
                <li class="odd">
                  <input type="radio" name="vote" class="radio poll_vote" id="vote_1" value="1">
                  <span class="label">
                  <label for="vote_1">Green</label>
                  </span> </li>
                <li class="even">
                  <input type="radio" name="vote" class="radio poll_vote" id="vote_2" value="2">
                  <span class="label">
                  <label for="vote_2">Red</label>
                  </span> </li>
                <li class="odd">
                  <input type="radio" name="vote" class="radio poll_vote" id="vote_3" value="3">
                  <span class="label">
                  <label for="vote_3">Black</label>
                  </span> </li>
                <li class="last even">
                  <input type="radio" name="vote" class="radio poll_vote" id="vote_4" value="4">
                  <span class="label">
                  <label for="vote_4">Magenta</label>
                  </span> </li>
              </ul>              
              <div class="actions">
                <button type="submit" title="Vote" class="button button-vote"><span>Vote</span></button>
              </div>
            </div>
          </form>
        </div>
       <div class="hot-banner"><img src="<?php echo base_url();?>images/hot-trends-banner.jpg" alt="banner"></div>  
      </aside>
      <!--col-right sidebar--> 
    </div>
    <!--row--> 
  </div>
  <!--container--> 
</section>
<!--main-container col2-left-layout--> 


<?php
$this->load->view("common/footer");
?>

</div>
<!--page--> 



</body>
</html>