
	<?php
    require ("dbConn.php");
    if(isset($_POST['Login'])){

        $user =$_POST['FirstName'];
        $pass = $_POST['Password'];
        $count = 0;
        $sql = "select * from user_registry where FirstName = '$user' and Password = '$pass';";
       $conn=mysqli_connect("localhost","root","","bank");
        if($results = mysqli_query($conn,$sql)){
            while($row = mysqli_fetch_array($results)){
                $count += 1;
            }
            if($count > 0){
                echo"you are successfully loged in";

                header("Location:home.php");
            }
            else
                die("make sure you have registered");
                
        }
        else{
            die("failed to connect");
        }
    }
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Pei 's Online Banking</title>
	<link rel = "stylesheet" href ="index.css">

</head>
<body bgcolor="green">
<div id="section1">
	<div class = "header">
		<h2>User Login</h2>
	</div>
	
	<form  id="form" method = "post" action = "login.php">
		<div class = "input-group">
			<input type = "text" name = "FirstName" placeholder="FirstName">
		</div>
		
			<br>
		<div class = "input-group">
			
			<input type = "text" name = "Password" placeholder="Password">
		</div>
			
			<br>
		
		<div >
		<input id="form3" value="Login" type="submit" name="Login">
		<p><a href="home.php"></a></p>
		</div>
		
		<div>
		
			<a href="new user.html"><font color="white"><p id = "group">click here to Register</p></a>
		
		</div>
	
			
	</form>
	</div>


</body>
</html>