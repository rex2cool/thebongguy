
<!DOCTYPE html>
<html lang="en" class=" js no-touch localstorage">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login Page</title>
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
<body class="  customer-account-login rtl" style="">
<div id="page">
<?php
$this->load->view("common/header");
?>
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
     <div class="page-title">
     <h2>Login or Create an Account</h2>
  </div>
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </div>
    
       
<!-- BEGIN Main Container -->  
          
       <div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">     
              
	       <div class="main">                     
                            <div class="account-login container">
  <!--page-title-->

        <form action="" method="post" id="login-form">
        <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
        <fieldset class="col2-set">
            <div class="col-1 new-users"> 
                  <strong>New Customers</strong>    
                <div class="content">
                   
                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                     <div class="buttons-set">
                    <button type="button" title="Create an Account" class="button create-account" onClick=""><span><span>Create an Account</span></span></button>
                </div>
                </div>
            </div>
            <div class="col-2 registered-users">
             <strong>Registered Customers</strong>             
                <div class="content">
                    
                    <p>If you have an account with us, please log in.</p>
                    <ul class="form-list">
                        <li>
                             <label for="email">Email Address<em class="required">*</em></label>
                            <div class="input-box">
                                <input type="text" name="login[username]" value="" id="email" class="input-text required-entry validate-email" title="Email Address">
                            </div>
                        </li>
                        <li>
                            <label for="pass">Password<em class="required">*</em></label>
                            <div class="input-box">
                                <input type="password" name="login[password]" class="input-text required-entry validate-password" id="pass" title="Password">
                            </div>
                        </li>
                                                                    </ul>
                    <div class="remember-me-popup">
    <div class="remember-me-popup-head" style="display:none">
        <h3 id="text2">What's this?</h3>
        <a href="#" class="remember-me-popup-close" onClick="showDiv()" title="Close">Close</a>
    </div>
    <div class="remember-me-popup-body" style="display:none">
        <p id="text1">Checking "Remember Me" will let you access your shopping cart on this computer when you are logged out</p>
        <div class="remember-me-popup-close-button a-right">
            <a href="#" class="remember-me-popup-close button" title="Close" onClick="
            showDiv()"><span>Close</span></a>
        </div>
    </div>
</div>

<p class="required">* Required Fields</p>



                     <div class="buttons-set">
                  
                    <button type="submit" class="button login" title="Login" name="send" id="send2"><span>Login</span></button>

                      <a href="#" class="forgot-word">Forgot Your Password?</a>
                 </div> <!--buttons-set-->
                  </div> <!--content-->                               
            </div> <!--col-2 registered-users-->
                   </fieldset> <!--col2-set-->
    </form>
   
</div> <!--account-login-->
         
	       </div><!--main-container-->
          
          </div> <!--col1-layout-->

  
<?php
$this->load->view("common/footer");
?>
  
</div>
<!--page-->

</body></html>