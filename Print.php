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
  color:#12669e;
  text-align:center;
  font-size:20px;
  min-height: 40px;
  padding-top: 100px;
  /*padding-left: 250px;*/
}
table{ 

margin-right: auto;

margin-left: auto;

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

$rental_id = $_POST["ID"];

$user='root';
$pass='';
$db= 'RiyadhPlateau';

$con= new mysqli('localhost', $user, $pass, $db) or die ("could not connect to database");


$q2="SELECT ID, Name,RentStart,RentEnd,IName,IID  FROM Rent WHERE ID=$rental_id";



$result = mysqli_query($con, $q2);

if (mysqli_num_rows($result) > 0) {


    // output data of each row
print("<table border='1'><thead>
        <th>ID</th>
        <th>Name</th>
        <th>Item ID</th>
        <th>Item Name</th>
         <th>RentStart</th>
         <th>RentEnd</th>
         <th>Price</th>
          </thead>");
	    while($row = mysqli_fetch_assoc($result)) {
	    $diff = abs(strtotime($row["RentEnd"]) - strtotime($row["RentStart"]));
$d= ($diff/ (60*60*24))*1000;

		
        print( "<tr>
        		   <td>". $row["ID"]. "</td>  
                   <td>" .$row["Name"]. "</td>
                   <td>" .$row["IID"]. "</td>
                   <td>" .$row["IName"]. "</td>
                   <td>" .$row["RentStart"]. "</td>
                   <td>" .$row["RentEnd"]. "</td>
                   <td>" ."$d". "</td></tr>"
                   );
    }



	print("</table>");
} else {
    print("Please Enter a valid rental ID");
}

mysqli_close( $con );


?>
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
