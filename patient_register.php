<?php
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>| Patient Registration |</title>
<link href="patient_register.css" rel="stylesheet">
<script>
function validateform(){  
var fname=document.myform.fname.value;  
var lname=document.myform.lname.value;  
var age=document.myform.age.value; 
var dob=document.myform.dob.value;
var data = dob.split("/"); 
var gender=document.myform.gender.value; 
var cnct=document.myform.cnct.value; 
var txtinfo=document.myform.txtinfo.value; 
  
  
if (fname==null || fname==""){  
  alert("Name can't be blank");  
  return false;  
}
else if (!fname.match(/^[A-Z]/)){  
  alert("First Letter must be upper case!");  
  return false;  
}else if(lname==null || lname==""){  
  alert("Last Name can't be blank!");  
  return false;  
  }
  else if (!lname.match(/^[A-Z]/)){  
  alert("Last name's first Letter must be upper case!");  
  return false;  
}
  else if(age==null || age=="" || age=="0"){  
  alert("Kindly enter your age!");  
  return false;  
  }  
  else if(isNaN(Date.parse(data[2] + "-" + data[1] + "-" + data[0]))){  
  alert("Date of birth can't be blank!");  
  return false;  
  }  
  else if(gender==null || gender=="" || gender=="Gender"){  
  alert("Gender can't be blank!");  
  return false;  
  }  
  else if(cnct==null || cnct==""){  
  alert("Contact Number portion must be filled!");  
  return false;  
  } 
  else if(cnct.length != 10){  
  alert("Contact Number must be 10 digit!");  
  return false;  
  } 
  else if(txtinfo==null || txtinfo==""){  
  alert("Kindly Give some information about the desease you are facing!");  
  return false;  
  }
  else if (!txtinfo.match(/^[A-Z]/)){  
  alert("Text Information's first Letter must be upper case!");  
  return false;  
}
  
}  </script>
</head>

<body>
<div class="zero">
<h2>Register here!</h2>
</div>

<form name="myform" action="registration_script.php" onsubmit="return validateform()" method="post">

<div class="first">
<input type="text" placeholder="First Name" class="" name="fname"></div>
<br><br>

<div class="second">
<input type="text" placeholder="Last Name" class="" name="lname"></div>
<br><br>

<div class="third">
<input type="number" placeholder="Age" class="" name="age"></div>
<br><br>

<div class="fourth">
<input type="date" placeholder="Date of Birth" class="" name="dob"></div>
<br><br>

<div class="fifth" class="">
<select name="gender" class=" ">
<option>Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="other">Other</option>
</select></div>
<br><br>

<div class="sixth">
<input type="text" placeholder="Enter Your Contact Number" class="" name="cnct"></div>
<br><br>

<div class="seventh">
<textarea placeholder="Information - Just give some information about the Disease or problem you are facing" class="contform" name="txtinfo"></textarea>
</div>
<br><br>

<div class="eightth">
<input type="submit" name="submit" value="Submit" class="submit"></div>
<br><br>

<div class="ninth">
<ul type="none">
                           <li><a href="patient_directory.php">Patient Directory</a></li>
                           
                      	</ul></div>
</body>
</html>