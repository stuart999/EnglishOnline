<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"F:\php\WWW\tp5\tp\public/../application/admin/view/additem/adddx.html";i:1558402860;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>添加单选</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">

    <link href='http://fonts.useso.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="../../../.././vendor/admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../../.././vendor/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../.././vendor/admin/css/templatemo-style.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Left column -->
<div class="templatemo-flex-row">
    <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
            <div class="square"></div>
            <h1 style="margin-top:10px;font-size: 1.6em">管理员 欢迎</h1>
        </header>
        <div class="profile-photo-container">
            <img src="../../../.././vendor/admin/images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">
            <div class="profile-photo-overlay"></div>
        </div>
        <!-- Search box -->
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">
            <ul>
                <li><a href="http://127.0.0.1:8090/public/index.php/admin/index/indexs"><i class="fa fa-home fa-fw"></i>主页</a></li>
                <li><a href="#" id="showhello" onclick="showhello()"><i class="fa fa-bar-chart fa-fw"></i>题源上传</a></li>
                <ul  class="nav child_menu"id="hello" style="display: none">
                    <li><a  href="http://127.0.0.1:8090/public/index.php/admin/index/adddx" class="active">单选题</a></li>
                    <li><a  href="http://127.0.0.1:8090/public/index.php/admin/index/addyd">阅读题</a></li>
                    <li><a  href="http://127.0.0.1:8090/public/index.php/admin/index/addwx">完型填空</a></li>
                </ul>
                <li><a href="http://127.0.0.1:8090/public/index.php/admin/index/userinfo?page=1"><i class="fa fa-database fa-fw"></i>用户管理</a></li>
                <li><a href="http://127.0.0.1:8090/public/index.php/admin/index/logout"><i class="fa fa-home fa-fw"></i>退出</a></li>
            </ul>
        </nav>
    </div>
    <!-- Main content -->
    <div class="templatemo-content col-1 light-gray-bg" style="overflow: hidden">
        <div class="templatemo-top-nav-container" style="height: 40px">
        </div>
        <div class="templatemo-content-container" style="padding-bottom: 0px;padding-top:0px">
            <div class="templatemo-flex-row flex-content-row">
                <div class="templatemo-content-widget white-bg col-1" style="height:400px">
                    <i class="fa fa-times"></i>
                    <h2 class="text-uppercase">当前管理员上传题目数</h2>
                    <h3 class="text-uppercase">类型占比</h3><hr>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dxp; ?>%;"></div>
                    </div>
                    <p>单选题:共<?php echo $dxnum; ?>道</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $ydp; ?>%;"></div>
                    </div>
                    <p>阅读题:共<?php echo $ydnum; ?>道</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $wxp; ?>%;"></div>
                    </div>
                    <p>完型填空<?php echo $wxnum; ?>道</p>
                </div>
                <div class="col-2">
                    <div class="panel panel-default margin-10">
                        <div class="panel-heading"><h2 class="text-uppercase">单选题上传</h2></div>
                        <div class="panel-body" style="padding:40px">
                            <form action="http://127.0.0.1:8090/public/index.php/admin/index/add?typeid=1" class="templatemo-login-form" method="post">
                                <div class="form-group">
                                    <label >题目</label>
                                    <textarea name="title" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label >选项A</label>
                                    <input type="text" class="form-control" name="choicea" >
                                </div>
                                <div class="form-group">
                                    <label >选项B</label>
                                    <input type="text" class="form-control"  name="choiceb" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label >选项C</label>
                                    <input type="text" class="form-control"  name="choicec" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>选项D</label>
                                    <input type="text" class="form-control"  name="choiced" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label >答案</label>
                                    <div class="col-lg-12 form-group">
                                        <div class="margin-right-15 templatemo-inline-block">
                                            <input type="radio" name="radio" id="r7" value="A">
                                            <label for="r7" class="font-weight-400"><span></span>A</label>
                                        </div>
                                        <div class="margin-right-15 templatemo-inline-block">
                                            <input type="radio" name="radio" id="r8" value="B">
                                            <label for="r8" class="font-weight-400"><span></span>B</label>
                                        </div>
                                        <div class="margin-right-15 templatemo-inline-block">
                                            <input type="radio" name="radio" id="r9" value="C">
                                            <label for="r9" class="font-weight-400"><span></span>C</label>
                                        </div>
                                        <div class="margin-right-15 templatemo-inline-block">
                                            <input type="radio" name="radio" id="r10" value="D">
                                            <label for="r10" class="font-weight-400"><span></span>D</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label >解析</label>
                                    <textarea name="analysis" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox squaredTwo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="templatemo-blue-button">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="text-right" style="padding-bottom: 0px">
                <div class="templatemo-top-nav-container" style="padding:25px;height: 20px;margin-bottom: 0px">
                    <p>Copyright &copy; 2019 Company Name
                        | Bugless <a href="#"> 在线考试系统入口</a> </p>
                </div>
            </footer>
        </div>
    </div>
</div>

<!-- JS -->
<script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
<script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
<script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
<script>
    /* Google Chart
    -------------------------------------------------------------------*/
    // Load the Visualization API and the piechart package.
    google.load('visualization', '1.0', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
            ['Mushrooms', 3],
            ['Onions', 1],
            ['Olives', 1],
            ['Zucchini', 1],
            ['Pepperoni', 2]
        ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night'};

        // Instantiate and draw our chart, passing in some options.
        var pieChart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
        pieChart.draw(data, options);

        var barChart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
        barChart.draw(data, options);
    }

    $(document).ready(function(){
        if($.browser.mozilla) {
            //refresh page on browser resize
            // http://www.sitepoint.com/jquery-refresh-page-browser-resize/
            $(window).bind('resize', function(e)
            {
                if (window.RT) clearTimeout(window.RT);
                window.RT = setTimeout(function()
                {
                    this.location.reload(false); /* false to get page from cache */
                }, 200);
            });
        } else {
            $(window).resize(function(){
                drawChart();
            });
        }
    });
    function showhello() {
        if($("#hello").css("display")== 'none'){
            $("#hello").fadeIn("slow");
        }else{
            $("#hello").css("display",'none');
        }

    }
</script>
<script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

</body>
</html>