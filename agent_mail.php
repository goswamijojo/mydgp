
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


    <link rel="stylesheet" href="<?php echo base_url() ?>public/latest_assets/css/jquery-ui.css">

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js">
    </script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js">
    </script>


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

    <h2>Agent Mail Details</h2>
    <div class="row">
        <form action="" method="post" class="forms">

            <table style="width:100%">
            <tbody>
                <tr>
                    <td>
                        <div class="row-left">
                        <label for="exampleInputEmail1">From Date :</label>
                    <input type="text" class="" data-val="true" data-val-required="Please Provide From Date" readonly="readonly" type="text" id="txtFromDate"  name="from_date">
                        </div>
                        <div class="row-mid">
                        <label for="exampleInputEmail1">To Date : </label>
                <input type="text" class=""  id="txtToDate" aria-describedby="emailHelp" name="to_date">
                        </div>
                        <div class="row-right">
                        <input type="submit" value="Show Details">
               
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        </form>
    </div>
    <div class="bar-chart">
        <img src="<?php echo base_url() ?>/public/latest_assets/img/login-bar-chart1.png">
    </div>



</div>



<footer>
    <div class="copyright">All rights reserved. © Copyright 2023.</div>
</footer>

<!-- <link href="<?php echo base_url() ?>public/latest_assets/css/jquery-ui.css" rel="stylesheet"/>
<link rel="stylesheet" href="<?php echo base_url() ?>public/latest_assets/css/PopUp.css">
<link rel="stylesheet" href="<?php echo base_url() ?>public/latest_assets/css/PopUp2.css">
 <link href="<?php echo base_url() ?>public/latest_assets/css/style-acc.css" rel="stylesheet"/> -->

 <!-- <link href="<?php echo base_url() ?>public/latest_assets/css/Loader.css" rel="stylesheet"/>


  <link href="Content/css?v=oYihV9CehCus4xDq018je822-VWqI_ehba87oR13A1A1" rel="stylesheet"/>

  <script src="<?php echo base_url() ?>public/latest_assets/js/modernizr.js"></script>

  <script src="<?php echo base_url() ?>public/latest_assets/js/jquery.js"></script>

  
 <script src="<?php echo base_url() ?>public/latest_assets/js/jqueryval.js"></script>

 <script src="<?php echo base_url() ?>public/latest_assets/js/jquery-ui.js"></script>

 <link href="<?php echo base_url() ?>public/latest_assets/css/GridView.css" rel="stylesheet"/>

 <script src="<?php echo base_url() ?>public/latest_assets/js/GridLib.js"></script> -->

 <link href="<?php echo base_url() ?>public/latest_assets/css/datepicker.css" rel="stylesheet"/>

 <script src="<?php echo base_url() ?>public/latest_assets/js/datepicker.js"></script>

 <script src="<?php echo base_url() ?>public/latest_assets/js/PointTransfer.js"></script>
 <script src="<?php echo base_url() ?>public/latest_assets/js/Revenue.js"></script>


<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

 -->

<script>
$(document).ready(function() {
    $('table').DataTable({

    });
});
</script>
</body>



</html>