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
		top:80px;font-size:25px;
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
		left:130px;
}

#bbbb{
	position:absolute;
		top:0px;left:1050px;
}
#rem{
	position:absolute;
	top:680px;
	left:375px;
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
		left:750px;	
		
}
#lllll{
	position:absolute;
		top:0px;
		left:600px;	
		
}
#txt{
	width:60px;
	height:30px;
	font-size:20px;
	text-align:centre;
	}
</style>

<?php
session_start();
$usn=$_POST['wtfusn'];
$name1=$_SESSION['username'];
$dbhost = 'localhost/orcl';     
$dbuser = 'system';   
$dbpass = 'oracle';
$dbname='procmgmtsys';
$connection =oci_connect($dbuser, $dbpass,$dbhost);

if(!$connection ) {  
die('Could not connect to Server ' );  
}
?>
	<html><body background="bgg.jpg">
	<div class="header">
	<img style="position:relative;top:-15px;left:-10px;width:5%;height:10%;"src="logo.jpg"></img>
	<b style="font-size:30px;position:relative;top:-40px;left:50px;">BMSCE</b>
	</div>
	<div id="dd" >
	<form method="post"action="prochomepage.php">
	<input class="b"id="c"type="submit" value="Home"/></form>
	<form method="post" action="studentsignup.html">
	<input class="b"id="cc"type="submit" value="Add Student"/></form>
	<form method="post" action="procremove.php">
	<input class="b"id="ll"type="submit" value="Delete Report"/></form>
	<form method="post" action="report.html">
	<input class="b"id="l"type="submit" value="Reports"/></form>
	<form action="marksreport.html">
	<input type="submit"class="b"id="lllll" onclick="all();" value="Update Record" ></form>
	<form action="logout.php">
	<input type="submit"class="b"id="lll" onclick="all();" value="Logout" ></form>
	</div><br/><br/>
	
	<p id="bb" style="position:absolute;
		top:240px;"><b>Student Performance Details:</b></p>
	<form action="marksreport.html">
	<label style="position:relative;top:30px;left:50px;"><b style="font-size:20px;">USN:</b><input style="width:200px;height:30px;border-radius:5px;background-color:ivory;" placeholder="enter usn"type="text"  name="usn" value="<?php echo $usn;?>"></label>
	<input style="border-radius:5px;
	width:120px;font-size:15px;
	color:white;
	background-color:rgb(99,99,126);
	height:40px;position:relative;top:30px;left:120px;"type="submit"value="Back"></form>
	<form method="post" action="viewdetailreportproc.php">
	<input style="border-radius:5px;
	width:120px;font-size:15px;
	color:white;
	background-color:rgb(99,99,126);
	height:40px;position:relative;top:-27px;left:560px;"type="submit"value="View report"></form>
	
	<?php
	$_SESSION['sid']=$usn;
	$query="SELECT * FROM studcourse WHERE usn='$usn' ";
$result=oci_parse($connection,$query);
oci_execute($result);
$data=oci_parse($connection,"select * from studcourse where usn='$usn'");
oci_execute($data);
$result1=oci_parse($connection,$query);
$c=oci_execute($result1);
if(oci_fetch($result1)==0){
 ?><script>alert("no such entry");window.location.href="marksreport.html";</script><?php
die('Could not ' );
 }	
else{
	?>
	<form method="post" action="savedetails.php">
	<table style="position:relative;left:50px;top:30px;"border="1px"><tr><th style="font-size:20px">sl no.</th><th style="font-size:20px">course code</th><th style="font-size:20px">course name</th><th style="font-size:20px">Credits</th><th style="font-size:20px">CIE-1</th><th style="font-size:20px">CIE-2</th><th style="font-size:20px">SEE</th><th style="font-size:20px">Classes held</th><th style="font-size:20px">Classes Attended</th></tr>';
	
	<tr>
	<th>1.<?php oci_fetch($result);
	oci_fetch($data);?></th>
	<th ><label ><input 	id="txt"style="border-radius:5px;background-color:ivory;width:110px;text-align:centre;font-size:15px;" type="text" 		 name="r1" value="<?php echo oci_result($data,'CCODE');?>" disabled /></label></th>
	<th><?php echo oci_result($data,'CNAME');?>
	</th>
	<th><?php echo oci_result($data,'CREDIT'); ?>
	</th>
	<th><label > <input id="txt" min="0"style="border-radius:5px;background-color:ivory;" type="number" 	 name="c11" value="<?php echo oci_result($data,'CIE1');?>"></label></th>
	<th><label ><input type="number"min="0"	id="txt" style="border-radius:5px;background-color:ivory;"  	name="c21" value="<?php echo oci_result($data,'CIE2');?>"></label></th>
	<th><label ><input type="number"min="0" 	id="txt"style="border-radius:5px;background-color:ivory;" value="<?php echo oci_result($data,'SEE');?>" 	name="s1" ></label></th>
	<th><label ><input type="number" min="0"	id="txt"style="border-radius:5px;background-color:ivory;" value="<?php echo oci_result($data,'CHELD');?>" 	name="ch1" ></label></th>
	<th><label ><input type="number" min="0"	id="txt"style="border-radius:5px;background-color:ivory;" value="<?php echo oci_result($data,'CATTEND');?>" 	name="ca1" ></label></th>
	</tr>
	
	<tr>
	<th>2.<?php oci_fetch($result);oci_fetch($data);?></th>
	<th ><label ><input 	id="txt"style="border-radius:5px;background-color:ivory;width:110px;text-align:centre;font-size:15px;" type="text"  	name="r2" value="<?php echo oci_result($result,'CCODE');?>" disabled /></label></th>
	<th><?php echo oci_result($result,'CNAME');?>
	</th>
	<th><?php echo oci_result($result,'CREDIT'); ?>
	</th>
	<th><label > <input id="txt" min="0"style="border-radius:5px;background-color:ivory;" type="number"  	name="c12"value="<?php echo oci_result($data,'CIE1');?>" ></label></th>
	<th><label ><input type="number"	min="0"id="txt" style="border-radius:5px;background-color:ivory;"  value="<?php echo oci_result($data,'CIE2');?>"	name="c22" ></label></th>
	<th><label ><input type="number" min="0"	id="txt"style="border-radius:5px;background-color:ivory;" value="<?php echo oci_result($data,'SEE');?>"  	name="s2" ></label></th>
	<th><label ><input type="number" min="0"	id="txt"style="border-radius:5px;background-color:ivory;" value="<?php echo oci_result($data,'CHELD');?>"  	name="ch2" ></label></th>
	<th><label ><input type="number" min="0"	id="txt"style="border-radius:5px;background-color:ivory;"  value="<?php echo oci_result($data,'CATTEND');?>"	name="ca2" ></label></th>
	</tr>
	
	<tr>
	<th>3.<?php oci_fetch($result);oci_fetch($data);?></th>
	<th ><label ><input 	id="txt"style="border-radius:5px;background-color:ivory;width:110px;text-align:centre;font-size:15px;" type="text"  	name="r3" value="<?php echo oci_result($result,'CCODE');?>" disabled /></label></th>
	<th><?php echo oci_result($result,'CNAME');?>
	</th>
	<th><?php echo oci_result($result,'CREDIT'); ?>
	</th>
	<th><label > <input id="txt"min="0" style="border-radius:5px;background-color:ivory;" type="number"  	name="c13"value="<?php echo oci_result($data,'CIE1');?>" ></label></th>
	<th><label ><input type="number"min="0"	id="txt" style="border-radius:5px;background-color:ivory;"  	name="c23" value="<?php echo oci_result($data,'CIE2');?>"></label></th>
	<th><label ><input type="number" min="0"	id="txt"style="border-radius:5px;background-color:ivory;" value="<?php echo oci_result($data,'SEE');?>"  	name="s3" ></label></th>
	<th><label ><input type="number" min="0"	id="txt"style="border-radius:5px;background-color:ivory;" value="<?php echo oci_result($data,'CHELD');?>"  	name="ch3" ></label></th>
	<th><label ><input type="number" min="0"	id="txt"style="border-radius:5px;background-color:ivory;" value="<?php echo oci_result($data,'CATTEND');?>" 	name="ca3" ></label></th>
	</tr>
	
	<tr>
	<th>4.<?php oci_fetch($result);oci_fetch($data);?></th>
	<th ><label ><input 	id="txt"style="border-radius:5px;background-color:ivory;width:110px;text-align:centre;font-size:15px;" type="text"  	name="r4" value="<?php echo oci_result($result,'CCODE');?>" disabled /></label></th>
	<th><?php echo oci_result($result,'CNAME');?>
	</th>
	<th><?php echo oci_result($result,'CREDIT'); ?>
	</th>
	<th><label > <input id="txt"min="0" style="border-radius:5px;background-color:ivory;" type="number"  	name="c14"value="<?php echo oci_result($data,'CIE1');?>" ></label></th>
	<th><label ><input type="number"min="0"	id="txt" style="border-radius:5px;background-color:ivory;"  	name="c24"value="<?php echo oci_result($data,'CIE2');?>" ></label></th>
	<th><label ><input type="number" min="0"	id="txt"style="border-radius:5px;background-color:ivory;" value="<?php echo oci_result($data,'SEE');?>"  	name="s4" ></label></th>
	<th><label ><input type="number" min="0"	id="txt"style="border-radius:5px;background-color:ivory;" value="<?php echo oci_result($data,'CHELD');?>"  	name="ch4" ></label></th>
	<th><label ><input type="number" min="0"	id="txt"style="border-radius:5px;background-color:ivory;"  value="<?php echo oci_result($data,'CATTEND');?>"	name="ca4" ></label></th>
	</tr>
	
	<tr>
	<th>5.<?php oci_fetch($result);oci_fetch($data);?></th>
	<th ><label ><input 	id="txt"style="border-radius:5px;background-color:ivory;width:110px;text-align:centre;font-size:15px;" type="text"  	name="r5" value="<?php echo oci_result($result,'CCODE');?>" disabled /></label></th>
	<th><?php echo oci_result($result,'CNAME');?>
	</th>
	<th><?php echo oci_result($result,'CREDIT'); ?>
	</th>
	<th><label > <input id="txt" min="0"style="border-radius:5px;background-color:ivory;" type="number"  	name="c15"value="<?php echo oci_result($data,'CIE1');?>" ></label></th>
	<th><label ><input type="number"min="0"	id="txt" style="border-radius:5px;background-color:ivory;"  	name="c25"value="<?php echo oci_result($data,'CIE2');?>" ></label></th>
	<th><label ><input type="number" min="0"	id="txt"style="border-radius:5px;background-color:ivory;"value="<?php echo oci_result($data,'SEE');?>"   	name="s5" ></label></th>
	<th><label ><input type="number" min="0"	id="txt"style="border-radius:5px;background-color:ivory;" value="<?php echo oci_result($data,'CHELD');?>"  	name="ch5" ></label></th>
	<th><label ><input type="number" min="0"	id="txt"style="border-radius:5px;background-color:ivory;"  value="<?php echo oci_result($data,'CATTEND');?>"	name="ca5" ></label></th>
	</tr>
	</table>
	<input  type="submit"value="Save"id="rem"></form>
	<br/><br /><br/>
	</body>
	</html>
	<?php
}
?>
