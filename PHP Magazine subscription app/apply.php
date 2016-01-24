<!DOCTYPE html>
<html>
<head>
    <title>Magazine Subscription System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/freelancer.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<script type="text/javascript">
	function changedetails()
	{
	alert("Redirecting to Coporate page");
	window.location.replace("http://students.cs.niu.edu/~z1747241/sms/corporate.php");
	
	}
	function onlyNos(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
				
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
					
                    return false;
                }
				
                return true;
            }
            catch (err) {
                alert(err.Description);
            }
        }
		
		
	</script>
</head>
<body id="page-top" class="index">
	
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
                        <a href="#stype">Subscription type</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#pd">Personal details</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#address">Address</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#payment">Payment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<form id="myform" action="iapplication.php" method="post">
    <section id="stype">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<h2>Subscription Type</h2>
                    <hr class="star-light">
                   <label style="font-size:25px">Select subscription type:</label>&nbsp;&nbsp;
                   <select style="font-size:20px;background:orange;border:1px;border-color:white;border-style: solid;" id="subtype">
				   <option value="individual">Individual </option>
				   <option onclick="changedetails()"  value="corparate">Corparate </option>
                    </select>  
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<div class="page-scroll">
						<a href="#pd" class="btn-lg btn btn-outline">Next</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pd">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Personal Details</h2>
                    <hr class="star-primary">               
                <div class="col-lg-8 col-lg-offset-2">
                        
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>First Name</label>
                                <input style="color:green;" type="text" class="form-control" placeholder="First Name" name="fname" required data-validation-required-message="Please enter your first name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Last Name</label>
                                <input style="color:green;" type="text" class="form-control" placeholder="Last Name" name="lname" required data-validation-required-message="Please enter your last name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input style="color:green;" type="email" class="form-control" id="email" placeholder="Email Address" name="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input style="color:green;" maxlength="10" onkeypress="return onlyNos(event,this);" id="phone" type="tel" class="form-control" placeholder="Phone Number" name="phone" required data-validation-required-message="Please enter your phone number.">
                                <p id="phoneerror" class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        <br>
                      	<div class="page-scroll">
						<a href="#stype" width="40px" onclick="vemail()" class=" btn-lg btn btnleft">Prev</a>
						<a href="#address"  width="40px" onclick="vemail()" class=" btn-lg btn btnright">Next</a>
						
						</div>
                    </div>             
            </div>
        </div>
    </section>
    <section class="success" id="address">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Address</h2>
                    <hr class="star-light">
					<div style="background:white;"class="col-lg-8 col-lg-offset-2">
                        
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Street address</label>
                                <input style="color:green;" type="text" class="form-control" placeholder="Street address" name="saddress" required data-validation-required-message="Please enter your street address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>House or Appartment Number</label>
                                <input style="color:green;" onkeypress="return onlyNos(event,this);" type="text" class="form-control" placeholder="House or Appartment Number" name="hno" required data-validation-required-message="Please enter your House or Appartment Number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
							<table><tr><td>
                                <label>City</label>
                                <input style="color:green;" style="color:green;" type="text" class="form-control" placeholder="City" name="city" required data-validation-required-message="Please enter your city."></td>
								<td><label>Zip Code</label>
                                <input style="color:green;" maxlength="5" onkeypress="return onlyNos(event,this);" type="text" class="form-control" placeholder="Zipcode" name="zip" required data-validation-required-message="Please enter Zipcode."></td></tr></table>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                           <div class="form-group col-xs-12 floating-label-form-group controls"><br>
                                <select  name="state" class="form-control" style="font-size:20px;border:1px;border-color:white;border-style: solid;color:green">
								<option value="">Select state</option>
								<option value="AL">Alabama</option>
								<option value="AK">Alaska</option>
								<option value="AZ">Arizona</option>
								<option value="AR">Arkansas</option>
								<option value="CA">California</option>
								<option value="CO">Colorado</option>
								<option value="CT">Connecticut</option>
								<option value="DE">Delaware</option>
								<option value="DC">District Of Columbia</option>
								<option value="FL">Florida</option>
								<option value="GA">Georgia</option>
								<option value="HI">Hawaii</option>
								<option value="ID">Idaho</option>
								<option value="IL">Illinois</option>
								<option value="IN">Indiana</option>
								<option value="IA">Iowa</option>
								<option value="KS">Kansas</option>
								<option value="KY">Kentucky</option>
								<option value="LA">Louisiana</option>
								<option value="ME">Maine</option>
								<option value="MD">Maryland</option>
								<option value="MA">Massachusetts</option>
								<option value="MI">Michigan</option>
								<option value="MN">Minnesota</option>
								<option value="MS">Mississippi</option>
								<option value="MO">Missouri</option>
								<option value="MT">Montana</option>
								<option value="NE">Nebraska</option>
								<option value="NV">Nevada</option>
								<option value="NH">New Hampshire</option>
								<option value="NJ">New Jersey</option>
								<option value="NM">New Mexico</option>
								<option value="NY">New York</option>
								<option value="NC">North Carolina</option>
								<option value="ND">North Dakota</option>
								<option value="OH">Ohio</option>
								<option value="OK">Oklahoma</option>
								<option value="OR">Oregon</option>
								<option value="PA">Pennsylvania</option>
								<option value="RI">Rhode Island</option>
								<option value="SC">South Carolina</option>
								<option value="SD">South Dakota</option>
								<option value="TN">Tennessee</option>
								<option value="TX">Texas</option>
								<option value="UT">Utah</option>
								<option value="VT">Vermont</option>
								<option value="VA">Virginia</option>
								<option value="WA">Washington</option>
								<option value="WV">West Virginia</option>
								<option value="WI">Wisconsin</option>
								<option value="WY">Wyoming</option>
								</select>
								<p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                      	<div class="page-scroll">
						<a href="#pd" style="left:10px" class="btn-lg btn btnleft">Prev</a>
						<a href="#payment"  style="right:10px" class="btn-lg btn btnright">Next</a>
						<br><br><br><br><br>
						</div>
                    </div> 
                </div>
            </div>
            
        </div>
    </section>
    <section id="payment">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Payment</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row" >
                <div class="col-lg-8 col-lg-offset-2" >
                    <p style="color:green"> Your card will be charged: $20 for one entire year subscription </p>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <select style="font-size:20px;color:green;border:1px;border-color:white;border-style: solid;" type="text" class="form-control" name="cardtype" required data-validation-required-message="Please enter your name.">
								<option>Select card type</option>
								<option value="visa">Visa</option>
								<option value="mastercard">Master Card</option>
								<option value="discover">Discover</option>
								</select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group" >
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Card Number</label>
                                <input style="color:green;" maxlength="16" onkeypress="return onlyNos(event,this);" type="text" class="form-control" onblur="cardnumber()" placeholder="Card Number" id="cardnumber" name="cardnumber" required data-validation-required-message="Please enter card number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name on card</label>
                                <input style="color:green;" type="tel" class="form-control" placeholder="Name on card" name="nameoncard" required data-validation-required-message="Please enter name on card.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Expiration date</label>
                                <input style="color:green;" type="text" class="form-control" placeholder="Expiration date mm/yyyy" name="expiredate" required data-validation-required-message="Please enter expiration date.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
						<div class="page-scroll">
						<a href="#address" width="40px" class=" btn-lg btn btnleft">Prev</a>
						<button class="resetbtn shape" type="reset">Reset</button>
						<input type="hidden" id="appno" name="appno" />
						
	<script>
		var n = Math.floor((Math.random() * 10000000000) + 1);
		document.getElementById("appno").value=n;
		
	</script>
						<button class="submitbtn shape" type="submit" style="background:green;color:white;border:0px;" >Submit</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
</form>
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>1073 Spiros Ct<br>DeKalb, IL 60115</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About </h3>
                        <p>Magazine serves to the largest community of tech buyers and users.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Magazine 2014
                    </div>
                </div>
            </div>
        </div>
    </footer>

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
	<script src="js/contact_me.js"></script>

	<script src="js/jqBootstrapValidation.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
