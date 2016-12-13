<?php
include_once( "./connect_db.inc");
?>
<html>
<head>
<title>|List of Patients|</title>
<link href="patient_directory.css" rel="stylesheet">
<script type="text/javascript" src="validation.js">
</script>

</head>
<div class="header">
<body>
				<div class="box">
		        <input type="text" id="myInput" class="tftextinput" name="q" width="78" height="78" maxlength="120">
                <input type="button"  onClick="myFunction()" value="search" class="tfbutton">
		</div>

                           <a href="patient_register.php">Back</a>
                      	</div>
                        <div class="mainbg">
                        <table height="40%" width="1200px" id="myTable" border="0" cellspacing="0" cellpadding="0">
                        
  <?php
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	
	$query="select * from patient_register";
	
	$result=mysql_query($query,$connection);
	$num=mysql_num_rows($result);
							$i=0;
                			while ( $i < $num )
	           				{	
									$id=mysql_result($result,$i,"id");
								    $fname=mysql_result($result,$i,"fname");
									$lname=mysql_result($result,$i,"lname");
									$age=mysql_result($result,$i,"age");
								    $dob=mysql_result($result,$i,"dob");
									$gender=mysql_result($result,$i,"gender");
									$cnct=mysql_result($result,$i,"cnct");
									$txtinfo=mysql_result($result,$i,"txtinfo");
									
									


?>
      
		<tr>
        	  
 <td width="3%" align="left" valign="top" class="b1" style=" padding-top:5px"><b>&nbsp;<?php echo $fname ?>&nbsp;<?php echo $lname ?></b></td>
               <td width="7%" align="left" valign="top" class="b1" style=" padding-top:5px"><c>Age:&nbsp;</c><d><?php echo $age ?></d></td>
               <td width="15%" align="left" valign="top" class="b1" style=" padding-top:5px"><c>Date of Birth:&nbsp;</c><d><?php echo $dob ?></d></td>
               <td width="5%" align="left" valign="top" class="b1" style=" padding-top:5px"><c>Gender:&nbsp;</c><d><?php echo $gender ?></d></td>
               <td width="15%" align="left" valign="top" class="b1" style=" padding-top:5px"><c>Contact Number:&nbsp;</c><d><?php echo $cnct ?></d></td>
  <td width="20%" align="left" valign="top" class="b1" style=" padding-top:5px"><c>Patient Text Information:&nbsp;</c><d><?php echo $txtinfo ?></d></td>

 </tr>
          
        
        
              
      
<?php
$i++;
							}
							
  ?>
  
  </table>
  </div>
</body>
</html>