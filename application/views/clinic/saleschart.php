<head>
<!--  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>-->
<!--  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/datepicker.css'); ?>">
  <link rel="stylesheet" href="/resources/demos/style.css">
<!--
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
-->
  <script src="<?php echo base_url("assets/js/jquery-1.12.4.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/jquery-ui.js"); ?>"></script>

</head>

<style type="text/css">
    #chart-container {
        width: 100%;
        height: auto;	
        margin-top:5px;
    }
    .button {
        margin-top:25px;
        padding: 5px 10px;
        font-size: 15px;
        font-family: Poppins;
        font-weight: light;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: white;	
        background-color: #4d94ff;
        border: none;
        border-radius: 5px;
        box-shadow: 0 5px #999;
    }
    .button:hover {background-color: #003d99}
    .button:active {
        background-color: #003d99;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
    input[type='text']{
        background: url(<?php echo base_url('assets/images/calendar.png');?>) no-repeat;
        background-position: 97% 3px;
        padding-left: 10px;
        cursor: pointer;
    }
    .spanhidden{
        color:#ff0000;
        padding:5px 0px;
        position: absolute;
        display: none;
    }
    #enddate:hover + .spanhidden {
        display: block;
    }
</style>


<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="blue">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    (Logo)
                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Deloso Vet Clinic
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?php echo base_url('vetclinic'); ?>">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('vetclinic/records'); ?>">
                            <i class="now-ui-icons business_badge"></i>
                            <p>Records</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('vetclinic/schedule'); ?>">
                            <i class="now-ui-icons ui-1_calendar-60"></i>
                            <p>Schedule</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url('vetclinic/sales'); ?>">
                            <i class="now-ui-icons business_chart-bar-32"></i>
                            <p>Sales</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/user.html">
                            <i class="now-ui-icons shopping_basket"></i>
                            <p>Inventory</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/tables.html">
                            <i class="now-ui-icons education_glasses"></i>
                            <p>Services</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    <div class="main-panel">
            <div class="panel-header panel-header-lg">
                <canvas id="bigDashboardChart"></canvas>
            </div>
		    <div class="content">
		        <div class="btn-group" style="margin-left:50px;">
			    <button type="button" class="button" onclick="realTimeSalesChart()">Weekly</button>
			    <button type="button" class="button" onclick="monthlySalesChart()">Monthly</button>
			    <button type="button" class="button" onclick="yearlySalesChart()">Yearly</button>
				  </div>

				<div id="chart-container" style="margin-top:-40px;">
						<canvas id="mycanvas"></canvas>
				</div>
			    <!-- <form method="POST" action="<?php echo base_url('vetclinic/sales');?>" > -->
					<div id="chart-date" class="row salesDate" >
			            <div class="col-md-2 col-sm-2"></div>
			            <div class="col-md-3 col-sm-3">
							<label>Start date:</label><input type="text" class="form-control" id="startdate" name="startdate" />
			            </div>
			            <div class="col-md-3 col-sm-3">
							<label>End date:</label><input type="text" class="form-control" id="enddate" name="enddate" disabled="disabled" />
			                <div id="toShow" class="spanhidden"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;Please enter start date</div>
			            </div>            
			            <div class="col-md-2 col-sm-2">
			                <button type="reset" class="button" style="background-color:#f2f2f2;color:#404040;">Cancel</button>
			                <button type="button" onclick="realTimeSalesChart()" class="button">Save</button>
			            </div>
			            <div class="col-md-2 col-sm-2"></div>
					</div>
        </div>
    </div>
</body>