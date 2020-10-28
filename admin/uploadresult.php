<?php
	session_start();
	if($_SESSION['username']!="")
	{?>
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
<script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
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
		<td><b><font style="font-family: Arial, Helvetica, sans-serif;" color="#F8F8FF">Hello  <b style="color:#FFDEAD;">&nbsp;Adminstrator </b><img src="image/Admin1.png" style="margin-top:-50px;" height="60" width="70"></td>
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
		                    
		<ul class="select"><li><a href="coursemanage.php"><b>Master Form</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				
				<li><a href="coursemanage.php">Course</a></li>
				<li ><a href="semestermanage.php">Semester</a></li>
				<li><a href="subjectmanage.php">Subject</a></li>
				<li><a href="studentmanage.php">Student</a></li>
				<li><a href="exammanage.php">Exam</a></li>
				<li><a href="resultmanage.php">Result</a></li>
				<li><a href="attendance.php">Attendance</a></li>
				<li><a href="facultymanage.php">Faculty</a></li>
				
				<li><a href="subjecttaken.php">Subject Taken</a></li>
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="current"><li><a href="uploadstudinfo.php"><b>Upload</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="uploadstudinfo.php">Stud Info</a></li>
				<li><a href="uploadtimetable.php">Exam Time Table</a></li>
				<li class="sub_show"><a href="uploadresult.php">Exam Result</a></li>
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

<div style="width:550px;
	margin: auto auto auto auto;
	margin-top:20px;
	background: #F5f5f5;
	-moz-border-radius: 8px;                       
	-webkit-border-radius: 8px;
	padding: 55px;
	border: 1px solid #adaa9f;
	-moz-box-shadow: 0 2px 2px #9c9c9c;
	-webkit-box-shadow: 0 2px 2px #9c9c9c;">
<form enctype="multipart/form-data" action="" method="post">
<table style="margin-left: auto;margin-right: auto;font-family: Verdana, Helvetica, sans-serif;font-size:19px;color:">
<td>
Exam<br><br><br>
</td>
<td>
<select name="en" size="1" style="font-family: Verdana, Helvetica, sans-serif;font-size:17px;margin-left:-150px;">			
<?php
$con=mysqli_connect("eu-cdbr-west-03.cleardb.net","bef02abf1996f3","01233466");
		mysqli_select_db($con,"heroku_d61df1c5316c5a5");
$res=mysqli_query($con,"SELECT declard,examtype,duration,exam_id from exam_master where declard='No';");
$cnt=mysqli_num_rows($res);
while($cnt>0)
{
	while($row=mysqli_fetch_array($res))
	{
   		$type=$row['examtype'];
		$du=$row['duration'];
		$asyear  = substr($du,0,4);
		$asmonth = substr($du,5,2);
		$asday  = substr($du,8,2);
		$eid=$row['exam_id'];
		$qry="SELECT course_name FROM course_master where course_id in(select course_id from exam_master where exam_id=$eid);";
		$res1=mysqli_query($con,$qry);
		while($row=mysqli_fetch_array($res1))
		{
			$name=$row['course_name'];
			$qry="SELECT sem_no,year FROM sem_master where sem_id in(select sem_id from exam_master where exam_id=$eid);";
			$res2=mysqli_query($con,$qry);
			while($row=mysqli_fetch_array($res2))
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
				$exam=$name." ".$sem." ".$type."(".$s.")";
							?>
				<option value="<?php echo $eid ?>">
				<?php
				echo $exam;
				?>
				</option>
				<?php
	
	
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
<div  style="margin-left:-35px;">
<img src="images/xml.png"  width="120" height="110"><br>
</td>
<td>
<div  style="margin-left:-180px;">
<input  type="file" class="file_1" name="file" style="margin-left:150px;"/><br>
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
</form>
<?php 
if(isset($_POST['l1']))
{
	if($_FILES['file']['type']=="text/xml")
	{
	static $st=0;
	$con=mysqli_connect("eu-cdbr-west-03.cleardb.net","bef02abf1996f3","01233466");
	$eid=$_POST['en'];
	if($con)
	{
		mysqli_select_db($con,"heroku_d61df1c5316c5a5");
	}
	else
	{
		echo "Connection is not Est"."<br>";
	}
	if ($_FILES['file']['tmp_name'])
	{
		$qry1="select sub_id from sub_master where sem_id in(select sem_id from exam_master where exam_id=$eid);";
		$res1=mysqli_query($con,$qry1);
 		$dom = DOMDocument::load( $_FILES['file']['tmp_name'] );
 		$rows = $dom->getElementsByTagName( 'Row' );
 		$cnt=mysqli_num_rows($res1);
		if($cnt==1)
		{
			while($row=mysqli_fetch_array($res1))
 			{ 
	 		if($cnt==1)
 			{
		 		$s1=$row['sub_id'];
			}
			$cnt--;
			}
			
		}
		if($cnt==2)
		{
			while($row=mysqli_fetch_array($res1))
 			{ 
	 		if($cnt==1)
 			{
		 		$s2=$row['sub_id'];
			}
			if($cnt==2)
 			{
		 		$s1=$row['sub_id'];
			}
			$cnt--;
			}
			
		}
		if($cnt==3)
		{
			while($row=mysqli_fetch_array($res1))
 			{ 
	 		if($cnt==1)
 			{
		 		$s3=$row['sub_id'];
			}
			if($cnt==2)
			{
				$s2=$row['sub_id'];
        		}
        		if($cnt==3)
			{
				$s1=$row['sub_id'];
        		}
			$cnt--;
			}
			
		}
		if($cnt==4)
		{
			while($row=mysqli_fetch_array($res1))
 			{ 
	 		if($cnt==1)
 			{
		 		$s4=$row['sub_id'];
			}
			if($cnt==2)
			{
				$s3=$row['sub_id'];
        		}
        		if($cnt==3)
			{
				$s2=$row['sub_id'];
        		}
			if($cnt==4)
			{
				$s1=$row['sub_id'];
        		}
			$cnt--;
			}
			
		}
		if($cnt==5)
		{
			while($row=mysqli_fetch_array($res1))
 			{ 
	 		if($cnt==1)
 			{
		 		$s5=$row['sub_id'];
			}
			if($cnt==2)
			{
				$s4=$row['sub_id'];
        		}
        		if($cnt==3)
			{
				$s3=$row['sub_id'];
        		}
			if($cnt==4)
			{
				$s2=$row['sub_id'];
        		}
			if($cnt==5)
			{
				$s1=$row['sub_id'];
        		}
			$cnt--;
			}
			
		}
		
  		if($cnt==6)
		{
 		while($row=mysqli_fetch_array($res1))
 		{ 
	 		if($cnt==1)
 			{
		 		$s6=$row['sub_id'];
			}
			if($cnt==2)
			{
				$s5=$row['sub_id'];
        		}
        		if($cnt==3)
			{
				$s4=$row['sub_id'];
        		}
			if($cnt==4)
			{
				$s3=$row['sub_id'];
       			}
			if($cnt==5)
			{
				$s2=$row['sub_id'];
        		}
			if($cnt==6)
			{
				$s1=$row['sub_id'];
 			}
			$cnt--;
		}
		}
 	$first_row = true;
 	foreach ($rows as $row)
 	{	
		$le=count($rows);
   		if (!$first_row)
   		{
     			$stud_id="";
			$id="";
			$sid="";
    			$marks1 = "";
			$marks2 = "";
 			$marks3 = "";
       			$marks4 = "";
  			$marks5 = "";
  			$marks6 = "";
			$div="";
    			$index = 1;
     			$cells = $row->getElementsByTagName( 'Cell' );
     			
     			foreach( $cells as $cell)
    			{
      				$ind = $cell->getAttribute( 'Index' );
       				if ( $ind != null ) $index = $ind;
    				if ( $index == 1 ) $stud_id = $cell->nodeValue;
       				if ( $index == 2 ) $marks1 = $cell->nodeValue;
       				if ( $index == 3 ) $marks2  = $cell->nodeValue;
				if ( $index == 4 ) $marks3  = $cell->nodeValue;
				if ( $index == 5 ) $marks4  = $cell->nodeValue;
				if ( $index == 6 ) $marks5  = $cell->nodeValue;
				if ( $index == 7 ) $marks6  = $cell->nodeValue;
				if ( $index == 8 ) $div  = $cell->nodeValue;
				$index += 1;
    			}
		
		$cnt=mysqli_num_rows($res1);
		if($cnt==4)
		{
		$cnt=1;
    		while($cnt<=4)
   		{
    			if($cnt==1)
   	 		{
    			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s1,$marks1,'$div');";
			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
    			if($cnt==2)
    			{
    			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s2,$marks2,'$div');";
    			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
    			if($cnt==3)
    			{
   			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s3,$marks3,'$div');";
    			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
			if($cnt==4)
    			{
   			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s4,$marks4,'$div');";
    			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
   			$cnt++;
    		}
		$cnt=0;
		}	
		if($cnt==5)
		{
		$cnt=1;
    		while($cnt<=5)
   		{
    			if($cnt==1)
   	 		{
    			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s1,$marks1,'$div');";
    			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
    			if($cnt==2)
    			{
    			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s2,$marks2,'$div');";
    			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
    			if($cnt==3)
    			{
   			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s3,$marks3,'$div');";
    			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
			if($cnt==4)
    			{
   			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s4,$marks4,'$div');";
    			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
			if($cnt==5)
    			{
   			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s5,$marks5,'$div');";
    			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
   			$cnt++;
    		}
		$cnt=0;
		}	
		if($cnt==6)
		{
		$cnt=1;
    		while($cnt<=6)
   		{
    			if($cnt==1)
   	 		{
    			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s1,$marks1,'$div');";
    			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
    			if($cnt==2)
    			{
    			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s2,$marks2,'$div');";
    			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
    			if($cnt==3)
    			{
   			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s3,$marks3,'$div');";
    			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
    			if($cnt==4)
    			{
    			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s4,$marks4,'$div');";
    			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
    			if($cnt==5)
    			{
    			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s5,$marks5,'$div');";
   			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
    			if($cnt==6)
    			{
    			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s6,$marks6,'$div');";
    			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
   			$cnt++;
    		}
		$cnt=0;
		}
		if($cnt==3)
		{
		$cnt=1;
    		while($cnt<=3)
   		{
    			if($cnt==1)
   	 		{
    			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s1,$marks1,'$div');";
    			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
    			if($cnt==2)
    			{
    			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s2,$marks2,'$div');";
    			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
    			if($cnt==3)
    			{
   			$qry="insert into result_master(exam_id,stud_id,sub_id,marks,division) values($eid,$stud_id,$s3,$marks3,'$div');";
    			if(mysqli_query($con,$qry) or die())
			$st+=1;
    			}
   			$cnt++;
    		}
		}
		$cnt=0;	
 		}

$first_row = false;
 	}
}
if($st>0)
{
	?>
	<script language="javascript">
	confirm("Your Excel File Successfully Insert into table");
	</script>
	<?php
	$qry="update exam_master set declard='Yes' where exam_id=$eid;";
	mysqli_query($con,$qry);
	$qry="select * from exam_master where exam_id=$eid;";
	$res=mysqli_query($con,$qry);
	$row=mysqli_fetch_array($res);
	$date=$row['duration'];
	$semid=$row['sem_id'];
	$cid=$row['course_id'];
	$year  = substr($date,0,4);
	$month = substr($date,5,2);
	$day  = substr($date,8,2);
	$qry1="select * from sub_taken_master where course_id=$cid and sem_id=$semid;";
	$res1=mysqli_query($con,$qry1);
	while($row=mysqli_fetch_array($res1))
	{
		$sdate=$row['start_date'];
		$edate=$row['end_date'];
		$fid=$row['fac_id'];
		$syear  = substr($sdate,0,4);
		$smonth = substr($sdate,5,2);
		$sday  = substr($sdate,8,2);
		$eyear  = substr($edate,0,4);
		$emonth = substr($edate,5,2);
		$eday  = substr($edate,8,2);
		if($syear==$eyear)
		{
			if($syear>=$year && $eyear >= $year)
			{
				if($smonth<=$month && $emonth>=$month)
				{
					
					$qry="update sub_taken_master set declard='Yes',exam_id=$eid where fac_id=$fid and course_id=$cid and sem_id=$semid and start_date='$sdate' and end_date='$edate';";
					mysqli_query($con,$qry);
				}
			}	
		}
		else
		{
			if($syear<$year && $eyear >= $year)
			{
				if($smonth>=$month && $emonth>=$month)
				{
					
					$qry="update sub_taken_master set declard='Yes',exam_id=$eid where fac_id=$fid and course_id=$cid and sem_id=$semid and start_date='$sdate' and end_date='$edate';";
					mysqli_query($con,$qry);
				}
			}	
		}
		
	}
	
	
}
if($st==0)
{
	?>
	<script language="javascript">
	var name="Some Error to Insert Excel File into table";
	alert(name);
	</script>
	<?php
}
}
}
}
else
{
	
		header("location:login.php");
	
}
?>