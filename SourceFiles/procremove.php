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
#rm{
	width:250px;
	background-color:ivory;height:40px;
	border-radius:5px;
}
#aa{
		position:absolute;
		top:opx;
		left:130px;
}
#bbb{
	position:absolute;
		top:0px;left:500px;
}
#rem{
	position:absolute;
	top:0px;
	left:950px;
	border-radius:5px;
	width:120px;font-size:15px;
	color:white;
	background-color:rgb(99,99,126);
	height:40px;
	}
#prc{
	position:absolute;
	top:0px;
	left:450px;
}
#lllll{
	position:absolute;
	top:0px;
	left:600px;
}
#logout{
	position:absolute;
	top:0px;
	left:750px;
}
#ll{
	position:absolute;
		top:0px;
		left:450px;
}		
	

</style>
<script>
<script>
function formValidate()
{
var strValidate=registration.usn.value.search(/1BM1[0-8][a-z]{2}[0-9]{3}/i);
var name=registration.username.value.search(/[A-Z]/i);
if(name== -1)
	{
	alert("Not Valid name");getElementById("sName").value.focus();
	return false;
	}

if(strValidate== -1)
	{
	alert("Not Valid usn ");registration.usn.value.focus();
	return false;
	}


}
function onhover()
{ 	document.getElementById('rem').style.color=black;
}		
</script>
<?php
	session_start();
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
	<input class="b"id="ll"type="submit" value="Delete Reports"/></form>
	<form method="post" action="report.html">
	<input class="b"id="l"type="submit" value="Reports"/></form>
		<form action="marksreport.html">
	<input type="submit"class="b"id="lllll" onclick="all();" value="Update Record" ></form>
	<form action="logout.php">
	<input type="submit"class="b"id="logout" onclick="all();" value="Logout" ></form>
	</div><br/><br/>
	<form method="post"id="rr" action="delstudinfo.php">
	<b id="ii">Student Name:</b><label id="aa"><input type="text" id="rm" name="stname"placeholder="  Enter student name"></label>
	<label id="bbb"><b>USN:</b><input type="text" id="re" name="stusn" placeholder="  Enter USN"></label>
	<input  type="submit"value="Remove" onmouseover="onhover()"id="rem"></form>
	<p id="bb"><b>Delete Reports:</b></p>

	<br/><br /><br/>
	</body>
	</html>
