<!DOCTYPE html>

<html>
<head>
	<style>
.error{
	
	color:red;
	width:50%;
	justify-content:center;
	font-weight:bolder;
	border-radius:30px;
	
}
.log{
	        width: 30%;
			border:2px solid #ccc;
			padding:30px;
			background:#fff;
			border-radius: 15px;
			padding-top: 30px;
}
**{
			font-family:sans-serif;
			box-sizing:border-box ;
		}
		body{
			background: #777;
			display:flex;
			justify-content:center;
			align-item:center;
			height: 2%;
			padding:30px;
			padding:10%;
		
		}
		input{
			display:block;
			border:2px solid #ccc;
			width: 95%;
			padding:10px;
			margin:10px auto;
		}
		button{
			float:right;
			background:goldenrod;
			padding: 10px 15px;
			color: #fff;
			border-radius:5px;
			margin-left: 10px;
			border: none;
		}
		.s{
			float:right;
			onhover[color]:blue;
            background:gray;
			border-radius:6px;

		}
		a{
			text-decoration: none;
			font-size:20px;
			padding:10px;
			border-radius:6px;
		}
		.l{
			float:left;
			onhover[color]:blue;
            background:gray;
			border:none;

		}

		</style>
</head>
<body >
	<div class="log">
<form action="check.php" method ="post">
	
<a class="l" href="logind.php">Log in </a>
<a class="s" href="sing.php">Sign up</a><br><br><br>
	Username<input type="text" name="mail" placeholder="username" placeholder="username" required />
	password<input type="password" name="pas" placeholder="Enter your password"/>
	<div class="error">
		<center>
	<?php
if(isset($_GET['connect']))
{
	echo $_GET['connect'];
}
?>
</center>
</div>

		  <button>log in</button>
		  <a href="resetpassword.php">forgot password?</a>


</form>
</div>
</body>
</html>