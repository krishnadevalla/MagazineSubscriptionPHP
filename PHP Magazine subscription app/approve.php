<!DOCTYPE html>
<html>
<head>
    <title>Staff Dashbord</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/freelancer.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/pure-min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<script language="php">
	function hi()
	{	
		
		
		
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

	
    <div style="background:orange;color:white" class="row">
        <br><br><br><br><br><br><br><br>
            <div style="position:absolute;left:5%">
                
				<center>
				<h3>Individual Applications</h3>
				<table border="2px" class="pure-table pure-table-horizontal" >
				<thead><tr>
				<th><u>To do</u></th>
				<th><u>Application No.</u></th>
				<th><u>Applicant Name </u></th>
				<th><u>Type</u></th>
				</tr></thead>
				<?php
					$conn=mysql_connect('students','z1747241','19920503');
					mysql_select_db('z1747241',$conn);
					$qry="select * from individual";
					$res=mysql_query($qry);
					$num=mysql_num_rows($res);
					for($i=0;$i<$num;$i++)
					{
					$row= mysql_fetch_array($res);	
					echo("<tr><td><a style=color:white href=approve1.php?appno=");
					echo $row[0];
					echo(">View</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>");
					echo $row[0];
					echo("&nbsp;</td><td>");
					echo $row[1];
					echo("&nbsp;</td><td>");
					echo("Individual");
					echo("&nbsp;</td></tr>");
					}
				?>
				</table>
				</center>
				</div>
				<div style="position:absolute;right:5%">
				<center>
				<h3>Corporate Applications</h3>
				<table border="2px" class="pure-table pure-table-horizontal" >
				<thead><tr>
				<th><u>To do</u></th>
				<th><u>Application No.</u></th>
				<th><u>Company Name </u></th>
				<th><u>Type</u></th>
				</tr></thead>
				<?php
					$qry="select * from coporate";
					$res=mysql_query($qry);
					$num=mysql_num_rows($res);
					for($i=0;$i<$num;$i++)
					{
					$row= mysql_fetch_array($res);	
					echo("<tr><td><a style=color:white href=approve2.php?appno=");
					echo $row[0];
					echo(">View</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>");
					echo $row[0];
					echo("&nbsp;</td><td>");
					echo $row[1];
					echo("&nbsp;</td><td>");
					echo("Corporate");
					echo("&nbsp;</td></tr>");
					}
				?>
				</table>
				</center>
				</div>
					<br>
						<br>
						<br>
						<br>
						<br>
						<br><br>
						<br>
						<br><br>
						<br>
						<br>
						<br>
						<br><br>
						<br>
						<br><br>
						<br>
						<br>
						<br>
						<br><br>
						<br>
						<br><br>
						<br>
						<br>
						<br>
						<br><br>
						<br>
						<br>	
					</div>
                
            
        
  
	
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
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
