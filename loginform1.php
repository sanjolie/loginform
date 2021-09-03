<link rel="stylesheet" href="login.css">
<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="demo";
	$con=mysqli_connect($host,$user,$pass,$db);
	if(!$con)
		die("could not connect to database".$mysqli_error());

	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$uname=$_POST['username'];
		$password=$_POST['password'];

		$x="select * from authentication where username='$uname' and password='$password' ";
		
		$result=mysqli_query($con,$x);
		if(mysqli_num_rows($result)==1)
		{
			echo"<div class='login-page'>";
			 echo"<div class='form'>";
			    echo"<div class='login'>";
                 echo"<div class='login-header'>";
                  echo"<h3>LOGIN SUCCESSFULL</h3>";
			     echo"</div>";
				echo"</div>";
			echo"<form class='login-form' method='post' action='login.html'>";
			echo "Username and password is accepted.....";
			echo"<br>";
			echo"<br>";
			echo "<button>GO BACK</button>";
			echo"</form>";
			echo"</div>";
			echo"</div>";
	
		}
		else
		{
			echo"<div class='login-page'>";
			 echo"<div class='form'>";
			    echo"<div class='login'>";
                 echo"<div class='login-header'>";
                  echo"<h3>LOGIN decine</h3>";
			     echo"</div>";
				echo"</div>";
			echo"<form class='login-form' method='post' action='login.html'>";
			echo "Username and password is incorrect...";
			echo"<br>";
			echo"<br>";
			echo "<button>Try Again</button>";
			echo"</form>";
			echo"</div>";
			echo"</div>";
		
		}
	}
	mysqli_close($con);
?>