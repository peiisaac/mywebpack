

<html>
<head>
	<title>Pei 's Online Banking</title>
	<link rel = "stylesheet" type = "text/css" href = "index.css">
	
</head>
<body bgcolor="green">

	
	<header id="header">
	<h1><center>Welcome To Pei's Online Banking</center></h1>
	</header>
	<div id="section1">
	<div>
		<h2>User Registration</h2>
	</div>
	<form id="form1" method = "post" action = "new user.php">
		
		<div class = "input-group">
			<input type = "text" name = "FirstName" placeholder="FirstName">
		</div>
		
			<br>
		<div class = "input-group">
			<input type = "text" name = "LastName" placeholder="LastName">
		</div>
			<br>
		<div class = "input-group">
			<input type = "text" name = "Account_Number" placeholder="Account_Number">
		</div>
		
			<br>
		<div class = "input-group">
			
			<input type = "Password" name = "Password" placeholder="Password">
		</div>
		
		<br>
		<div class = "input-group">
			<input type = "text" name = "Ranks" placeholder="Ranks">
		</div>
		
		<br>
		<div class = "input-group">
			<input type = "text" name = "Contact" placeholder="Contact">
		</div>
		
			<br>
		<div class "input-group">
		<input name="Register" type="Submit" value="Register">
		 <input type = "Submit" name="Delete" value="Delete">
		 <input type = "Submit" name="Update" value="Update">
		<!--<button type = "Submit" name = "Register" class "button"><a href="home.html">Register</button>-->
		</div>
		
	</form>
	</div>
	
	
	<?php
    require ("dbConn.php");
    session_start();
    if(isset($_POST['Register'])){
	
		

        $FirstName =$_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Account_Number=$_POST['Account_Number'];
		$Password=$_POST['Password'];
		$Ranks=$_POST['Ranks'];
		$Contact =$_POST['Contact'];

        
        

        $sql = "insert into user_registry(FirstName, LastName, Account_Number, Password, Ranks, Contact) values ('$FirstName', '$LastName', '$Account_Number', '$Password', '$Ranks', '$Contact')";

        $result = mysqli_query($conn,$sql); #statement to insert into the table
        
        

        if($FirstName != "" && $LastName != "" && $Account_Number != "" && $Password != ""){
        	$_SESSION['FirstName'] = $FirstName;
			$_SESSION['LastName'] = $LastName;
			$_SESSION['Account_Number']=$Account_Number;
			$_SESSION['Password']=$Password;
			$_SESSION['Ranks']=$Ranks;
			$_SESSION['Contact'] = $Contact;
        	
        	
           header("Location: profile.php");
        }

        else{
            echo "error";
        }
    }
    if(isset($_POST['Delete']))
    {
   mysqli_query($conn,"delete from user_registry where Password='$_POST[Password]'"); 
    }
   if(isset($_POST['Update']))
    {
   mysqli_query($conn,"update user_registry set FirstName='$_POST[FirstName]', LastName='$_POST[LastName]', Password='$_POST[Password]', Ranks='$_POST[Ranks]', Contact='$_POST[Contact]' where Account_Number='$_POST[Account_Number]'") or die(mysqli_error($conn)); 
    }

?>	
	
	
</body>
</html>