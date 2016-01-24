<html>
<head>
<link rel="stylesheet" href="css/pure-min.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/freelancer.css" rel="stylesheet">
<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<title>Report</title>
<script>
		function printpage()
		{
			window.print();
		}
		</script>
</head>
<body id="page-top" class="index">
	

            <div style="color:white" class="navbar navbar-default navbar-fixed-top">
              <center> <p> Magazine Subscription System Sales Report</p>
			  <p><sub>As of: <?php echo date(m."/".d."/".Y."  ".h.":".i .a ) ?></sub></p></center>
			   <button onclick="printpage()" style="border:none;border-radius:15%;;position:absolute;right:5%;top:50px;background:white;color:orange">Print</button>
            </div>
            
        

    
    <br><br><br><br><br><br><br>
        
<div class="col-lg-12"><center>
<table border="2px" class="pure-table pure-table-horizontal" ><thead><tr>
<th>State</th>
<th>Total number</th>
<th>Total Amount</th>
<th>Application Number</th>
<th>Subscriber Name</th>
<th>Subscription Type</th>
<th>Subscription Start date</th>
<th>Subscription End date</th>
</tr></thead>
<tbody>
<?php
$conn=mysql_connect('students','z1747241','19920503');
mysql_select_db('z1747241',$conn);
$tempstate=null;
$count=0;
$ccount=0;
$icount=0;
$tcount=0;
$qry="select a.state,a.city,a.ApplicationNo,ac.userid,ac.type,ac.startdate,ac.enddate from smsaccount ac, smsaddress a where a.ApplicationNo=ac.ApplicationNo order by a.state,a.city";
$qry1="select count(a.state)from smsaccount ac, smsaddress a where a.ApplicationNo=ac.ApplicationNo group by a.state";
$qry2="select a.noofcopies from smsaddress a,smsaccount ad where ad.type='coporate' and a.ApplicationNo=ad.ApplicationNo";
$qry3="select a.noofcopies from smsaddress a,smsaccount ad where ad.type='individual' and a.ApplicationNo=ad.ApplicationNo";
$qry4="select count(ApplicationNo) from smsaccount";
$res=mysql_query($qry,$conn);
$res1=mysql_query($qry1,$conn);
$res2=mysql_query($qry2,$conn);
$res3=mysql_query($qry3,$conn);
$res4=mysql_query($qry4,$conn);
$numc=mysql_num_rows($res2);
for($ci=0;$ci<$numc;$ci++)
{
	$cc= mysql_fetch_array($res2);
	$ccount+=(int)$cc[0];
}

$numi=mysql_num_rows($res3);
for($ii=0;$ii<$numi;$ii++)
{
	$ic= mysql_fetch_array($res3);
	$icount+=(int)$ic[0];
}

$tcount= mysql_fetch_array($res4);
$num=mysql_num_rows($res);
for($i=0;$i<$num;$i++)
{
	$row= mysql_fetch_array($res);
	
	echo("<tr><td>");
	if($tempstate!=$row[0])
	{
		$row1= mysql_fetch_array($res1);
		$count+=(int)$row1;
		$tempstate=$row[0];
		$qry5="select a.noofcopies from smsaddress a,smsaccount ad where ad.type='coporate' and a.ApplicationNo=ad.ApplicationNo and a.state='$row[0]'";
		$res5=mysql_query($qry5,$conn);
		$row5= mysql_fetch_array($res5);
		$qry6="select a.noofcopies from smsaddress a,smsaccount ad where ad.type='individual' and a.ApplicationNo=ad.ApplicationNo and a.state='$row[0]'";
		$res6=mysql_query($qry6,$conn);
		$row6= mysql_fetch_array($res6);
		echo ("<tr class=pure-table-odd><td>");
		echo $row[0];
		echo "</td><td>";
		echo $row5[0]+$row6[0];
		echo "</td><td>$ ";
		echo ($row5[0]+$row6[0])*20;
	}
	else
	{
		echo "</td><td></td><td></td>";
	}
	echo ("</td><td>");
	echo $row[2];
	echo ("</td><td>");
	echo $row[3];
	echo ("</td><td>");
	echo $row[4];
	echo ("</td><td>");
	echo $row[5];
	echo ("</td><td>");
	echo $row[6];
	echo ("</td></tr>");
}
?>
</tbody>
</table>


<hr style="height:1px; border:none; color:#000; background-color:#000;">	
<table style="font-size:25px"><b><tr><td>
<?php
echo "Total number of subscriptions"; 
echo "</td><td>&nbsp;:";
echo $ccount+$icount;
echo "</td><tr><td>";
echo "Total sales amount";
echo "</td><td>"; 
echo "&nbsp;:$";
echo ($ccount+$icount)*20;
echo "</td><tr><td>";
echo "</td><tr><td>====================================</td><td>======</td></tr><tr><td>";
echo "Total No. of individual subscriptions copies sold";
echo "</td><td>"; 
echo "&nbsp;:";
echo $icount;
echo "</td><tr><td>";
echo "Total No. of corporate subscriptions copies sold";
echo "</td><td>"; 
echo "&nbsp;:";
echo $ccount;
echo "</td></tr>";
echo "</b>";
?>
</table>
</center>
<br><br><br><br><br><br><br><br><br><br><br>
</div>

</body>
</html>