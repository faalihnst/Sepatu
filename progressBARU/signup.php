<html>
<header>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<nav class="navibar bg-dark">
		
		<div class="row nav-white">
			<div class="col-sm-2">
				<a href="home.html" class="navLinks">fito.com</a>
			</div>
			<div class="col-sm-2">
				<a href="new.html" class="navLinks">Arrival</a>
			</div>
			<div class="col-sm-2 dropdown">
				<div class="dropbtn">Brands</div>
				<div class="dropdown-content">
					<a href="#">Nike</a>
					<a href="#">Adidas</a>
					<a href="#">Air Jordan</a>
				</div>
			</div>
			<div class="col-sm-2">
				<a href="login.php" class="navLinks">Login</a>
			</div>
			<div class="col-sm-4">
				<input type="text" name="cari" placeholder="Search.." class="nav-black">
			</div>
		</div>
	</nav>
	<div class="navtop">
		<td><img src="http://pngimg.com/uploads/adidas/adidas_PNG17.png" style="width: 50px; height: 30px"></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Logo_NIKE.svg/1200px-Logo_NIKE.svg.png" style="width: 60px; height: 30px"></td>
		<td>&nbsp;&nbsp;<img src="https://s3.amazonaws.com/freebiesupply/large/2x/air-jordan-logo-png-transparent.png" style="width: 40px; height: 40px"></td>
	</div>
	<hr class="no-margin-line">
</header>
<body style="background-color: lightgrey;">
	<div class="row">
		<div class="col-lg-4 boks-signup">
			<form action="signup.php" method="post" name="signup">
				CREATE NEW ACCOUNT<br><br><br>
				Username:<br>
  				<input type="text" name="username" required><br>
  				Password:<br>
  				<input type="password" name="password" required><br>
				First Name:<br>
  				<input type="text" name="firstname" required><br>
  				Last Name:<br>
  				<input type="text" name="lastname" required><br>
  				Email Address:<br>
  				<input type="email" name="email" required><br><br>
  				<input type="submit" name="Submit" value="Submit">
  				<input type="reset"><br><br>
				<?php 
				if(isset($_POST['Submit'])) {
					include_once "config.php";
					$username = $_POST['username'];
					$password = $_POST['password'];
					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$email = $_POST['email'];
					
				$result = mysqli_query($mysqli, "INSERT INTO user Values('$username','$password','$firstname','$lastname','$email')");

				echo "Sign Up Success!. <a href='login.html'>Login Now!<br><br></a>";
				}?>
  				Have any account?<br>
  				<a onclick="window.location.href='login.html'" class="bayang-sign">Login</a><br>
  				now!!	
				</form>				
		</div>
	</div>		
	<div class="footer">
	<table style="width:100%">
		<th align="left">&nbsp;social</br><img src="https://cdn.vectorlogosupply.com/logos/large/2x/instagram-glyph-1-png-transparent-logo.png" style="width:30px; height:30px">&nbsp;<img src="https://image.flaticon.com/icons/svg/54/54300.svg" style="width:30px; height:30px"><img src="https://mbtskoudsalg.com/images1280_/black-facebook-logo-png-4.png" style="width:30px; height:30px"></th>
		<th></br>customer service</br><img src="https://png.icons8.com/windows/1600/whatsapp.png" style="width:30px; height:30px">&nbsp;&nbsp;: +6288888888</br><img src="https://cdn4.iconfinder.com/data/icons/proglyphs-mailing-and-messaging/512/Chat_Active-512.png" style="width:30px; height:30px">&nbsp;&nbsp;:@fitocom</th>
		<th>about us&nbsp;</br>&nbsp;</th>
	</table>
	</div>
</body>
</html>
