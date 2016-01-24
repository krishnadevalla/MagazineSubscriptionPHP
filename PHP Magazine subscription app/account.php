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
<center>
	 <div class="row">
       
		
		 <br><br><br><br><br>
            
                
<form method="post" action="aacount.php">			

<?php
$appno=$_GET['appno'];
echo "<input type=hidden name=appno value=".$appno.">";
$conn=mysql_connect('students','z1747241','19920503');
mysql_select_db('z1747241',$conn);
$qry="select * from individual where ApplicationNo=$appno";
if(! $res and !res1 and !res2)
{
	die('Could not enter data: ' . mysql_error());
}
$res=mysql_query($qry);
$row= mysql_fetch_array($res);
echo "<h3><u>Create Subscriber Account</u></h3>";
echo "<h4>Application number: ".$row[0]."</h4>";
echo "<table style=font-size:20px>";
echo "<tr><td>Name</td><td>:".$row[2]." ".$row[1]."</td></tr>";
echo "<tr><td>Email</td><td>:".$row[3]."</td></tr>";
echo "<tr><td>Phone</td><td>:".$row[4]."</td></tr>";
echo "<tr><td>************************</td><td>***************</td></tr>";
echo "<tr><td><u>Deliver Address</u></td><td></td></tr>";
echo "<tr><td>&nbsp</td><td></td></tr>";
echo "<tr><td>".$row[5].", Unit ".$row[6].",</td></tr>";
echo "<tr><td>".$row[7].", ".$row[8]." - ".$row[9]."</td></tr>";
?>
<tr><td><p>&nbsp;</td></tr>
<tr><td><b>Create Credentials</b></td></tr>
<tr><td><label>User ID</label></td><td><input style="background:#ffdaac;color:grey;border:0px"name="uid" type="text"/></td></tr>
<tr><td><label>Password</label></td><td><input style="background:#ffdaac;color:grey;border:0px" name="password" type="password"/></td></tr>
</table>
<br><br><br>
<a href="approve.php"  width="40px" style="background:skyblue;color:white;border:0px" class="btn">Cancel</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="btn" style="background:green;color:white;border:0px;" >Submit</button>
</table>
</div>
</center>
	
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
