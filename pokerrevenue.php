<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fun Rep</title>
    <link href="images/g-report-short-icon.png" rel="shortcut icon" />
    <link href="<?php echo base_url() ?>public/latest_assets/css/boilerplate.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() ?>public/latest_assets/css/JqGridTheme.css">
    <link href="<?php echo base_url() ?>public/latest_assets/css/style.css" rel="stylesheet" />

    <script src="<?php echo base_url() ?>public/latest_assets/js/respond.min.js"></script>


    <script src="<?php echo base_url() ?>public/latest_assets/js/jquery.1.11.1.js"></script>

    <script src="<?php echo base_url() ?>public/latest_assets/js/jquery.resmenu.js"></script>

    <link href="<?php echo base_url() ?>public/latest_assets/css/font-awesome.css" rel="stylesheet" />

</head>

<body id="page1">
    <div id="loader" class="loader"></div>
    <div class="top-bar"></div>
    <div class="gridContainer clearfix">
        <div id="LayoutDiv1">
            <div class="header">
                <div class="logo">
                    <a href="<?php echo base_url() ?>/vip/dashboard" title="Main Page">
                        <img src="<?php echo base_url() ?>public/latest_assets/img/logo.png" alt="Logo">
                    </a>
                </div>
                <div class="user-details">
                    <span>Welcome</span>
                    <strong
                        id="logout"><em><?php echo $this->session->userdata('l_first_name') .' '. $this->session->userdata('l_last_name'); ?></em>&nbsp;</strong>
                </div>
                <nav>

                    <ul class="toresponsive" id="menu4">
                        <li>
                            <a href="#" class="<?php if($this->uri->segment('2')=='dashboard'){ echo 'Active';} ?>">
                                Reports
                            </a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>vip/revenue">Revenue</a>
                                </li>
                                <li class='new-opt'>
                                    <a href="<?php echo base_url() ?>vip/pokerrevenue">Poker Revenue</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>vip/dashboard">Point Transfer</a>
                                </li>
                                <li><a href="<?php echo base_url() ?>vip/mvc">Multiplayer Point Transfer</a></li>
                                <li><a href="<?php echo base_url() ?>vip/dailystatus">Daily Status</a></li>
                            </ul>
                        </li>
                        <li
                            class="<?php if($this->uri->segment('2')=='roullet_target' || $this->uri->segment('2')=='roullet_draw'){ echo 'Active';} ?>">
                            <a href="#">
                                Draw Details
                            </a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>vip/roullet_target">Fun Target</a>
                                </li>
                                <li><a href="<?php echo base_url() ?>vip/roullet_draw">Fun Roullet</a></li>

                                <li><a href="<?php echo base_url() ?>vip/TripleFun">Triple Fun</a></li>
                                <li><a href="<?php echo base_url() ?>vip/FunAB">Fun AB</a></li>

                            </ul>
                        </li>
                        <li class="<?php if($this->uri->segment('2')=='agent_mail'){ echo 'Active';} ?>">
                            <a href="#">
                                Mail Report
                            </a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>vip/agent_mail">Agent Mail</a>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a class="<?php if($this->uri->segment('2')=='weekly_report'){ echo 'Active';} ?>"
                                href="<?php echo base_url() ?>vip/weekly_report">Weekly Details Reports</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>vip/logout">LogOut</a>
                        </li>

                    </ul>
                </nav>
            </div>

<div class="container">
      <h2>Revenue</h2>
      <span class="remainLoan"></span>
      <div class="row">
       <div>


 <form action="" method="post"> 
 <table style="width:100%;">
    <tr>
     <td>
     <div class="row-left">
       <label for="strFromDate">From Date :</label>
        <input  class="" data-val="true"  data-val-required="Please Provide From Date" id="txtFromDate" name="" 
         readonly="True"  type="text" value="" 
          >
         </div>
         <div class="row-mid">
         <label for="strToDate">To Date : </label>
         <input  class="" data-val="true" type="text" data-val-required="Please Provide To Date" id="txtToDate" 
        name=""   readonly="True"  value="" 
        >
        </div>
        <div class="row-right show-details-button">
             <input type="submit" id="btnShowDetails" value="Search">
         </div>
     </td>
    </tr>
    <tr>
    <td>
    </tr>
           </table>
    <input id="hdnFieldEnabledNarration" name="hdnFieldEnabledNarration" type="hidden" value="N" /></form>
    </div> 
    </div>
   
         <div class="bar-chart">
         <img src="<?php echo base_url() ?>public/latest_assets/images/login-bar-chart.png" alt="Bar Chart"/>
        </div>
         </div>
         <footer>
        <div class="copyright">All rights reserved. &copy; Copyright 2023.</div>
       </footer>
       </div>
     </div>

     <link href="<?php echo base_url() ?>public/latest_assets/css/jquery-ui.css" rel="stylesheet"/>
<link rel="stylesheet" href="<?php echo base_url() ?>public/latest_assets/css/PopUp.css">
<link rel="stylesheet" href="<?php echo base_url() ?>public/latest_assets/css/PopUp2.css">
 <link href="<?php echo base_url() ?>public/latest_assets/css/style-acc.css" rel="stylesheet"/>

 <link href="<?php echo base_url() ?>public/latest_assets/css/Loader.css" rel="stylesheet"/>


  <link href="Content/css?v=oYihV9CehCus4xDq018je822-VWqI_ehba87oR13A1A1" rel="stylesheet"/>

  <script src="<?php echo base_url() ?>public/latest_assets/js/modernizr.js"></script>

  <script src="<?php echo base_url() ?>public/latest_assets/js/jquery.js"></script>

  
 <script src="<?php echo base_url() ?>public/latest_assets/js/jqueryval.js"></script>

 <script src="<?php echo base_url() ?>public/latest_assets/js/jquery-ui.js"></script>

 <link href="<?php echo base_url() ?>public/latest_assets/css/GridView.css" rel="stylesheet"/>

 <script src="<?php echo base_url() ?>public/latest_assets/js/GridLib.js"></script>

 <link href="<?php echo base_url() ?>public/latest_assets/css/datepicker.css" rel="stylesheet"/>

 <script src="<?php echo base_url() ?>public/latest_assets/js/datepicker.js"></script>

 <script src="<?php echo base_url() ?>public/latest_assets/js/PointTransfer.js"></script>
 <script src="<?php echo base_url() ?>public/latest_assets/js/Revenue.js"></script>

 <script type="text/javascript">
     $(function () {
         $("#accordion").accordion({ heightStyle: 'content' });
     });
 </script>

  
  <script type="text/javascript">
      $("#menu4 li ul").hover(function () { // Mouse Over
          $(this).parent().addClass("active");
      },
     function () { // Mouse Out
         $(this).parent().removeClass("active");
     });

     $(document).ready(function () {
         $("#logout").click(function () {
             $(".panel").slideToggle("slow");
         });

         function copyToClipboard() {
             // Create a "hidden" input
             var aux = document.createElement("input");
             // Assign it the value of the specified element
             aux.setAttribute("value", "Print Screen Lol.");
             // Append it to the body
             document.body.appendChild(aux);
             // Highlight its content
             aux.select();
             // Copy the highlighted text
             document.execCommand("copy");
             // Remove it from the body
             document.body.removeChild(aux);
         }

         $(window).keyup(function (e) {
             if (e.keyCode == 44) {
                 copyToClipboard();
             }
         });
     });
   </script>
</body>
</html>

                
          