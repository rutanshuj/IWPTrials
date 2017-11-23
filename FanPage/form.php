<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="main.js"> </script>
<link rel="stylesheet" type="text/css" href="index.css">
<title> Form Filling </title>
</head>
<!--Box Model-->
<style>
#divbox{
	outline: 1px solid white;
	text-align: center;
	font-family: "Times New Roman";
	font-size: 20px;
	background-color: lightgrey;
	height: wrap;
	width: fill;
	padding: 10px;
    border: 10px solid green;
	margin: 10px;
	border-left-style: groove;
	border-right-style: groove;
}
#info{
	font-size: 15px;
	border: 1px solid;
	width: 150px;
	resize: both;
	overflow: auto;
}

</style>
<body>
<div id="divbox"> Fill this to create an account 
<div id="info">Please fill in all details </div> 

<form>
<div></br> Enter Username </br> <input type="text" id= "username" placeholder="Username" > </input> </div>
<div></br> Enter Adddress </br> <input type="text" placeholder="Address" > </input> </div>
<div></br> Enter Age </br> <input type="number" placeholder="Age" > </input> </div>
<div></br> Enter Sex </br> <input type="radio" id = "male" name="gender" value = "Male" > Male </input> <br>
							<input type = "radio" id= "female" name="gender" value = "Female">Female</input><br>
							<input type = "radio" id="other" name = "gender" value = "Other"> Other </input></div>
<div></br> Enter Email </br> <input type="text" id = "email" placeholder="Email" required> </input> </div>
<div></br> Select Country </br> 
<select id = "select1" size = "1">
<option> Austrailia </option>
<option> Afghanisthan </option>
<option> India </option>
<option> United States of America </option>

</select>
</div>
</br>Profile Information</br>
<textarea placeholder="Enter your text" style="width: 400px;" > </textarea>

<div></p><button onclick="validateForm()"> Sign Up </button></div>

</div>
</form>
<div>
<?php require("menu.php"); ?>
</div>

</body>
<script>
function validateForm(){	

	var e = document.getElementById("select1");
	var country = e.options[e.selectedIndex].text;
	
	var x=0;
	var rmale = document.getElementById("male");
	var rfemale = document.getElementById("female");
	var rother = document.getElementById("other");
	if(rmale.checked){x++;}
	if(rfemale.checked){x++;}
	if(rother.checked){ x++;}
	if(x==0){
		alert("Select gender");
		return false;
	}
	var usernameletters = /^[A-Za-z0-9]+$/;
	var username1 = document.getElementById("username").value;
	var emailletters = /^\w+([\.-}]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
	var email1 = document.getElementById("email").value;
	if (email1.match(emailletters) && username1.match(username)){
	alert("Accepted");
		return true;
	}else{
		alert("You have entered the wrong details");
		return false;
	}
}
</script>
</html>