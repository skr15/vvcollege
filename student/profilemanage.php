<?php
	session_start();
	if($_SESSION['username']!="")
	{
		$un=$_SESSION['username'];
		// $con=mysql_connect("localhost","root","");
		$con=mysqli_connect("eu-cdbr-west-03.cleardb.net","bef02abf1996f3","01233466");
		mysqli_select_db($con,"heroku_d61df1c5316c5a5");
		$res=mysqli_query($con,"select * from stud_master where user_name='$un';");
		$row=mysqli_fetch_array($res);
		$path=$row['path'];
		$fname=$row['fname'];
		$stud_id=$row['stud_id'];
		error_reporting(E_ALL & ~E_NOTICE);
		mysqli_select_db($con,"heroku_d61df1c5316c5a5");
		mysqli_query($con,"SET NAMES 'utf8'");
		include("../admin/inc/jqgrid_dist.php");
		
		$col = array();
		$col["title"] = "Id"; // caption of column
		$col["name"] = "stud_id"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias) 
		$col["width"] = "13";
		# $col["hidden"] = true; // hide column by default
		$col["search"] = true;
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
		$col["title"] = "First Name"; // caption of column
		$col["name"] = "fname"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias) 
		$col["width"] = "35";
		# $col["hidden"] = true; // hide column by default
		$col["editable"] = true; // this column is editable
		$col["editrules"] = array("required"=>true,"facname"=>true);
		$col["editoptions"] = array("size"=>20);
		$col["search"] = true;
		$cols[] = $col;	
	
		
		$col = array();
		$col["title"] = "Email Id";
		$col["name"] = "email_id";
		$col["width"] = "35";
		$col["search"] = false;
		$col["editable"] = true; // this column is not editable
		$col["editoptions"] = array("size"=>20);
		$col["editrules"] = array("email"=>true,"required"=>true);
		$cols[] = $col;

		
		$col = array();
		$col["title"] = "Image";
		$col["name"] = "path";
		$col["editable"] = false;
		$col["width"] = "50";
		$col["search"] = false;
		$col["formatter"] = "image";
		 // format as image -- if data is image url e.g. http://<domain>/test.jpg
		$col["formatoptions"] = array("width"=>'134',"height"=>'120');
		$cols[] = $col;
	

		$col = array();
		$col["title"] = "Cona No";
		$col["name"] = "contact_no";
		$col["width"] = "27";
		$col["editable"] = true;
		$col["editrules"] = array("mno"=>true,"required"=>true);
		$col["search"] = false;
		$cols[] = $col;

		$col = array();
		$col["title"] = "DOB";
		// fieldname is not with tablealias in sql, so we used plain fieldname
		$col["name"] = "DOB"; 
		$col["width"] = "25";
		$col["search"] = false;
		$col["editrules"] = array("sdate"=>true,"required"=>true);
		$col["editable"] = true; // this column is editable
		$col["formatter"] = "date";
		$cols[] = $col;
		
		$col = array();
		$col["title"] = "Gender";
		// fieldname is not with tablealias in sql, so we used plain fieldname
		$col["name"] = "gender"; 
		$col["width"] = "20";
		$col["editable"] = true; // this column is editable
		// with these values "checked_value:unchecked_value"
		$col["edittype"] = "select"; // render as select
		$col["editoptions"] = array("value"=>'1:male;0:Female');
		$cols[] = $col;



		$col = array();
		$col["title"] = "Add1";
		// fieldname is not with tablealias in sql, so we used plain fieldname
		$col["name"] = "add1"; 
		$col["width"] = "40";
		$col["search"] = false;
		$col["edittype"] = "textarea"; // render as textarea on edit
		$col["editoptions"] = array("rows"=>2, "cols"=>20);
		$col["editrules"] = array("required"=>true,"add"=>true);
		$col["editable"] = true; // this column is editable
		$cols[] = $col;

		$col = array();
		$col["title"] = "Add2";
		// fieldname is not with tablealias in sql, so we used plain fieldname
		$col["name"] = "add2"; 
		$col["width"] = "40";
		$col["edittype"] = "textarea"; // render as textarea on edit
		$col["editoptions"] = array("rows"=>2, "cols"=>20);
		$col["editrules"] = array("required"=>true,"add2"=>true);
		$col["editable"] = true; // this column is editable
		$cols[] = $col;

		$g = new jqgrid();

		// $grid["url"] = ""; // your paramterized URL -- defaults to REQUEST_URI
		$grid["rowNum"] = 10; // by default 20
		$grid["sortname"] = 'stud_id'; // by default sort grid by this field
		$grid["sortorder"] = "asc"; // ASC or DESC
		$grid["caption"] = "Student  Data"; // caption of grid
		$grid["autowidth"] = true; // expand grid to screen width
		$grid["multiselect"] = true; // allow you to multi-select through checkboxes
		$grid["export"] = array("filename"=>"my-file", "sheetname"=>"test");
// RTL support
// $grid["direction"] = "rtl";

$g->set_options($grid);

$g->set_actions(array(	
						"add"=>false, // allow/disallow add
						"edit"=>true, // allow/disallow edit
						"delete"=>false, // allow/disallow delete
						"rowactions"=>false, // show/hide row wise edit/del/save option
						"autofilter" => true,
						"export"=>true, // show/hide autofilter for search
						
					) 
				);

// you can provide custom SQL query to display data
$g->select_command = "SELECT f.user_name,f.password,f.fac_id,IF(f.course_id='1','BCA',IF(f.course_id='2','BBA',IF(f.course_id='3','B.COM',IF(f.course_id='4','PTC','B.ED')))) as course_id,f.fac_name,f.qulifiaction,f.desigation,f.email_id,f.path,f.contact_no,f.DOB,f.salary,f.add1,f.add2,f.exp,IF(f.gender='1','Male','Female') as gender FROM faculty_master f where fac_id=$fid";




// this db table will be used for add,edit,delete
$g->table = "stud_master";

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
<title><?php echo $fname ?> Profile</title>
<link rel="stylesheet" href="../admin/css/screen.css" type="text/css" media="screen" title="default" />
<link rel="stylesheet" media="all" type="text/css" href="../admin/css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="../admin/js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="../admin/js/jquery/custom_jquery.js" type="text/javascript"></script>

<!--  checkbox styling script -->
<script src="../admin/js/jquery/ui.core.js" type="text/javascript"></script>
<script src="../admin/js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="../admin/js/jquery/jquery.bind.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" media="screen" href="../admin/js/themes/<?php echo $themes[$i]?>/jquery-ui.custom.css"></link>	
	<link rel="stylesheet" type="text/css" media="screen" href="../admin/js/jqgrid/css/ui.jqgrid.css"></link>	
	
	<script src="../admin/js/jquery.min.js" type="text/javascript"></script>
	<script src="../admin/js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
	<script src="../admin/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
	<script src="../admin/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
</head>
<body>
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	</div>
<div>
<img src="../admin/logo.png" width="" height="135" style="margin-bottom:px;margin-left:px;margin-top:22px;">
<H6 style="margin-top:-138px;margin-left:190px;font-size:15px;color:#F8F8FF;display: block;">Managed By Abhinav Education Trust, Jahangirpura</h6>
<H6 style="margin-top:-15px;margin-left:750px;font-size:15px;color:#F8F8FF;" >Affiliated To Veer Narmad South Gujarat University</h6>
<H6 style="margin-top:30px;margin-left:175px;font-size:34px;color:#F8F8FF;">VIVEKANAND COLLEGE FOR BCA,BBA,B.COM,B.Ed,PTC </b></h6>
	<!-- end logo -->
	
	<!--  start top-search -->
	<div id="top-search">
		
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td><b><font style="font-family: Arial, Helvetica, sans-serif;" color="#F8F8FF">Hello  <b style="color:#FFDEAD;margin-right:5px;">&nbsp;<?php echo $fname;?></b><img src=" <?php echo "../admin/"."$path" ?>" style="margin-top:-80px;" height="75" width="75"></td>
		<td>
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
			<div class="showhide-account"><img src="../admin/images/shared/nav/nav_myaccount.gif" width="93" height="14" alt="" /></div>
			<div class="nav-divider">&nbsp;</div>
			<a href="logout.php" id="logout"><img src="../admin/images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="cnpassword.php" id="acc-settings">Change Password</a>  
			<div class="clear">&nbsp;</div>
			</div>
			</div>
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="select"><li><a href="welcome.php"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="current"><li><a href="profilemanage.php"><b>Profile</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="display.php"><b>Result</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		
		
		<div class="nav-divider"></div>
		
		<ul class="select"><li><a href="disattendance.php"><b>Attendance</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		<div class="nav-divider">&nbsp;</div>
		<ul class="select"><li><a href="uploadimage.php"><b>Upload Image</b><!--[if IE 7]><!--></a><!--<![endif]-->
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
		<th rowspan="3" class="sized"><img src="../admin/images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="toplef"></th>
		<td id="tbl-border-t">&nbsp;</td>
		<th class="toprigh"></th>
		<th rowspan="3" class="sized"><img src="../admin/images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
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
		header("location:../student/login.php");
	}

?>