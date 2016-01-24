<!DOCTYPE html>
<html>
<head>
    <title>Staff Dashbord</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/freelancer.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<script >
	function amount()
	{		document.getElementById("amountbtn").style.visibility = "hidden";
			alert("Amount Charged. Click on Approve");
		    document.getElementById("btn").style.visibility = "visible";
			

		
		
	}
	</script>
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
     
        <div class="container">
            <div class="column"><br><br>
				<TABLE ><TR><TD>
				<h3><u>Applicant Details</u></h3><BR>
				<table style="bgcolor:white;font-size:20px" >
				<?php
					$appno=$_GET['appno'];
					$conn=mysql_connect('students','z1747241','19920503');
					mysql_select_db('z1747241',$conn);
					$qry="select * from coporate where ApplicationNo=$appno";
					$res=mysql_query($qry);
					$num=mysql_num_rows($res);
					$row= mysql_fetch_array($res);	
					echo("<tr><td>Application Number:&nbsp;</td><td>");
					echo $row[0];
					echo("</td></tr><tr><td>Company Name:&nbsp;</td><td>");
					echo $row[1];	
					echo("</td></tr><tr><td>Contact Person:&nbsp;</td><td>");
					echo $row[2];	
					echo("</td></tr><tr><td>Department:&nbsp;</td><td>");
					echo $row[3];
					echo("</td></tr><tr><td>Number of copies:&nbsp;</td><td>");
					echo $row[4];
					echo("</td></tr><tr><td>email:&nbsp;</td><td>");
					echo $row[5];
					echo("</td></tr><tr><td>Phone:&nbsp;</td><td>");
					echo $row[6];
					echo("</td></tr><tr><td>Street:&nbsp;</td><td>");
					echo $row[7];
					echo("</td></tr><tr><td>City:&nbsp;</td><td>");
					echo $row[8];
					echo("</td></tr><tr><td>State:&nbsp;</td><td>");
					echo $row[9];
					echo("</td></tr><tr><td>Zip:&nbsp;</td><td>");
					echo $row[10];
					echo("</td></tr>");
					
				?>
				</table>
				</TD>
				<TD>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				<TD>
				<h3><u>Payment Details</u></h3><br>
				<?php 
					echo("<table style=bgcolor:white;font-size:20px><tr><td>Card Type:&nbsp;</td><td>");
					echo $row[11];
					echo("</td></tr><tr><td>Card Number:&nbsp************</td><td>");
					echo $row[12][12];	
					echo $row[12][13];	
					echo $row[12][14];	
					echo $row[12][15];	
					
					echo("</td></tr><tr><td>Name on card:&nbsp;</td><td>");
					echo $row[13];	
					echo("</td></tr><tr><td>Expire date:&nbsp;</td><td>");
					echo $row[14];	
					echo("</td></tr></table>");
								
				?>
				<BR><BR><BR><BR><BR><BR>
				<br><br><br>
				
				</TD>
				</TR>
		
					</TABLE><center>
					<Button class="shape" id="amountbtn" style="background:orangered;color:white;border:0px" onclick="amount()">Charge Amount</button><a href="http://students.cs.niu.edu/~z1747241/sms/account1.php?appno=<?php echo $row[0];?>"><Button class="shape"  id="btn" style="visibility:hidden;background:green;color:white;border:0px" onclick="approve()">Approve</button></a>
					</center>
				</div>		       
			</DIV>
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
