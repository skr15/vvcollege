<?php
	session_start();
	if($_SESSION['username']!="")
	{
		$un=$_SESSION['username'];
		$con=mysql_connect("localhost","root","");
		mysql_select_db("vvkcollege",$con);
		$res=mysql_query("select * from faculty_master where user_name='$un';");
		$row=mysql_fetch_array($res);
		$path=$row['path'];
		$fname=$row['fac_name'];
		$fid=$row['fac_id'];
		
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>upload Assignments</title>
<link rel="stylesheet" href="../admin/css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="../admin/css/pro_dropline_ie.css" />
<![endif]-->
<script src="../admin/js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
<!-- Custom jquery scripts -->
<script src="../admin/js/jquery/custom_jquery.js" type="text/javascript"></script>
 
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
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="cnpassword.php" id="acc-settings">Change Password</a>
			<div class="clear">&nbsp;</div>
			<a href="uploadassignment.php" id="acc-details">Upload Assignment</a>
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
		
		<ul class="current"><li><a href="uploadassignment.php"><b>Upload Assignment</b><!--[if IE 7]><!--></a><!--<![endif]-->
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
	background: #FFFACD;
	-moz-border-radius: 8px;                       
	-webkit-border-radius: 8px;
	padding: 55px;
	border: 1px solid #adaa9f;
	-moz-box-shadow: 0 2px 2px #9c9c9c;
	-webkit-box-shadow: 0 2px 2px #9c9c9c;">
<table style="margin-left: auto;margin-right: auto;font-family: Verdana, Helvetica, sans-serif;font-size:19px;color:">
<tr >
<td>
Subject<br><br><br>
</td>
<td>
<select name="en" size="1" style="font-family: Verdana, Helvetica, sans-serif;font-size:17px;margin-left:-150px;">		
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("vvkcollege",$con);
$res=mysql_query("select start_date,end_date,sub_id,course_id from sub_taken_master where fac_id=$fid;");
$cnt=mysql_num_rows($res);
while($cnt>0)
{
	while($row=mysql_fetch_array($res))
	{
		$sdate=$row['start_date'];
		$edate=$row['end_date'];
		$subid=$row['sub_id'];
		$syear  = substr($sdate,0,4);
		$smonth = substr($sdate,5,2);
		$sday  = substr($sdate,8,2);
		$eyear  = substr($edate,0,4);
		$emonth = substr($edate,5,2);
		$eday  = substr($edate,8,2);
		$tyear  = date('Y');
		$cid=$row['course_id'];
		$tmonth = date('m');
		$tday  = date('d');
		if($syear==$eyear)
		{
				
				if($tyear==$syear)
				{
					if($smonth<=$tmonth && $emonth>=$tmonth)
					{
						if($eday>=$tday)
						{
						$qry1="SELECT sub_name FROM sub_master where sub_id=$subid;";
						$res2=mysql_query($qry1);
						while($row2=mysql_fetch_array($res2))
						{
						$sub=$row2['sub_name'];?>
						<option value="<?php echo $sub."=".$cid?>">
						<?php  echo $sub?>
						</option><?php
						}
						}
							
					}
					
						
					
			      }
				
		}
		else			
		{
				if($syear==$tyear)
				{
					if($smonth<=$tmonth)
					{
						if($eday>=$tday)
						{
						$qry1="SELECT sub_name FROM sub_master where sub_id=$subid;";
						$res2=mysql_query($qry1);
						while($row2=mysql_fetch_array($res2))
						{
						$sub=$row2['sub_name'];?>
						<option value="<?php echo $sub."=".$cid?>">
						<?php  echo $sub?>
						</option><?php
						}
						}
					}
				}
				else
				{
					if($smonth>=$tmonth)
					{
						if($eday>=$tday)
						{
						$qry1="SELECT sub_name FROM sub_master where sub_id=$subid;";
						$res2=mysql_query($qry1);
						while($row2=mysql_fetch_array($res2))
						{
						$sub=$row2['sub_name'];?>
						<option value="<?php echo $sub."=".$cid?>">
						<?php  echo $sub?>
						</option><?php
						}
						}
					}
				}	
				
		}
			
				
					
	}
$cnt--;
}

?>
</select><br><br><br>
</td>
</tr>
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
$pa="";
$newname=$_POST['en'];
if($_FILES['file']['type']=="application/octet-stream")
{
	$str1=$newname;
	$len=strlen($str1);
	for($i=0;$i<=$len;$i++)
	{
		$temp=substr("$str1",$i,1);
		if($temp=="=")
		{
			$po=strpos("$str1","$temp");
			$d=$temp;
		}
		else
		{
			
		}
	}
	$exam=substr("$str1",0,$po);
	$couid=substr("$str1",$po+1);
	$tmp=$_FILES['file']['tmp_name'];
	move_uploaded_file($tmp,"../../www.vivekanandcollege.ac.in/upload/assignment/".$exam);
	$mypath="www.vivekanandcollege.ac.in/upload/assignment/".$exam;
	$qry="insert into download_master(course_id,down_title,path,down_type) values($couid,'$exam','$mypath','assignment');";
	mysql_query($qry);
	$qry="select down_id from download_master ORDER by down_id desc;";
	$res1=mysql_query($qry);
	$row=mysql_fetch_array($res1);
	$downid=$row['down_id'];
	$newsname=$exam." Assignment is declared";
	$y=date('Y');
	$m=date('m');
	$d=date('d');
	$sdate=$y."-".$m."-".$d;
	if($d<14)
	{
		$d+=15;
	}
	$edate=$y."-".$m."-".$d;
	$qry="insert into news_master(news_name,start_date,end_date,dis,down_id) values('$newsname','$sdate','$edate','$newsname',$downid);";
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