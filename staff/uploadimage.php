<?php
	session_start();
	if($_SESSION['username']!="")
	{
		$un=$_SESSION['username'];
		// $con=mysql_connect("localhost","root","");
		$con=mysqli_connect("eu-cdbr-west-03.cleardb.net","bef02abf1996f3","01233466");
		mysqli_select_db($con,"heroku_d61df1c5316c5a5");
		$res=mysqli_query($con,"select * from faculty_master where user_name='$un';");
		$row=mysqli_fetch_array($res);
		$path=$row['path'];
		$fname=$row['fac_name'];
		$fid=$row['fac_id'];
		
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Upload Image</title>
<link rel="stylesheet" href="../admin/css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="../admin/css/pro_dropline_ie.css" />
<![endif]-->
<script src="../admin/js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
 
<!--  checkbox styling script -->
<!--  styled file upload script --> 
<script src="../admin/js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
$(function() {
	$("input.file_1").filestyle({ 
	image: "images/forms/upload_file.gif",
	imageheight : 29,
	imagewidth : 78,
	width : 300
	});
});
</script>

</head>
<body> 
<form method="POST" enctype="multipart/form-data">
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
		
			<div class="account-content">
			<div class="account-drop-inner">

						<a href="cnpassword.php" id="acc-settings">Change Password</a> 
						<div class="clear">&nbsp;</div>
						<a href="uploadassignment.php" id="acc-details">Upload Assignment</a>
						<div class="clear">&nbsp;</div>
			</div>
			</div>
		
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
		
		<ul class="select"><li><a href="disattendance.php"><b>Attendance</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="current"><li><a href="uploadimage.php"><b>Upload Image</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		
		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

<div class="clear"></div>
<div style="width:550px;
	margin: auto auto auto auto;
	margin-top:20px;
	background: #F5F5F5;
	-moz-border-radius: 8px;                       
	-webkit-border-radius: 8px;
	padding: 55px;
	border: 1px solid #adaa9f;
	-moz-box-shadow: 0 2px 2px #9c9c9c;
	-webkit-box-shadow: 0 2px 2px #9c9c9c;">
<table style="margin-left: auto;margin-right: auto;font-family: Verdana, Helvetica, sans-serif;font-size:19px;color:">
<tr>
<td>
<div  style="margin-left:-15px;">
<img src="../admin/images/zip.png"  width="120" height="110"><br>
</td>
<td>
<div  style="margin-left:-150px;">
<input  type="file" class="file_1" name="file" style="margin-left:150px;"/><br>
</td>
</tr>
<tr>
<td>
<input type="submit"  value="Upload" name="l1"   style="width:150px;
    height: 40px;
    color: #ffffff;
    background: url(images/contact_but.png);
    background-repeat:no-repeat;
    background-position:left bottom;
    border: none;
    font-family: Vardna, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: bold;margin-left:160px;"/>
</td>
</tr>
</table>
</div>
</form>
<?php
if(isset($_POST['l1']))
{
if($_FILES['file']['type']=="image/jpeg" || $_FILES['file']['type']=="image/gif")
{
	
	$tmp=$_FILES['file']['tmp_name'];
	$name=$_FILES['file']['name'];
	move_uploaded_file($tmp,"../../www.vivekanandcollege.ac.in/admin/image/".$name);
	$mypath="../admin/image/".$name;
	$qry="update faculty_master set path='$mypath' where fac_id=$fid;";
	mysql_query($qry);
	?>
	<script language="javascript">
	alert(" File  is successfullay upload to Server ");
	</script>
	<?php
}
else
{
?>
	<script language="javascript">
	alert("You can upload only WinRAR File or ZIP file file");
	</script>
	<?php
}
}
}
else
{
	
		header("location:../admin/login.php");
	
}
?>