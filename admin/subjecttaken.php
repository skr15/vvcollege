<?php
	session_start();
	if($_SESSION['username']!="")
	{
		error_reporting(E_ALL & ~E_NOTICE);
		$conn = mysql_connect("localhost", "root", "");
		mysql_select_db("SRMcollege");
		mysql_query("SET NAMES 'utf8'");
		include("inc/jqgrid_dist.php");

		$col = array();
		$col["title"] = "Id"; // caption of column
		$col["name"] = "id"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias) 
		$col["width"] = "18";
		$col["hidden"] = true; // hide column by default
		$col["editable"] = true; 
		$cols[] = $col;	

	


		$col = array();
		$col["title"] = "Course ID(Name)";
		// fieldname is not with tablealias in sql, so we used plain fieldname
		$col["name"] = "course_id"; 
		$col["width"] = "18";
		$col["editable"] = true; // this column is editable
		//$col["editoptions"] = array("size"=>20); // with default display of textbox with size 20
		$col["editrules"] = array("required"=>true); // and is required
		// $col["formatoptions"] = array("srcformat"=>'Y-m-d',"newformat"=>'d/m/Y'); // format as date, wont work for editing
		$col["edittype"] = "select"; // render as select
		$col["editoptions"] = array("value"=>'1:BCA;2:BBA;3:B.COM;4:PTC;5:B.ED');
		$cols[] = $col;

		$col = array();
		$col["title"] = "Fac Id"; // caption of column
		$col["name"] = "fac_id"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias) 
		$col["width"] = "18";
		# $col["hidden"] = true; // hide column by default
		$col["editable"] = true; 
		$col["edittype"] = "select"; // render as select
		$col["editoptions"] = array("value"=>'6:Dipjaya Patel;8:Sandip Surati;9:Chetan Rathod;10:Asma Patel');
		
		$cols[] = $col;	

		
		

		
		$col = array();
		$col["title"] = "Seme Id";
		$col["name"] = "sem_id";
		$col["width"] = "18"; // not specifying width will expand to fill space
		$col["sortable"] = false; // this column is not sortable
		$col["search"] = true; // this column is not searchable
		$col["editable"] = true;
		$col["edittype"] = "select"; // render as select
		$col["editoptions"] = array("value"=>'1:1;2:2;3:3;4:4;5:5;6:6;7:7;8:8;9:9;10:10;11:11;12:12;13:13;14:14;15:15;16:16;17:17;18:18;19:19;20:20');
		//$col["edittype"] = "textarea"; // render as textarea on edit
		$cols[] = $col;

		$col = array();
		$col["title"] = "Sub Id";
		$col["name"] = "sub_id";
		$col["width"] = "20"; // not specifying width will expand to fill space
		$col["sortable"] = false; // this column is not sortable
		$col["search"] = true; // this column is not searchable
		$col["editable"] = true;
		$col["edittype"] = "select"; // render as select
		$col["editoptions"] = array("value"=>'1:COMMUNICATION SKILLS;2:MATHEMATICS;3:INTRODUCTION TO COMPUTERS;4:COMPUTER PROG. & PROG. METHODOLOGY;5:PC SOFTWARE - 1;6:PRATICALS;7:COMPUTERISED FINANCIAL ACCOUNTING;8:ORGANIZATION STRUCTURE & BEHAVIOUR;9:INTRODUCTION TO OPERATING SYSTEM;10:PROGRAMMING LANGUAGE - 1;11:DATABASE MANAGEMENT SYSTEM;12:PRATICALS;13:NUMERICAL AND STATISTICAL METHODS;14:RELATIONAL DATABASE MANAGEMENT SYSTEMS;15:ADVANCED C PROG. & DATA STRUCTURE;16:OBJECT ORIENTED PROGRAMMING;17:SOFTWARE ENGINEERING;18:PRATICALS;19:INFORMATION SYSTEMS;20:NET PROGRAMMING;21:JAVA PROGRAMMING LANGUAGE;22:WEB DESIGNING;23:COMPUTER NETWORK;24:PRACTICAL;25:PHP MYSQL;26:UNIX & SHELL PROGRAMMING;27:INFORMATION SYSTEM APPLICATION DEV.;28:OPERATING SYSTEM - 2;29:ASP.NET;30:PRACTICAL;31:COMPUTER GRAPHICS;32:E - COMMERCE & CYBER SECURITY;33:PROJECT');
		
		//$col["edittype"] = "textarea"; // render as textarea on ed
		$cols[] = $col;

		$col = array();
		$col["title"] = "Exam Id";
		$col["name"] = "exam_id";
		$col["width"] = "20"; // not specifying width will expand to fill space
		$col["sortable"] = false; // this column is not sortable
		$col["search"] = true; // this column is not searchable
		$col["editable"] = false;
		//$col["edittype"] = "textarea"; // render as textarea on ed
		$cols[] = $col;

		
		
		
		


		$col = array();
		$col["title"] = "Start Date";
		$col["name"] = "start_date";
		$col["width"] = "20";
		$col["editable"] = true;
		$col["editrules"] = array("required"=>true,"date"=>true); 
		$col["formatter"] = "date";
		$cols[] = $col;
			
		$col = array();
		$col["title"] = "End Date";
		$col["name"] = "end_date";
		$col["width"] = "20";
		$col["editable"] = true;
		$col["editrules"] = array("required"=>true,"date"=>true); 
		$col["formatter"] = "date";
		$cols[] = $col;

		$col = array();
		$col["title"] = "Division";
		$col["name"] = "division";
		$col["width"] = "20"; // not specifying width will expand to fill space
		$col["sortable"] = false; // this column is not sortable
		$col["search"] = true; // this column is not searchable
		$col["editable"] = true;
		$col["edittype"] = "select"; // render as select
		$col["editoptions"] = array("value"=>'A:A;B:B;C:C');
		//$col["edittype"] = "textarea"; // render as textarea on ed
		$cols[] = $col;



		
		$col = array();
		$col["title"] = "Declard";
		$col["name"] = "declard";
		$col["width"] = "25";
		$col["editable"] = true; // this column is not editable
		$col["align"] = "center"; // this column is not editable
		$col["search"] = true; // this column is not searchable
		$col["edittype"] = "select"; // render as select
		$col["editoptions"] = array("value"=>'No:No;Yes:Yes');
		# $col["formatter"] = "image"; // format as image -- if data is image url e.g. http://<domain>/test.jpg
		# $col["formatoptions"] = array("width"=>'20',"height"=>'30'); // image width / height etc
		$cols[] = $col;


		
		
		
		$g = new jqgrid();

		// $grid["url"] = ""; // your paramterized URL -- defaults to REQUEST_URI
		$grid["rowNum"] = 10; // by default 20
		//$grid["sortname"] = 'fac_id'; // by default sort grid by this field
		$grid["sortorder"] = "asc"; // ASC or DESC
		$grid["caption"] = "Subject taken Data"; // caption of grid
		$grid["autowidth"] = true; // expand grid to screen width
		$grid["multiselect"] = true; // allow you to multi-select through checkboxes
// RTL support
// $grid["direction"] = "rtl";

$g->set_options($grid);

$g->set_actions(array(	
						"add"=>true, // allow/disallow add
						"edit"=>true, // allow/disallow edit
						"delete"=>true, // allow/disallow delete
						"rowactions"=>false, // show/hide row wise edit/del/save option
						"autofilter" => true, // show/hide autofilter for search
					) 
				);

// you can provide custom SQL query to display data
$g->select_command = "SELECT e.id,IF(e.course_id='1','BCA',IF(e.course_id='2','BBA',IF(e.course_id='3','B.COM',IF(e.course_id='4','PTC','B.ED')))) as course_id,e.sem_id,if(e.fac_id='6','Dipjaya Patel',if(e.fac_id='9','Chetan Rathod',if(e.fac_id='10','Asma Patel','Sandip Surati'))) as fac_id,e.division,e.exam_id,if(e.sub_id='1','COMMUNICATION SKILLS',if(e.sub_id='2','MATHEMATICS',if(e.sub_id='3','INTRODUCTION TO COMPUTERS',if(e.sub_id='4','COMPUTER PROG. & PROG. METHODOLOGY',if(e.sub_id='5','PC SOFTWARE - 1',if(e.sub_id='6','PRATICAL',if(e.sub_id='7','COMPUTERISED FINANCIAL ACCOUNTING',if(e.sub_id='8','ORGANIZATION STRUCTURE & BEHAVIOUR',if(e.sub_id='9','INTRODUCTION TO OPERATING SYSTEM',if(e.sub_id='10','PROGRAMMING LANGUAGE - 1',if(e.sub_id='11','DATABASE MANAGEMENT SYSTEM',if(e.sub_id='12','PRATICAL',if(e.sub_id='13','NUMERICAL AND STATISTICAL METHODS',if(e.sub_id='14','RELATIONAL DATABASE MANAGEMENT SYSTEMS',if(e.sub_id='15','ADVANCED C PROG. & DATA STRUCTURE',if(e.sub_id='16','OBJECT ORIENTED PROGRAMMING',if(e.sub_id='17','SOFTWARE ENGINEERING',if(e.sub_id='18','PRATICAL',if(e.sub_id='19','INFORMATION SYSTEMS',if(e.sub_id='20','NET PROGRAMMING',if(e.sub_id='21','JAVA PROGRAMMING LANGUAGE',if(e.sub_id='22','WEB DESIGNING',if(e.sub_id='23','COMPUTER NETWORK',if(e.sub_id='24','PRATICAL',if(e.sub_id='25','PHP MYSQL',if(e.sub_id='26','UNIX & SHELL PROGRAMMING',if(e.sub_id='27','INFORMATION SYSTEM APPLICATION DEV.',if(e.sub_id='28','OPERATING SYSTEM - 2',if(e.sub_id='29','ASP.NET',if(e.sub_id='30','PRATICAL',if(e.sub_id='31','COMPUTER GRAPHICS',if(e.sub_id='32','E - COMMERCE & CYBER SECURITY','PROJECT'))))))))))))))))))))))))))))))))
as sub_id,e.start_date,e.end_date,e.declard FROM sub_taken_master as e";

// this db table will be used for add,edit,delete
$g->table = "sub_taken_master";

// pass the cooked columns to grid
$g->set_columns($cols);

// generate grid output, with unique grid name as 'list1'
$out = $g->render("list1");

$themes = array("redmond","smoothness","start","dot-luv","excite-bike","flick","ui-darkness","ui-lightness","cupertino","dark-hive");
$i = rand(0,8);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Subject Manage</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<!--  checkbox styling script -->
<script src="js/jquery/ui.core.js" type="text/javascript"></script>
<script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="js/jquery/jquery.bind.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" media="screen" href="js/themes/<?php echo $themes[$i]?>/jquery-ui.custom.css"></link>	
	<link rel="stylesheet" type="text/css" media="screen" href="js/jqgrid/css/ui.jqgrid.css"></link>	
	
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
	<script src="js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
	<script src="js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
</head>
<body>
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	</div>
<img src="../admin/logo.png" width="" height="135" style="margin-bottom:px;margin-left:px;margin-top:22px;">
<H6 style="margin-top:-250px;margin-left:50px;font-size:15px;color:#666666;display: block;">Managed By SRM INSTITUTE OF SCIENCE & TECHNOLOGY</h6>
<H6 style="margin-top:-18px;margin-left:600px;font-size:15px;color:#666666;" >Deemed University</h6>
<H6 style="margin-top:40px;margin-left:75px;font-size:32px;color:#666666;font-weight:bold" >SRM COLLEGE FOR BCA,BBA,B.COM,B.Ed,PTC </h6>
<br>
	<!-- end logo -->
	
	<!--  start top-search -->
	<div id="top-search">
		
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td><b><font style="font-family: Arial, Helvetica, sans-serif;" color="#F8F8FF">Hello  <b style="color:#FFDEAD;">&nbsp;Adminstrator </b><img src="image/admin1.png" style="margin-top:-50px;" height="60" width="70"></td>
		<td>
		</td>
		</tr>
		</table>
	</div>
 	<!--  end top-search -->
 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<div class="showhide-account"><img src="images/shared/nav/nav_myaccount.gif" width="93" height="14" alt="" /></div>
			<div class="nav-divider">&nbsp;</div>
			<a href="logout.php" id="logout"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="cnpassword.php" id="acc-settings">Change Password</a>
				 
			</div>
			</div>
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->



		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="select" ><li><a href="welcome.php"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="current"><li><a href="coursemanage.php"><b>Master Form</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				
				<li><a href="coursemanage.php">Course</a></li>
				<li ><a href="semestermanage.php">Semester</a></li>
				<li><a href="subjectmanage.php">Subject</a></li>
				<li><a href="studentmanage.php">Student</a></li>
				<li><a href="exammanage.php">Exam</a></li>
				<li><a href="resultmanage.php">Result</a></li>
				<li><a href="attendance.php">Attendance</a></li>
				<li><a href="facultymanage.php">Faculty</a></li>
				
				<li class="sub_show"><a href="subjecttaken.php">Subject Taken</a></li>
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="uploadstudinfo.php"><b>Upload</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="uploadstudinfo.php">Stud Info</a></li>
				<li><a href="uploadtimetable.php">Exam Time Table</a></li>
				<li><a href="uploadresult.php">Exam Result</a></li>
				<li><a href="uploadatt.php">Attendance</a></li>
				<li><a href="uploadblacklist.php">Blacklist </a></li>
				<li><a href="uploadsyllabus.php">Syllabus </a></li>
				<li><a href="uploadgallery.php">Gallery</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="collegemanage.php"><b>Access</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="collegemanage.php">College Info</a></li>
				<li><a href="downloadmanage.php">Download</a></li>
				<li><a href="eventmanage.php">Event</a></li>
				<li><a href="newsmanage.php">News</a></li>
				<li><a href="usermanage.php">Usertype</a></li>
				<li><a href="loginmanage.php">Loginuser</a></li>
			 
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider"></div>
		
		<ul class="select"><li><a href="displayattend.php"><b>Attendance</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				
				<li><a href="displayattend.php">Display Attendance</a></li>
				<li><a href="blacklist.php">Generate Blacklist</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

 <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="toplef"></th>
		<td id="tbl-border-t">&nbsp;</td>
		<th class="toprigh"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-le"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			
				
				
		
		 
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				
				
					<div style="margin-top:-45px;">
					<?php echo $out?>
					</div>
				
				</table>
				<!--  end product-table................................... --> 
				</form>
			</div>
			<!--  end content-table  -->
		
			<!--  start actions-box ............................................... -->
			
			<div class="clear"></div>
		 
		</div>
			<div class="clear">&nbsp;</div>

</div>
</div>

<div style="margin-top:px;" >
	<br>
	<br>
	<?php echo $out?>
	</div>
</body>
</html>
<?php
	}	
	else
	{
		header("location:login.php");
	}

?>