<?php

	session_start();
	$un=$_SESSION['username'];
	if($_SESSION['username']!="")
	{
		$con=mysqli_connect("eu-cdbr-west-03.cleardb.net","bef02abf1996f3","01233466");
		mysqli_select_db($con,"heroku_d61df1c5316c5a5");
		$res=mysqli_query($con,"select * from faculty_master where user_name='$un';");
		$row=mysqli_fetch_array($res);
		$path=$row['path'];
		$fname=$row['fac_name'];
		$facid=$row['fac_id'];
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Display Result</title>
<link rel="stylesheet" href="../admin/css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="../admin/css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="../admin/js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
 

<!-- Custom jquery scripts -->
<script src="../admin/js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	</div>
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
			<a href="../admin/logout.php" id="logout"><img src="../admin/images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
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
		
		<ul class="select"><li><a href="welcome.php"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="profilemanage.php"><b>Profile</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="display.php"><b>Result</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
	
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="current"><li><a href="disattendance.php"><b>Attendance</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show"><div>
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
				<form id="mainform" action="" method="post" onsubmit="return validate(this);">
				<div style="width:550px;
	
	margin: auto auto auto auto;
	margin-top:-20px;
	background: #F5F5F5;
	-moz-border-radius: 8px;                       
	-webkit-border-radius: 8px;
	padding: 55px;
	border: 1px solid #adaa9f;
	-moz-box-shadow: 0 2px 2px #9c9c9c;
	-webkit-box-shadow: 0 2px 2px #9c9c9c;">
				<table style="margin-left: auto;margin-right: auto;font-family: Verdana, Helvetica, sans-serif;font-size:19px;color:">
				<tr style="margin-bottom:15px;">
				<td>
				New Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br><br>
				</td>
				<td>
				<input type="password" name="t1"   maxlength="15" style="font-family: Verdana, Helvetica, sans-serif;font-size:19px;"><br><br><br><br>
				</td>
				</tr>
				<tr>
				<td>
				Confirm Password<br><br><br><br>
				</td><td>
				<input type="password" name="t2" maxlength="15" style="font-family: Verdana, Helvetica, sans-serif;font-size:19px;"><br><br><br><br>
				</td>
				</tr>
				<tr>
				<td>
				<input type="submit"  value="Change" name="l1"   style="width: 150px;
    height: 40px;
    color: #ffffff;
    background: url(images/contact_but.png);
    background-repeat:no-repeat;
    background-position:left bottom;
    border: none;
    font-family: Vardna, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: bold;margin-left:150px;" onclick="chn();"/>
					
				</td>
				</tr>
				</table>
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
<script language="javascript">
function validate(form) {
var e = form.elements;

/* Your validation code. */
if(e['t1'].value != e['t2'].value) {
alert('Your passwords do not match. Please type more carefully.');
return false;
}
return true;
}


</script>
</body>
</html>
<?php
if(isset($_POST['l1']))
{

	$new=$_POST['t1'];
	$conf=$_POST['t2'];
	
	$len=strlen($new);
	if($len<6 && $len<15)
	{
	?>
	<script language="javascript">
	alert('Your passwords Between 6 To 15');
	</script><?php
	}
	else
	{
	$con=mysqli_connect("eu-cdbr-west-03.cleardb.net","bef02abf1996f3","01233466");
	mysqli_select_db($con,"heroku_d61df1c5316c5a5");
	mysqli_query($con,"update login_master set password='$new' where user_name='$un';");
	?>
	<script language="javascript">
	alert('Your password is Successfully changed');
	</script><?php
	}
}	}
	else
	{
		header("location:login.php");
	}

?>