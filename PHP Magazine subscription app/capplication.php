<!DOCTYPE html>
<html>
<head>
    <title>magazine Subscription System</title>
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
               
            </div>
        </div>
    </nav>

	<section id="stype">
     
        <div class="container">
            <div class="column"><br><br>

					<?php 
					$appno=$_POST['appno'];
					$cname=$_POST['cname'];        
					$contactname=$_POST['contactname'];  
					$street=$_POST['street'];
					$dept=$_POST['dept'];
					$noofcopies=(int)$_POST['noofcopies'];
					$email=$_POST['email'];
					$phone=$_POST['phone'];
					$city=$_POST['city'];
					$state=$_POST['state'];
					$zipc=$_POST['zip'];
					$cardtype=$_POST['cardtype'];
					$cardnumber=$_POST['cardnumber'];
					$nameoncard=$_POST['nameoncard'];
					$expirydate=$_POST['expiredate'];
					$conn=mysql_connect('students','z1747241','19920503');
					if(!mysql_select_db('z1747241',$conn))
					{
						die('Could not connect: ' . mysql_error());
					}
					$qry="insert into coporate(ApplicationNo,Cname,Contactname,dept,noofcopies,email,phone,street,city,state,zip,cardtype,cardnumber,nameoncard,expirydate,type) values('$appno','$cname','$contactname','$dept',$noofcopies,'$email','$phone','$street','$city','$state','$zipc','$cardtype','$cardnumber','$nameoncard','$expirydate','corporate')";
					$res=mysql_query($qry,$conn);

					if(! $res )
					{
					die('Could not enter data: ' . mysql_error());

					  return false;
					}
					echo "<br><br><br><h3>";
					echo "Hi ";
					echo $contactname;
					echo ",Your data is submited for approvel.<br><br>";
					echo "Your application number is ";
					echo $appno;
					echo ".<br><br> A confirmation mail is sent to ";
					echo $email;
					echo ".</h3>";
					mysql_close($conn);
					return true;
					?>
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
