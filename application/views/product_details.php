
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Flavours Product Page</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no">
<meta name="description" content="Default Description">
<meta name="keywords" content="fashion, store, E-commerce">
<meta name="author" content="*">
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
      <h2>Cappon Magro</h2>
    </div>
  </div>
  <!-- BEGIN Main Container -->
  <div class="main-container col1-layout wow bounceInUp animated">
    <div class="main">
      <div class="col-main">
        <!-- Endif Next Previous Product -->
        <div class="product-view wow bounceInUp animated">
          <div id="messages_product_view"></div>
          <!--product-next-prev-->
          <div class="product-essential container">
            <div class="row">
              <div class="product-next-prev"> <a class="product-next" title="Next" href="#"><span></span></a> <a class="product-prev" title="Previous" href="#"><span></span></a> </div>
              <form action="" method="post" id="product_addtocart_form">
                <!--End For version 1, 2, 6 -->
                <!-- For version 3 -->
                <div class="product-img-box col-sm-6 col-xs-12">
                  <div class="new-label new-top-left"> New </div>
                  <div class="product-image">
                    <div class="large-image"> <a href="<?php echo base_url();?>images/p15.jpg" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img src="<?php echo base_url();?>images/p15.jpg"> </a> </div>
                    <div class="flexslider flexslider-thumb">
                      <ul class="previews-list">
                        <li><a href='images/p15.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'images/p15.jpg' "><img src="<?php echo base_url();?>images/p15.jpg" alt = "Thumbnail 1"/></a></li>
                        <li><a href='images/p10.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'images/p10.jpg' "><img src="<?php echo base_url();?>images/p10.jpg" alt = "Thumbnail 2"/></a></li>
                        <li><a href='images/p3.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'images/p3.jpg' "><img src="<?php echo base_url();?>images/p3.jpg" alt = "Thumbnail 1"/></a></li>
                        <li><a href='images/p4.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'images/p4.jpg' "><img src="<?php echo base_url();?>images/p4.jpg" alt = "Thumbnail 2"/></a></li>
                        <li><a href='images/p5.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'images/p5.jpg' "><img src="<?php echo base_url();?>images/p5.jpg" alt = "Thumbnail 2"/></a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- end: more-images -->
                </div>
                <!--End For version 1,2,6-->
                <!-- For version 3 -->
                <div class="product-shop col-sm-6 col-xs-12">
                
                  <div class="product-name">
                    <h1 itemprop="name">Augue urna, tincidunt</h1>
                  </div>
                  <!--product-name-->
                  <span itemprop="aggregateRating">
                  <div class="rating">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating" style="width:50%"></div>
                      </div>
                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                    </div>
                  </div>
                  </span>
                  <div class="price-block">
                    <div class="price-box"> <span class="regular-price" id="product-price-123"> <span class="price">$129.00</span> </span> </div>
                    <p class="availability in-stock">
                      <link itemprop="availability" href="#">
                      <span>In stock</span></p>
                  </div>
                  <!--price-block-->
                  <div class="short-description">
                    <h2>Quick Overview</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate. </p>
                  </div>
                  <div class="add-to-box">
                    <div class="add-to-cart">
                      <div class="pull-left">
                        <div class="custom pull-left">
                         <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                          <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                           <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                        </div>
                        <!--custom pull-left-->
                      </div>
                      <!--pull-left-->
                      <button type="button" title="Add to Cart" class="button btn-cart" onClick="productAddToCartForm.submit(this)"><span><i class="icon-basket"></i>Add to Cart</span></button>
                    </div>
                    <!--add-to-cart-->
                    <div class="email-addto-box">
                      <p class="email-friend"><a href="#" title="Email to a Friend"><span>Email to a Friend</span></a></p>
                      <ul class="add-to-links">
                        <li> <a class="link-wishlist" href="<?php echo base_url('wishlist');?>" onClick="" title="Add To Wishlist"><span>Add To Wishlist</span></a> </li>
                        <li> <span class="separator">|</span> <a class="link-compare" href="#" title="Add To Compare"><span>Add To Compare</span></a> </li>
                      </ul>
                      <!--add-to-links-->
                    </div>
                    <!--email-addto-box-->
                  </div>
                  <!--add-to-box-->
                  <!-- thm-mart Social Share-->
                  <div class="social">
                    <ul class="link">
                      <li class="fb"> <a href="http://www.facebook.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
                      <li class="linkedin"> <a href="http://www.linkedin.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
                      <li class="tw"> <a href="http://twitter.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
                      <li class="pintrest"> <a href="http://pinterest.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
                      <li class="googleplus"> <a href="https://plus.google.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
                    </ul>
                  </div>
                  <!-- thm-mart Social Share Close-->
                </div>
                <!--product-shop-->
                <!--Detail page static block for version 3-->
              </form>
            </div>
          </div>
          <!--product-essential-->
          <div class="product-collateral container">
            <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
              <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a> </li>
              <li><a href="#product_tabs_tags" data-toggle="tab">Tags</a></li>
              <li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
              <li> <a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a> </li>
              <li> <a href="#product_tabs_custom1" data-toggle="tab">Custom Tab1</a> </li>
            </ul>
            <div id="productTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="product_tabs_description">
                <div class="std">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>
                  <p> Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis.</p>
                </div>
              </div>
              <div class="tab-pane fade" id="product_tabs_tags">
                <div class="box-collateral box-tags">
                  <div class="tags">
                    <form id="addTagForm" action="#" method="get">
                      <div class="form-add-tags">
                        <label for="productTagName">Add Tags:</label>
                        <div class="input-box">
                          <input class="input-text" name="productTagName" id="productTagName" type="text">
                          <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span> </button>
                        </div>
                        <!--input-box--> 
                      </div>
                    </form>
                  </div>
                  <!--tags-->
                  <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                </div>
              </div>
              <div class="tab-pane fade" id="reviews_tabs">
                <div class="box-collateral box-reviews" id="customer-reviews">
                  <div class="box-reviews1">
                    <div class="form-add">
                      <form id="review-form" method="post" action="">
                        <h3>Write Your Own Review</h3>
                        <fieldset>
                          <h4>How do you rate this product? <em class="required">*</em></h4>
                          <span id="input-message-box"></span>
                          <table id="product-review-table" class="data-table">
                            <colgroup>
                            <col>
                            <col width="1">
                            <col width="1">
                            <col width="1">
                            <col width="1">
                            <col width="1">
                            </colgroup>
                            <thead>
                              <tr class="first last">
                                <th>&nbsp;</th>
                                <th><span class="nobr">1 *</span></th>
                                <th><span class="nobr">2 *</span></th>
                                <th><span class="nobr">3 *</span></th>
                                <th><span class="nobr">4 *</span></th>
                                <th><span class="nobr">5 *</span></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="first odd">
                                <th>Price</th>
                                <td class="value"><input type="radio" class="radio" value="11" id="Price_1" name="ratings[3]"></td>
                                <td class="value"><input type="radio" class="radio" value="12" id="Price_2" name="ratings[3]"></td>
                                <td class="value"><input type="radio" class="radio" value="13" id="Price_3" name="ratings[3]"></td>
                                <td class="value"><input type="radio" class="radio" value="14" id="Price_4" name="ratings[3]"></td>
                                <td class="value last"><input type="radio" class="radio" value="15" id="Price_5" name="ratings[3]"></td>
                              </tr>
                              <tr class="even">
                                <th>Value</th>
                                <td class="value"><input type="radio" class="radio" value="6" id="Value_1" name="ratings[2]"></td>
                                <td class="value"><input type="radio" class="radio" value="7" id="Value_2" name="ratings[2]"></td>
                                <td class="value"><input type="radio" class="radio" value="8" id="Value_3" name="ratings[2]"></td>
                                <td class="value"><input type="radio" class="radio" value="9" id="Value_4" name="ratings[2]"></td>
                                <td class="value last"><input type="radio" class="radio" value="10" id="Value_5" name="ratings[2]"></td>
                              </tr>
                              <tr class="last odd">
                                <th>Quality</th>
                                <td class="value"><input type="radio" class="radio" value="1" id="Quality_1" name="ratings[1]"></td>
                                <td class="value"><input type="radio" class="radio" value="2" id="Quality_2" name="ratings[1]"></td>
                                <td class="value"><input type="radio" class="radio" value="3" id="Quality_3" name="ratings[1]"></td>
                                <td class="value"><input type="radio" class="radio" value="4" id="Quality_4" name="ratings[1]"></td>
                                <td class="value last"><input type="radio" class="radio" value="5" id="Quality_5" name="ratings[1]"></td>
                              </tr>
                            </tbody>
                          </table>
                          <input type="hidden" value="" class="validate-rating" name="validate_rating">
                          <div class="review1">
                            <ul class="form-list">
                              <li>
                                <label class="required" for="nickname_field">Nickname<em>*</em></label>
                                <div class="input-box">
                                  <input type="text" class="input-text" id="nickname_field" name="nickname">
                                </div>
                              </li>
                              <li>
                                <label class="required" for="summary_field">Summary<em>*</em></label>
                                <div class="input-box">
                                  <input type="text" class="input-text" id="summary_field" name="title">
                                </div>
                              </li>
                            </ul>
                          </div>
                          <div class="review2">
                            <ul>
                              <li>
                                <label class="required label-wide" for="review_field">Review<em>*</em></label>
                                <div class="input-box">
                                  <textarea rows="3" cols="5" id="review_field" name="detail"></textarea>
                                </div>
                              </li>
                            </ul>
                            <div class="buttons-set">
                              <button class="button submit" title="Submit Review" type="submit"><span>Submit Review</span></button>
                            </div>
                          </div>
                        </fieldset>
                      </form>
                    </div>
                  </div>
                  <div class="box-reviews2">
                    <h3>Customer Reviews</h3>
                    <div class="box visible">
                      <ul>
                        <li>
                          <table class="ratings-table">
                            <colgroup>
                            <col width="1">
                            <col>
                            </colgroup>
                            <tbody>
                              <tr>
                                <th>Value</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:100%;"></div>
                                  </div></td>
                              </tr>
                              <tr>
                                <th>Quality</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:100%;"></div>
                                  </div></td>
                              </tr>
                              <tr>
                                <th>Price</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:100%;"></div>
                                  </div></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="review">
                            <h6><a href="#">Excellent</a></h6>
                            <small>Review by <span>Leslie Prichard </span>on 1/3/2014 </small>
                            <div class="review-txt"> I have purchased shirts from Minimalism a few times and am never disappointed. The quality is excellent and the shipping is amazing. It seems like it's at your front door the minute you get off your pc. I have received my purchases within two days - amazing.</div>
                          </div>
                        </li>
                        <li class="even">
                          <table class="ratings-table">
                            <colgroup>
                            <col width="1">
                            <col>
                            </colgroup>
                            <tbody>
                              <tr>
                                <th>Value</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:100%;"></div>
                                  </div></td>
                              </tr>
                              <tr>
                                <th>Quality</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:100%;"></div>
                                  </div></td>
                              </tr>
                              <tr>
                                <th>Price</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:80%;"></div>
                                  </div></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="review">
                            <h6><a href="#/catalog/product/view/id/60/">Amazing</a></h6>
                            <small>Review by <span>Sandra Parker</span>on 1/3/2014 </small>
                            <div class="review-txt"> Minimalism is the online ! </div>
                          </div>
                        </li>
                        <li>
                          <table class="ratings-table">
                            <colgroup>
                            <col width="1">
                            <col>
                            </colgroup>
                            <tbody>
                              <tr>
                                <th>Value</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:100%;"></div>
                                  </div></td>
                              </tr>
                              <tr>
                                <th>Quality</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:100%;"></div>
                                  </div></td>
                              </tr>
                              <tr>
                                <th>Price</th>
                                <td><div class="rating-box">
                                    <div class="rating" style="width:80%;"></div>
                                  </div></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="review">
                            <h6><a href="#/catalog/product/view/id/59/">Nicely</a></h6>
                            <small>Review by <span>Anthony  Lewis</span>on 1/3/2014 </small>
                            <div class="review-txt"> Unbeatable service and selection. This store has the best business model I have seen on the net. They are true to their word, and go the extra mile for their customers. I felt like a purchasing partner more than a customer. You have a lifetime client in me. </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="actions"> <a class="button view-all" id="revies-button" href="#"><span><span>View all</span></span></a> </div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="tab-pane fade" id="product_tabs_custom">
                <div class="product-tabs-content-inner clearfix">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.</p>
                  <p> Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>
                </div>
              </div>
              <div class="tab-pane fade" id="product_tabs_custom1">
                <div class="product-tabs-content-inner clearfix">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>
                </div>
              </div>
            </div>
          </div>
     
      
          <!--product-collateral-->
          <div class="box-additional">
            <!-- BEGIN RELATED PRODUCTS -->
            <div class="related-pro container">
              <div class="slider-items-products">
                <div class="new_title center">
                  <h2>Related Products</h2>
                </div>
                <div id="related-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col4 products-grid">
          <div class="item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen" class="product-image"><img src="<?php echo base_url();?>images/p1.jpg" alt="Retis lapen casen"></a>
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
                          </div>
          
          <!-- Item -->
          <div class="item">
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
                          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen" class="product-image"><img src="<?php echo base_url();?>images/p3.jpg" alt="Retis lapen casen"></a>
                                  <div class="sale-label sale-top-left">Sale</div>
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
                          </div>
          <!-- End Item -->
          
          <div class="item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen" class="product-image"><img src="<?php echo base_url();?>images/p4.jpg" alt="Retis lapen casen"></a>
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
                          </div>
          
          <!-- Item -->
          <div class="item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen" class="product-image"><img src="<?php echo base_url();?>images/p5.jpg" alt="Retis lapen casen"></a>
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
                          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="<?php echo base_url('product_details');?>" title="Retis lapen casen" class="product-image"><img src="<?php echo base_url();?>images/p6.jpg" alt="Retis lapen casen"></a>
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
                          </div>
          <!-- End Item --> 
        </div>
                </div>
              </div>
            </div>
            <!-- end related product -->
            
          </div>
          <!-- end related product -->
        </div>
        <!--box-additional-->
        <!--product-view-->
      </div>
    </div>
    <!--col-main-->
  </div>
  <!--main-container-->
</div>
<!--col1-layout-->

<?php
$this->load->view("common/footer");
?>
</div>
<!--page-->


</body>
</html>
