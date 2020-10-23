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
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $fname?> Student's Result's</title>
<link rel="stylesheet" href="../admin/css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="../admin/css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="../admin/js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
 

<!-- Custom jquery scripts -->
<script src="../admin/js/jquery/custom_jquery.js" type="text/javascript"></script>
 
</script>
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
		<div class="select_sub">
			
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="current"><li><a href="display.php"><b>Result</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
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

<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<form  method="post">
  <div style="width:550px;
	margin: auto auto auto auto;
	margin-top:-375px;
	background: #F5F5F5;
	-moz-border-radius: 8px;                       
	-webkit-border-radius: 8px;
	padding:20px;
	border: 1px solid #adaa9f;
	-moz-box-shadow: 0 2px 2px #9c9c9c;
	-webkit-box-shadow: 0 2px 2px #9c9c9c;">
<table style="margin-left: auto;margin-right: auto;font-family: Verdana, Helvetica, sans-serif;font-size:19px;color:">
<tr >
<td>
<br>Select Exam<br><br><br>
</td>
<td>
<br><select name="en" size="1" style="font-family: Verdana, Helvetica, sans-serif;font-size:17px;margin-left:-150px;width:auto;">
<?php
$res=mysqli_query($con,"select * from sub_taken_master where fac_id='$fid' and declard='Yes'");
$cnt=mysqli_num_rows($res);
	while($cnt>0)
	{
		while($row=mysql_fetch_array($res))
		{
			$examid=$row['exam_id'];
			$div=$row['division'];
			$res1=mysqli_query("SELECT * from exam_master where exam_id='$examid'");
			while($row=mysqli_fetch_array($res1))
			{
   				$type=$row['examtype'];
				$du=$row['duration'];
				$asyear  = substr($du,0,4);
				$asmonth = substr($du,5,2);
				$asday  = substr($du,8,2);
				$eid=$row['exam_id'];
				$qry="SELECT course_name FROM course_master where course_id in(select course_id from exam_master where exam_id='$eid');";
				$res2=mysqli_query($con,$qry);
				while($row=mysqli_fetch_array($res2))
				{
					$name=$row['course_name'];
					$qry="SELECT sem_no,year FROM sem_master where sem_id in(select sem_id from exam_master where exam_id='$eid');";
					$res3=mysqli_query($qry);
					while($row=mysqli_fetch_array($res3))
					{
						

						if($asmonth==1)
						{
						$asmonth='JAN';
						}
						if($asmonth==2)
						{
						$asmonth='FEB';
						}
						if($asmonth==3)
						{
						$asmonth='MAR';
						}
						if($asmonth==4)
						{
						$asmonth='APR';
						}
						if($asmonth==5)
						{
						$asmonth='MAY';
						}
						if($asmonth==6)
						{
						$asmonth='JUN';
						}
						if($asmonth==7)
						{
						$asmonth='JUL';
						}
						if($asmonth==8)
						{
						$asmonth='AUG';
						}
						if($asmonth==9)
						{
						$asmonth='SEP';
						}
						if($asmonth==10)
						{
						$asmonth='OCT';
						}
						if($asmonth==11)
						{
						$asmonth='NOV';
						}
						if($asmonth==12)
						{
						$asmonth='DEC';
						}
						$semno=$row['sem_no'];
						if($semno==0)
						{
						$sem=$row['year'];
						}
						else
						{
						$sem="Sem"."-".$semno;
						}
						$s=$asmonth."-".$asyear;
						$exam=$name." ".$sem." ".$type."(".$s.")"."-".$div;
						?>
						<option value="<?php echo $eid.$div?>">
						<?php
						echo $exam;
						?>
						</option>
						<?php
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
<input type="submit"  value="Search" name="l1"   style="width:150px;
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
<?php
if(isset($_POST['l1']))
{
	$str=$_POST['en'];
	$len=strlen($str);
	static $id;
	for($i=0;$i<=$len;$i++)
	{
		$temp=substr("$str",$i,1);
		if($temp=="A" || $temp=="B" || $temp=="C" || $temp=="D")
		{
			$d=$temp;
		}
		else
		{
			$id.=$temp;
		}
		
	}
	$qry="SELECT sub_name,sub_id,total_marks FROM sub_master where sub_id in(SELECT sub_id FROM sub_taken_master where exam_id='$id' and fac_id='$fid' and division='$d')";
	$res=mysqli_query($con,"$qry");
	while($row=mysqli_fetch_array($res))
	{
		
		
		?>
		<br><br>
 <style type="text/css">    
#ma
{
	width: 1000px;
	margin-left:auto;
	margin-right:auto;
	//margin: 160px auto 0 auto;
	background: white;
	-moz-border-radius: 8px;                       
	-webkit-border-radius: 8px;
	padding: 30px;
	border: 1px solid #adaa9f;
	-moz-box-shadow: 0 2px 2px #9c9c9c;
	-webkit-box-shadow: 0 2px 2px #9c9c9c;
}

/*Features table------------------------------------------------------------*/
.features-table
{
  width: 60%;
  //margin-left:-13px;
margin-left:auto;
	margin-right:auto;
  margin:auto auto auto auto ;
  border-collapse: separate;
  border-spacing: 0;
  text-shadow: 0 1px 0 #fff;
  color: #2a2a2a;
  background: #fafafa;  
  background-image: -moz-linear-gradient(top, #fff, #eaeaea, #fff); /* Firefox 3.6 */
  background-image: -webkit-gradient(linear,center bottom,center top,from(#fff),color-stop(0.5, #eaeaea),to(#fff)); 
}
.features-table td
{
  height: 37px;
  line-height: 50px;
  padding: 0 20px;
  border-bottom: 1px solid #cdcdcd;
  box-shadow: 0 1px 0 white;
  -moz-box-shadow: 0 1px 0 white;
  -webkit-box-shadow: 0 1px 0 white;
  white-space: nowrap;
  text-align: center;
}

/*Body*/
.features-table tbody td 
{
  text-align: center;
  font: normal 12px Verdana, Arial, Helvetica;
  width: 150px;
}






.features-table td:nth-child(1),.features-table td:nth-child(6),.features-table td:nth-child(2),.features-table td:nth-child(3),.features-table td:nth-child(4),.features-table td:nth-child(5)
{
  background: #e7f3d4;  
  background: rgba(184,243,85,0.3);
}

/*Header*/
.features-table thead td
{
  font: bold 1.1em 'trebuchet MS', 'Lucida Sans', Arial;  
  -moz-border-radius-topright: 10px;
  -moz-border-radius-topleft: 10px; 
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  border-top: 1px solid #eaeaea; 
}
.features-table thead th
{
  font: bold 0.5em 'trebuchet MS', 'Lucida Sans', Arial;  
  -moz-border-radius-topright: 10px;
  -moz-border-radius-topleft: 10px; 
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  border-top: 1px solid #eaeaea; 
}

.features-table thead td:first-child
{
  border-top: none;
}
</style> 
 <div id="ma">

<table class="features-table" style="margin-left:px;">
				<thead>
					<tr>
						<td>Stud Id</td>
						<td>Name</td>
						<td>Total Marks</td>
						<td><?php echo $row['sub_name']?></td>
						<td>Division</td>
					</tr>
				</thead>






		
<?php
		
		$subid=$row['sub_id'];
		$m=$row['total_marks'];
		$qry="SELECT * FROM result_master where exam_id='$id' and sub_id='$subid' and division='$d'";
		$res1=mysqli_query($con,"$qry");
		echo "<tbody>";
		static $a,$p,$f;
		while($row=mysqli_fetch_array($res1))
		{
			
   	        echo "<tr>";
			$id=$row['stud_id'];
			echo "<td>".$id."</td>";
			$a+=1;
			$qry1="select fname,mname,lname from stud_master where stud_id='$id'";
			$res=mysqli_query($con,$qry1) or die();
			while($row2=mysqli_fetch_array($res))
			{
				$fn=$row2['fname'];
				$mn=$row2['mname'];
				$ln=$row2['lname'];
				$fullname=$fn." ".$mn." ".$ln;
			}
			echo "<td>".$fullname."</td>";
			echo "<td>".$m."</td>";
			if($row['marks']>=18)
			{
				$p+=1;
			}
			else
			{
				$f+=1;
			}
			echo "<td>".$row['marks']."</td>";
			echo "<td>".$d."</td>";
			echo "</tr>";
			
		}
		echo "</tbody>";
		echo "</table>";
			?>
		<br><br>
		<table class="features-table" style="margin-left:px;">
				<thead>
					<tr>
						<td>Division</td>
						<td>Appeared</td>
						<td>Passed</td>
						<td>Failed</td>
						<td>Success Rate(%)</td>
					</tr>
				</thead>
			
		<?php
		echo "<tbody>";
		echo "<tr>";
		echo "<td>".$d."</td>";
		echo "<td>".$a."</td>";
		echo "<td>".$p."</td>";
		if($f==0 && $a!=0)
		{
		echo "<td>0</td>";
		}
		else
		{
			echo "<td>".$f."</td>";
		}
		if($a!=0)
		{
		$rate=$p/$a*100;
		echo "<td>".$rate."%"."</td>";
		}
		else
		{
			echo "<td>"."-"."</td>";
		}
	}
	
}
}
else
{
		header("location:../admin/login.php");
}
?>
</div>

  </form>
  </body>
  </html>