<!DOCTYPE html> 
<html> 
<head>
<meta charset="utf-8">
<title>Rent</title>
<link rel= "stylesheet" type="text/css" href="H_F_external.css">
<link rel= "stylesheet" type="text/css" href="Form.css">

<style>
.s {
  color:#12669e;
  text-align:center;
  font-size:30px;
  min-height: 500px;
  padding-top: 25px;
  padding-left: 100px;

}
.main{
  color:LightSlateGrey;
  text-align:center;
  font-size:50px;
  min-height: 40px;
  padding-top: 25px;

}
 </style>

</head>
<body>
<header> 
 

<nav>
<ul class="menu">
<li><a href="HomePage.html"> Home</a></li>
<li><a href="GalFront.html"> Gallery</a>
 <ul class="dropdown"> <!--Sub menu-->
     <li> <a href="Villa.html"> Villa</a> </li>
     <li> <a href="Condo.html"> Condo</a> </li>
     <li> <a href="Studio.html"> Studio</a> </li>
</ul>


</li>
<li><a href="Contact_us.html"> Contact us</a></li>
<li><a href="Rent.html"> Rent</a></li>
<li><a href="Print.html"> Print</a></li>
<li><a href="About_us.html"> About us</a></li>

</ul>
</nav> 


<div class="sidebar">
 <a class="active"  href="HomePage.html" >
 <img src="IMG/home-transp.png" width="29" height="30" alt="home image doesn't work"></a>

<a class="active" href="GalFront.html" > 
<img src="IMG/Gallery_remove.png" width="29" height="30" alt="gallery image doesn't work"></a>
 <a class="active" href="Contact_us.html">
 <img src="IMG/contact_us.png" width="28" height="30" alt="contact image doesn't work"></a>

 <a class="active" href="Rent.html"> 
<img src="IMG/customer3_transp.png" width="30" height="30" alt="customer image doesn't work"> </a>
	
 <a class="active" href="Print.html"> 
<img src="IMG/print.png" width="30" height="30" alt="customer image doesn't work"> </a>
	
	<a class="active" href="About_us.html"> 
<img src="IMG/A.png" width="30" height="30" alt="customer image doesn't work"> </a>
	
</div>
</header>

 




<div class="main">
<?php 
$Name = $_POST["Name"];
$DOB = $_POST["DOB"];
$N_ID = $_POST["N_ID"];
$Phone = $_POST["Phone"];
$Email = $_POST["Email"];
$IName = $_POST["IName"];
$IID = $_POST["IID"];
$RentStart = $_POST["RentStart"];
$RentEnd = $_POST["RentEnd"];

$Comments = $_POST["Comments"];


$user = 'root';
$pass = '';
$db = 'RiyadhPlateau';
$con = new mysqli('localhost',$user,$pass,$db) or die ("Could not connect to database");


$q = "INSERT INTO Rent (Name,DOB,N_ID,Phone,Email,IName,IID,RentStart,RentEnd,Comments) VALUES ('$Name','$DOB','$N_ID','$Phone','$Email','$IName','$IID','$RentStart','$RentEnd','$Comments')";






$r=mysqli_query($con,$q);

if (!$r)
{
print ("Could not execute query");
die(mysqli_error($con));
}
$Edate = new DateTime($RentEnd);
$Sdate = new DateTime($RentStart);
$diff = abs(strtotime($RentEnd) - strtotime($RentStart));
$d= ($diff/ (60*60*24))*1000;

//$dateDiff = dateDifference($start_date, $end_date);
$RentDuration= $Edate->diff($Sdate)->format(" %y Years, %m Months, and %d Days.");
print ("Thank you $Name!");
?></div>
<div class = "s">



<?php
 $last_id = mysqli_insert_id($con);
//printf ("Your ID is: %d.\n");
print (" 
<br> Rent summary: <br>
Rent ID: $last_id<br>
Item Name: $IName <br>
Item ID: $IID <br>
Total price:$d<br>
Rent start: $RentStart <br>
Rent end: $RentEnd <br>
Rent Duration $RentDuration <br>");

mysqli_close($con);?>
</div>

<footer>
 <p class="socialMedia">You can find us at:<br>
    <a href="https://twitter.com"><img src="IMG/Twitter_remove.png" width="40" height="40" alt="Twitter,page couldn't found"></a>

    <a href="https://www.instagram.com"><img src="IMG/instagram_remove.png" width="40" height="40" alt="Instagram,page couldn't found"></a>

    <a href="https://www.linkedin.com"><img src="IMG/linkedin_remove.png" width="40" height="40" alt="Linkedin,page couldn't found"></a>

   <a href="https://www.pinterest.com"><img src="IMG/pinterest_remove.png"  width="40" height="40" alt="Pinterest,page couldn't found"></a>
   </p>

    <p class="copyright"> &copy; 2021 riyadhplateau.com is owned and operated by Nora, Lateefah, and Reem </p>
</footer>
</body>
</html>