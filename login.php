<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="<?php echo base_url(); ?>public/latest_assets/images/g-report-short-icon.png" rel="shortcut icon"/>
  <link href="<?php echo base_url(); ?>public/latest_assets/css/boilerplate.css" rel="stylesheet"/>

  <link href="<?php echo base_url(); ?>public/latest_assets/css/style.css" rel="stylesheet"/>

  <script src="<?php echo base_url(); ?>public/latest_assets/js/respond.min.js"></script>
  <script src="<?php echo base_url(); ?>public/latest_assets/js/jquery.1.11.1.js"></script>

  <script src="<?php echo base_url(); ?>public/latest_assets/js/jquery.resmenu.js"></script>

  <link href="<?php echo base_url(); ?>public/latest_assets/css/font-awesome.css" rel="stylesheet"/>





    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/latest_assets/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/latest_assets/media.css" rel="stylesheet" type="text/css" /> -->
	    <title>G-Report</title>
</head>

<style>
 .fa
    {
     background:none;
     border:none;
     font-size:36px;
     padding:0;
     color:#b6b6b6;
    }
    .bar-chart
    {
     opacity:.5;
    }
</style>

<body id="page1">
  <div id="loader" class="loader"></div>
  <div class="top-bar"></div>
   <div class="gridContainer clearfix">
  	<div id="LayoutDiv1">
    <div class="header">
       

                    <div class="logo">
                        <a href="<?php echo base_url() ?>/vip/dashboard" title="Main Page">
                            <img  src="<?php echo base_url() ?>public/latest_assets/img/logo.png"
                                alt="Logo">
                        </a>
                    </div>
               
           
    </div>

    
        <div class="container">

           

					<!-- <div class="d-flex align-items-center"> -->
                    <div class="login-div">
                        <form method="post" action="<?php echo base_url() ?>vip/login_post">
                            <?php
                            if(!empty($this->session->flashdata('warning')))
                            {
                            ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo $this->session->flashdata('warning'); ?>

                            </div>
                            <?php
                            }
                           ?>

                            <div class="login-row login-row-width">
                                <h2>Login</h2>

                            </div>
                            <div class="login-row fields">
                                <div class="login-label">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="login-fields">
                                    <!-- <input style="height: 40px" autocomplete="off" name="customer_id" data-val="true" placeholder="User Name:" type="password" value=""> -->
                                    <input autocomplete="off" name="customer_id" data-val="true"
                                        placeholder="User Name :" type="text" value="">
                                </div>
                            </div>
                            <div class="login-row fields">
                                <div class="login-label">
                                    <i class="fa fa-lock"></i>
                                </div>
                                <div class="login-fields">
                                    <input autocomplete="off" name="password" data-val="true" placeholder="Password :"
                                        type="password">
                                </div>
                            </div>
                            <div class="login-row fields">
                                <div class="login-label">
                                    <i class="fa fa-lock"></i>
                                </div>
                                <div class="login-fields">
                                    <input autocomplete="off" name="code" class="captchaText"
                                        placeholder="Enter Image Text -> " type="text" value="">
                                </div>

                                <span>
                                    <?php $random=rand(10,100000); ?>
                                    <input class="captchaText" placeholder="Enter Image Text -> " name="captcha_value"
                                        type="hidden" value="<?php echo $random; ?>">
                                    <!-- <img src="/Login.mvc/CaptchaImage"> -->
                                    <!-- <img src="/Login.mvc/CaptchaImage2" class="imgLeftMargin"> -->
                                    <strong class="imgLeftMargin" style="color:green"><?php echo $random; ?></strong>
                                </span>

                            </div>
                            <div>
                                <span class="field-validation-valid" data-valmsg-for="strLoginID"
                                    data-valmsg-replace="true"></span>
                                <span class="field-validation-valid" data-valmsg-for="strLoginPassword"
                                    data-valmsg-replace="true"></span>
                                <span class="field-validation-valid" data-valmsg-for="strCaptcha"
                                    data-valmsg-replace="true"></span>
                            </div>
                            <div class="login-row login-submit">
                                <div class="login-fields">
                                    <input type="checkbox"> Remember Me <span style="float:right;"></span>&nbsp;
                                </div>
                                <input type="submit" name="btnCheckLogin" id="btnCheckLogin" value="Login">
                            </div>

                        </form>
                    </div>
               
					<div class="bar-chart">
                    <img  src="<?php echo base_url() ?>/public/latest_assets/img/login-bar-chart1.png">
					</div>
					<!-- </div> -->
		</div>
                <footer>
                    <div class="copyright">All rights reserved. © Copyright 2023.</div>
                </footer>

            
       

    



</div>


</body>
<!-- 
<script type="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script type="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script> -->

</html>