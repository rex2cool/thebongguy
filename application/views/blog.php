
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Blog Page</title>
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
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="page-title">
          <h2>Blog</h2>
        </div>
      </div>
      <!--col-xs-12--> 
    </div>
    <!--row--> 
  </div>
  <!--container--> 
</div>
<!-- BEGIN Main Container -->
<div class="main-container col2-right-layout">
  <div class="main container">
    <div class="row">
      <div class="col-left sidebar col-sm-3 blog-side">
        <div id="secondary" class="widget_wrapper13" role="complementary">
          <div id="recent-posts-4" class="popular-posts widget widget__sidebar wow bounceInUp animated animated" style="visibility: visible;">
            <h2 class="widget-title">Most Popular Posts</h2>
            <div class="widget-content">
              <ul class="posts-list unstyled clearfix">
                <li>
          <figure class="featured-thumb"> <a href="#"> <img src="<?php echo base_url();?>images/blog-img1_1.jpg" alt="blog image"> </a> </figure>
                  <!--featured-thumb-->
                  <div class="content-info">
                    <h4><a href="#" title="Lorem ipsum dolor sit amet">Lorem ipsum dolor sit amet</a></h4>
                    <p class="post-meta"><i class="icon-calendar"></i>
                      <time class="entry-date" datetime="2015-05-11T11:07:27+00:00">May 11, 2015</time>
                      .</p>
                  </div>
                </li>
                <li>
          <figure class="featured-thumb"> <a href="#"> <img src="<?php echo base_url();?>images/blog-img3.jpg" alt="blog image"> </a> </figure>
                  <!--featured-thumb-->
                  <div class="content-info">
                    <h4><a href="#" title="Lorem ipsum dolor sit amet">Lorem ipsum dolor sit amet</a></h4>
                    <p class="post-meta"><i class="icon-calendar"></i>
                      <time class="entry-date" datetime="2015-05-11T11:07:27+00:00">May 11, 2015</time>
                      .</p>
                  </div>
                </li>
                 <li>
          <figure class="featured-thumb"> <a href="#"> <img src="<?php echo base_url();?>images/blog-img2.jpg" alt="blog image"> </a> </figure>
                  <!--featured-thumb-->
                  <div class="content-info">
                    <h4><a href="#" title="Lorem ipsum dolor sit amet">Lorem ipsum dolor sit amet</a></h4>
                    <p class="post-meta"><i class="icon-calendar"></i>
                      <time class="entry-date" datetime="2015-05-11T11:07:27+00:00">May 11, 2015</time>
                      .</p>
                  </div>
                </li>
                 <li>
          <figure class="featured-thumb"> <a href="#"> <img src="<?php echo base_url();?>images/blog-img1_1.jpg" alt="blog image"> </a> </figure>
                  <!--featured-thumb-->
                  <div class="content-info">
                    <h4><a href="#" title="Lorem ipsum dolor sit amet">Lorem ipsum dolor sit amet</a></h4>
                    <p class="post-meta"><i class="icon-calendar"></i>
                      <time class="entry-date" datetime="2015-05-11T11:07:27+00:00">May 11, 2015</time>
                      .</p>
                  </div>
                </li>
              </ul>
            </div>
            <!--widget-content--> 
          </div>
          <div id="categories-2" class="widget widget_categories wow bounceInUp animated animated" style="visibility: visible;">
            <h2 class="widget-title">Categories</h2>
            <div class="content">
            <ul>
              <li class="cat-item cat-item-19599"><a href="#">First Category</a></li>
            </ul>
            <ul>
              <li class="cat-item cat-item-19599"><a href="#">Second Category</a></li>
            </ul>
             <ul>
              <li class="cat-item cat-item-19599"><a href="#">Three Category</a></li>
            </ul>
            <ul>
              <li class="cat-item cat-item-19599"><a href="#">Four Category</a></li>
            </ul>
             <ul>
              <li class="cat-item cat-item-19599"><a href="#">Five Category</a></li>
            </ul>
          
            </div>
          </div>
          <!-- Banner Ad Block -->
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
                    <h3><a title=" Sample Product" href="<?php echo base_url('blog_details');?>">50% OFF</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a class="link" href="#">Buy Now</a></div>
                </div>
                <div class="item"><img src="<?php echo base_url();?>images/slide1.jpg" alt="slide1">
                  <div class="carousel-caption">
                    <h3><a title=" Sample Product" href="<?php echo base_url('blog_details');?>">Hot collection</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="item"><img src="<?php echo base_url();?>images/slide2.jpg" alt="slide2">
                  <div class="carousel-caption">
                    <h3><a title=" Sample Product" href="<?php echo base_url('blog_details');?>">Summer collection</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="sr-only">Next</span> </a></div>
          </div>
        </div>
          <!-- Banner Text Block -->
          <div class="text-widget widget widget__sidebar">
            <h2 class="widget-title">Custom Widget</h2>
            <div class="widget-content">Mauris at blandit erat. Nam vel tortor non quam scelerisque cursus. Praesent nunc vitae magna pellentesque auctor. Quisque id lectus.<br>
              <br>
              Massa, eget eleifend tellus. Proin nec ante leo ssim nunc sit amet velit malesuada pharetra. Nulla neque sapien, sollicitudin non ornare quis, malesuada.</div>
          </div>
        </div>
      </div>
      <div class="col-main col-sm-9">
        <div id="main" class="blog-wrapper">
          <div id="primary" class="site-content">
            <div id="content" role="main">
              <article id="post-29" class="blog_entry clearfix wow bounceInUp animated animated" style="visibility: visible;">
                <header class="blog_entry-header clearfix">
                  <div class="blog_entry-header-inner">
                    <h2 class="blog_entry-title"> <a href="<?php echo base_url('blog_details');?>" rel="bookmark">LOREM IPSUM DOLOR SIT AMET</a> </h2>
                    <div class="entry-meta">
                      <time class="entry-date">Jul 10, 2014</time>
                      . </div>
                  </div>
                  <!--blog_entry-header-inner--> 
                </header>
                <div class="entry-content">
                  <div class="featured-thumb"><a href="#"><img src="<?php echo base_url();?>images/blog-img3.jpg" alt="blog-img3"></a></div>
                  <div class="entry-content">
                    <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
                    <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis. Sed felis sapien, commodo in iaculis in, feugiat sed enim. Sed nunc ipsum, fermentum varius dignissim vitae, blandit et ante.Maecenas sagittis, lorem sed congue egestas, lectus purus congue nisl, ac molestie enim ligula nec eros. Sed leo tortor, tincidunt sit amet elementum vel, eleifend at orci. Maecenas ut turpis felis. Donec sit amet quam sem, et aliquet est.</p>
                    <p>Quisque nisl lectus, accumsan et euismod eu, sollicitudin ac augue. In sit amet urna magna. Curabitur imperdiet urna nec purus egestas eget aliquet purus iaculis. Nunc porttitor blandit imperdiet. Nulla facilisi. Cras odio ipsum, vehicula nec vehicula sed, convallis scelerisque quam. Phasellus ut odio dui, ut fermentum neque.</p>
                  </div>
                  <p> <a href="<?php echo base_url('blog_details');?>" class="btn">Read More</a> </p>
                </div>
              </article>
              <article id="post-29" class="blog_entry clearfix wow bounceInUp animated animated" style="visibility: visible;">
                <header class="blog_entry-header clearfix">
                  <h2 class="blog_entry-title"> <a href="<?php echo base_url('blog_details');?>" rel="bookmark">LOREM IPSUM DOLOR SIT AMET</a> </h2>
                  <div class="entry-meta">
                    <time class="entry-date">Jul 10, 2014</time>
                    . </div>
                  <!--blog_entry-header-inner--> 
                </header>
                <div class="entry-content">
                  <div class="featured-thumb"><a href="#"><img src="<?php echo base_url();?>images/blog-img2.jpg" alt="blog-img2"></a></div>
                  <div class="entry-content">
                    <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
                    <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis. Sed felis sapien, commodo in iaculis in, feugiat sed enim. Sed nunc ipsum, fermentum varius dignissim vitae, blandit et ante.Maecenas sagittis, lorem sed congue egestas, lectus purus congue nisl, ac molestie enim ligula nec eros. Sed leo tortor, tincidunt sit amet elementum vel, eleifend at orci. Maecenas ut turpis felis. Donec sit amet quam sem, et aliquet est.</p>
                  </div>
                  <p> <a href="<?php echo base_url('blog_details');?>" class="btn">Read More</a> </p>
                </div>
              </article>
              <article id="post-29" class="blog_entry clearfix wow bounceInUp animated animated" style="visibility: visible;">
                <header class="blog_entry-header clearfix">
                  <h2 class="blog_entry-title"> <a href="<?php echo base_url('blog_details');?>" rel="bookmark">LOREM IPSUM DOLOR SIT AMET</a> </h2>
                  <div class="entry-meta">
                    <time class="entry-date">Jul 10, 2014</time>
                    . </div>
                  <!--blog_entry-header-inner--> 
                </header>
                <div class="entry-content">
                  <div class="featured-thumb"><a href="#"><img src="<?php echo base_url();?>images/blog-img1.jpg" alt="blog-img1"></a></div>
                  <div class="entry-content">
                    <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
                    <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis. Sed felis sapien, commodo in iaculis in, feugiat sed enim. Sed nunc ipsum, fermentum varius dignissim vitae, blandit et ante.Maecenas sagittis, lorem sed congue egestas, lectus purus congue nisl, ac molestie enim ligula nec eros. Sed leo tortor, tincidunt sit amet elementum vel, eleifend at orci. Maecenas ut turpis felis. Donec sit amet quam sem, et aliquet est.</p>
                  </div>
                  <p> <a href="<?php echo base_url('blog_details');?>" class="btn">Read More</a> </p>
                </div>
              </article>              
            </div>
          </div>
          <div class="pager">
            <div class="pages"> 
              <!--<strong></strong>-->
              <ol class="pagination">
                <li class="active"><a href="">1</a></li>
                <li><a class="button" href="<?php echo base_url('product_details');?>?p=2">2</a></li>
                <li> <a class="button next i-next" href="<?php echo base_url('product_details');?>?p=2" title="Next"> >> </a> </li>
              </ol>
            </div>
          </div>
        </div>
        <!--#main wrapper grid_8--> 
        
      </div>
      <!--col-main col-sm-9--> 
    </div>
  </div>
  <!--main-container--> 
  
</div>
<!--col2-layout--> 


<?php
$this->load->view("common/footer");
?>

</div>
<!--page--> 

</body>
</html>