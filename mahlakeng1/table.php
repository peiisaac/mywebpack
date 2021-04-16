
<html>
<head>
<meta charset="utf-8">
<title>Pei 's Online Banking</title>
<link rel = "stylesheet" href ="index.css">
</head>

<body bgcolor="green">
	<header id = "header">
		<h1><center>Welcome to Pei 's Online Banking</center></h1>
		
		
	<div id="stono">
	
	<nav id = "top_manu">
		<ul>
			<li><a href="first.html">LOGIN</a></li>
			<li class="current"><a href="table.html">USER DETAILS</a></li>
			<li><a href="userd.html">DETAILS</a></li>
			<li><a href="design.html">CONTACT</a></li>
			<li><a href="view.html">SERVICES</a></li>
			<li><a href="v.html">ABOUT</a></li>
			<li><a href="home.html">HOME</a></li>
		</ul>
	</nav>
	</div>
	</header>

 
	
<div id="section2">
	
	<div class = "header">
		<h2><center>User Details</center></h2>
	</div>
	
	<div id="search">
	 <button type = "Submit" name="Delete" id="butt">Delete<input type="text"  placeholder="Delete" ></button>
	
	 <button type = "Submit" name="Update" id="butt">Update</button>
	 
	
	
		
	
	
		<a href="new user.html"><font color="white"><button id="butt">Register_New-User</button></font></a>
		</div>
	
		<br>
		<br>
	

	<table id="table" border="25">
		<tr>
		<th>FirstName</th>
		
		<th>lastName</th>
		
		<th>A/C Number</th>

		<th>Password</th>
		
		<th>Ranks</th>

		
		<th>Contact</th>
		</tr>
		<?php
		$conn=mysqli_connect("localhost","root","","bank");

		$sql = "select FirstName, LastName, Account_Number, Password, Ranks, Contact from user_registry";
		$result = mysqli_query($conn,$sql); #statement to insert into the table
		if($result -> num_rows>0){
			while ($row = $result -> fetch_assoc()) {
				echo "<tr><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["Account_Number"]."</td><td>".$row["Password"]."</td><td>".$row["Ranks"]."</td><td>".$row["Contact"]."</td></tr>";
				# code...
			}
			echo "</table>";
		}
		else{
			echo"0 result";
		}
        

		$conn->close();

		?>

		
		
		
	</table>
	</div>
</body>
</html>
