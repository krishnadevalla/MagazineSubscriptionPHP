<!DOCTYPE html>
<html>
<head>
    <title>Staff Dashbord</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/freelancer.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body  id="page-top" class="index">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top"><img src="./img/magazine.png" height="20px" width="20px"/>Magazine <sub style="color:white;font-size:10px"> Subscription system</sub></a>		
            </div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li class="page-scroll">
                        <a href="staffdashboard.php">Dashbord</a>
                    </li>
                    <li class="page-scroll">
                        <a style="color:red" href="approve.php">Approve Subscription</a>
                    </li>
					<li class="page-scroll">
                        <a href="#">Qualify Contributor</a>
                    </li>
                    <li class="page-scroll">
                        <a href="report.php">Report</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

	<section id="stype">
     <header>
        <div class="container">

<?php
$appno=$_GET['appno'];
$conn=mysql_connect('students','z1747241','19920503');
mysql_select_db('z1747241',$conn);
$qry="select * from coporate where ApplicationNo=$appno";
$res=mysql_query($qry);
$row= mysql_fetch_array($res);	
$date=date('m/d/Y');
$nextdate=date('m/d/Y', strtotime('+ 1 year', strtotime($date)));
$qry1="insert into smsaccount(ApplicationNo,userid,password,type,startdate,enddate,email,phone) values('$appno','$row[1]','$row[1]','coporate','$date','$nextdate','$row[5]','$row[6]')";
$qry2="insert into smsaddress(ApplicationNo,street,hno,city,state,zip,noofcopies) values('$appno','$row[7]','','$row[8]','$row[9]','$row[10]',$row[4])";
$res1=mysql_query($qry1,$conn);
$res2=mysql_query($qry2,$conn); 

if(! $res and !res1 and !res2)
{
die('Could not enter data: ' . mysql_error());

  return false;
}
echo "<b>Account created for application number $row[0]</b>";
echo "<br><br>Next renewal date is $nextdate ";
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br>";
$qry3="DELETE FROM coporate WHERE ApplicationNo=$appno";
mysql_query($qry3,$conn);

?>

</div>
 </section>
	
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

	<script src="js/jqBootstrapValidation.js"></script>
    

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
