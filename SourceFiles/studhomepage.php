<style type="text/css">
#tab{
		position:absolute;
		left:250px;
		top:300px;
		border-width:5px;
		background-color:ivory;
		col-width:70px;
		font-size:18px;
		
		
	}
	p {font-size:25px;}
.h{
		background-color:rgb(198, 217, 236);
		color:red;
		font-size:20px;
}
th, td {
  padding: 10px;
  text-align: centre;
}
table{
		width:600px;text-align: centre;
}
/* Style the header */
.header {
  background-color:powderblue;
  padding: 20px;
  text-align:left;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}


li .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li  .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}
#c{
	position:absolute;
	top:0px;
	left:0px;
}
#cc{
	position:absolute;
	top:0px;
	left:150px;
}
.b{
	width:30px;
	background-color:#333;
	width:150px;
	height:50px;
	color:white;
	display: inline-block;
	border:0px;
}
#lb{
	position:absolute;
	top:0px;
	left:150px;
}
#lbb{
	position:absolute;
	top:0px;
	left:450px;
}
#dd{
	background-color:#333;
	width:1520px;
	height:50px;
	position:absolute;
	top:130px;
	}

#bb{
	position:absolute;
		top:200px;font-size:25px;
}
#rr{
	position :absolute;
	top:350px;font-size:20px;
left:0px;}
#re{
	
	background-color:ivory;
	width:250px;height:40px;
	border-radius:5px;
}
#ree{
	
	background-color:ivory;
	width:270px;height:100px;
	border-radius:5px;
}
#rm{
	width:250px;
	background-color:ivory;height:40px;
	border-radius:5px;
	position:absolute;
	top=-3px;
}
#aa{
		position:absolute;
		top:opx;
		left:30px;
}
#bbb{
	position:absolute;
		top:0px;left:550px;
}
#bbbb{
	position:absolute;
		top:0px;left:1050px;
}
#rem{
	position:absolute;
	top:325px;
	left:300px;
	border-radius:5px;
	width:120px;font-size:15px;
	color:white;
	background-color:rgb(99,99,126);
	height:40px;
	}
#bbbbb{
	position:absolute;
		top:150px;left:125px;
}
#bbbbbb{
	position:absolute;
		top:150px;left:600px;
}
#c{
	position:absolute;
	top:0px;
	left:0px;
}
#cc{
	position:absolute;
	top:0px;
	left:150px;
}
.b{
	width:30px;
	background-color:#333;
	width:150px;
	height:50px;
	color:white;
	display: inline-block;
	border:0px;
}
#l{
	position:absolute;
	top:0px;
	left:300px;
}
#dd{
	background-color:#333;
	width:1520px;
	height:50px;
	position:absolute;
	top:130px;
	}
#aa{
	position:absolute;
		top:170px;
}
#bb{
	position:absolute;
		top:240px;font-size:25px;
}
#ll{
	position:absolute;
		top:0px;
		left:450px;
}
#lll{
	position:absolute;
		top:0px;
left:600px;	}
#llllll{
	position:absolute;
		top:0px;
		left:580px;	
		
}
}

</style>

<?php

session_start();
$dbhost = 'localhost/orcl';     
$dbuser = 'system';   
$dbpass = 'oracle';
$dbname='procmgmtsys';
$usn=$_SESSION['username'];
$connection =oci_connect($dbuser,$dbpass,$dbhost);
if(!$connection ) {  
die('Could not connect to Server ' );  
}
$query="SELECT *FROM studpriinfo WHERE usn='$usn' ";
$name1=oci_parse($connection,$query);
oci_execute($name1);
oci_fetch($name1);
$name=oci_result($name1,'SNAME');
$result=oci_parse($connection,$query);
oci_execute($result);
if(!$result){
die('Could not ' );  
}	
else{
	?>
<html><body background="bgg.jpg">
	<div class="header">
	<img style="position:relative;top:-15px;left:-10px;width:5%;height:10%;"src="logo.jpg"></img>
	<b style="font-size:30px;position:relative;top:-40px;left:50px;">BMSCE</b>
	</div>
	<div id="dd" >
	<form method="post"action="studhomepage.php">
	<input class="b"id="c"type="submit" value="Home"/></form>
	<form action="studreport.html">
	<input type="submit"class="b"id="l" onclick="all();" value="Course entry" ></form>
	<form action="studlogout.php">
	<input type="submit"class="b"id="lbb" onclick="all();" value="Logout" ></form>
	
	<form action="viewdetailreport.php">
	<input type="submit"class="b"id="lb" onclick="all();" value="View Report" ></form>
	<form action="studlogout.php">
	</div><br/><br/>
	<p style="font-size:20px;"id="aa">Welcome   <?php echo $name ?> !</p>
	<p id="bb"><b>Notification from Proctor:</b></p>
	<?php
	echo '<centre><table border="1px" id="tab">'; 
echo '<tr><th class="h">Date</th><th class="h">Purpose</th><th class="h">Description</th></tr>'; 
	$query="SELECT * FROM procmeet WHERE usn='$usn' ";
	$result=oci_parse($connection,$query);
$c=oci_execute($result);
while(($row = oci_fetch_array($result,OCI_NUM))!=false)
{
  echo "<tr><td>";   

 echo($row[2]);
 echo "</td><td>";
 echo($row[3]);
 echo "</td><td>";
 echo($row[4]);
 echo "</td></tr>";
        
}

echo "</table></centre>"; 
	?>
	</body></html>
<?php
	}	
?>
