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
                <h2>Fun Target</h2>
                <span class="remainLoan"></span>
                <div class="row">
                    <div>



                        <form action="#" method="post">
                            <table style="width:100%;">

                                <tr>
                                    <td>
                                        <div class="grid">
                                            <table style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th datatype="int" colname="SRNO" sortorder="desc"
                                                            style="cursor:pointer;">Sr. No.</th>
                                                        <th datatype="" colname="DRAWNO" sortorder="asc"
                                                            style="cursor:pointer;">Winning No.</th>
                                                        <th datatype="" colname="DRAW_TIME" sortorder="asc"
                                                            style="cursor:pointer;">Draw Time</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tableData">
                                                </tbody>

                                            </table>
                                            <table style="width:100%">

                                                <tbody>
                                                    <tr id="pagin">
                                                        <td><i class="fa-backward fa-lg" style="cursor:pointer;"
                                                                alt="Page 1" pageval="1"></i></td>
                                                        <td><i class="fa-caret-left fa-lg" style="cursor:pointer;"
                                                                alt="Previous" pageval="-1"></i></td>
                                                        <td><input type="text" value="1"
                                                                style="width:30px;text-align:right;" id="total_record">
                                                            / 62 <input type="button" value="Go"></td>
                                                        <td><select>
                                                                <option value="10">10 Records</option>
                                                                <option value="20">20 Records</option>
                                                                <option value="30">30 Records</option>
                                                            </select></td>
                                                        <td><i class="fa-caret-right fa-lg" style="cursor:pointer;"
                                                                alt="Next" pageval="+1"></i></td>
                                                        <td><i class="fa-forward fa-lg" style="cursor:pointer;"
                                                                alt="Last Page" pageval="62"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <div class="toPopup">
                                <div class="close"></div>
                                <div class="loader2"></div>
                                <div>
                                    <p id="paraWeekDate"></p>
                                </div>
                                <div id="dvWeekDetails" style="overflow:auto;height:460px;">
                                </div>
                            </div>
                            <!--toPopup end-->
                            <div class="backgroundPopup"></div>
                            <div class="toPopup2">
                                <div class="close2"></div>
                                <div>
                                    <p id="paraManagerName"></p>
                                    <p id="paraWeekDetails"></p>
                                </div>
                                <div id="dvManagerCCSList" class="table_formatting">
                                </div>
                            </div>
                            <!--toPopup end-->
                            <div class="loader3"></div>
                            <div class="backgroundPopup2"></div>
                            <input id="hdnMemberType" name="strMemberType" type="hidden" value="A" />
                        </form>
                    </div>

                </div>
                <div class="bar-chart">
                    <img src="<?php echo base_url() ?>public/latest_assets/images/login-bar-chart.png"
                        alt="Bar Chart" />
                </div>
            </div>
        </div>
        <footer>
            <div class="copyright">All rights reserved. © Copyright 2023.</div>
        </footer>
    </div>
    </div>

    <link href="<?php echo base_url() ?>public/latest_assets/css/jquery-ui.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() ?>public/latest_assets/css/PopUp.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/latest_assets/css/PopUp2.css">
    <link href="<?php echo base_url() ?>public/latest_assets/css/style-acc.css" rel="stylesheet" />

    <link href="<?php echo base_url() ?>public/latest_assets/css/Loader.css" rel="stylesheet" />


    <link href="Content/css?v=oYihV9CehCus4xDq018je822-VWqI_ehba87oR13A1A1" rel="stylesheet" />

    <script src="<?php echo base_url() ?>public/latest_assets/js/modernizr.js"></script>

    <script src="<?php echo base_url() ?>public/latest_assets/js/jquery.js"></script>


    <script src="<?php echo base_url() ?>public/latest_assets/js/jqueryval.js"></script>

    <script src="<?php echo base_url() ?>public/latest_assets/js/jquery-ui.js"></script>

    <link href="<?php echo base_url() ?>public/latest_assets/css/GridView.css" rel="stylesheet" />

    <script src="<?php echo base_url() ?>public/latest_assets/js/GridLib.js"></script>

    <link href="<?php echo base_url() ?>public/latest_assets/css/datepicker.css" rel="stylesheet" />

    <script src="<?php echo base_url() ?>public/latest_assets/js/datepicker.js"></script>

    <script src="<?php echo base_url() ?>public/latest_assets/js/PointTransfer.js"></script>
    <script src="<?php echo base_url() ?>public/latest_assets/js/Revenue.js"></script>
    <script type="text/javascript">
    $(function() {
        $("#accordion").accordion({
            heightStyle: 'content'
        });
    });
    </script>
    <script type="text/javascript">
    $(function() {
        $("#accordion").accordion({
            heightStyle: 'content'
        });
    });
    </script>
    <script type='text/javascript'>
    $(document).ready(function() {
        ajaxDataLoad();
    });
    $(document).on("click", ".pagination", function() {
        const page = $(this).attr('data-id') ? $(this).attr('data-id') : 1;
        console.log('clicked');
        ajaxDataLoad(page);
    });
    $(document).on("click", ".next_link", function() {
        const next_link = $(this).attr('data-next');
        console.log('clicked');
        ajaxDataLoad(next_link);
    });
    $(document).on("click", ".left_link", function() {
        const left_link = $(this).attr('data-left');
        console.log('clicked');
        ajaxDataLoad(left_link);
    });
    $(document).on("click", ".doublenext_link", function() {
        const doublenext_link = $(this).attr('data-dnext');

        console.log('clicked');
        ajaxDataLoad(doublenext_link);
    });
    $(document).on("click", ".doublelast_link", function() {
        const doublelast_link = $(this).attr('data-last');
        console.log('clicked');
        ajaxDataLoad(doublelast_link);
    });
    $(document).on("change", ".records", function() {
        const next_link = $(this).attr('data-next');
        const doublenext_link = $(this).attr('data-dnext');
        const doublelast_link = $(this).attr('data-last');
        const left_link = $(this).attr('data-left');
        const records = $(this).val();
        ajaxDataLoad(page = 1, pagination = 0, next_link, left_link, doublenext_link, doublelast_link, records);
    });

    function ajaxDataLoad(page = 1, pagination, next_link, left_link, doublenext_link, doublelast_link, records) {
        $.ajax({
            url: '<?=base_url()?>Vip/ajaxRoulletTarget',
            type: 'post',
            data: {
                'page': page,
                'total_record': pagination,
                'records': records,
                'next_link': next_link,
                'left_link': left_link,
                'doublenext_link': doublenext_link,
                'doublelast_link': doublelast_link
            },
            dataType: 'json',
            success: function(responseData) {
                $('#tableData').html(responseData.data);
                $('#total_record').html(responseData.total_record);
                $('#next_link').html(responseData.next_link);
                $('#left_link').html(responseData.left_link);
                $('#doublenext_link').html(responseData.doublenext_link);
                $('#doubleleft_link').html(responseData.doubleleft_link);
                pageSize = 10;
                var html = '';
                html +=
                    `
                <td><a href="javascript:void(0)" alt="Page 1" class="doublelast_link" data-last="${responseData.doublelast_link}"><i class="fa-backward fa-lg" style="cursor:pointer;" alt="Page 1" pageval="1"></i></a></td>
                <td><a href="javascript:void(0)" alt="Page 1" class="left_link" data-left="${responseData.left_link}"><i class="fa-caret-left fa-lg" style="cursor:pointer;" alt="Previous" pageval="-1"></i></a></td>`;
                var pageCount = responseData.total_record / pageSize;
                for (var i = 0; i < pageCount; i++) {
                    html +=
                        `<td><a href="javascript:void(0)" alt="Page 1" class="pagination" data-id="${i+1}">${i+1}</a></td>`;
                }
                html +=
                    `<td><input  type="text" value="${page ? page:'1'}" style="width:30px;text-align:right;" id="total_record">${responseData.total_record} <input type="button" value="Go"></td>`;

                html += `<td><select class="records" name="records">`;
                for (var i = 1; i <= pageCount; i++) {
                    html += `<option value="${i*10}" >${i*10} Records</option>`;
                }
                html += `</select>
                </td>`;

                html +=
                    `<td><a href="javascript:void(0)" alt="Page 1" class="next_link" data-next="${responseData.next_link}"><i class="fa-caret-right fa-lg" style="cursor:pointer;" alt="Next" pageval="+1"></i></a></td>
                    <td><a href="javascript:void(0)" alt="Page 1" class="doublenext_link" data-dnext="${responseData.doublenext_link}"><i class="fa-forward fa-lg" style="cursor:pointer;" alt="Last Page" pageval="62"></i></a></td>`;
                $("#pagin").html(html);
            }
        });
    }
    </script>
</body>

</html>