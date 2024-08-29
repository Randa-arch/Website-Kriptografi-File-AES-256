<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="login1.css">
	<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>	
    <script src="https://icons.getbootstrap.com/"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	
</head>
<body>
	<header>
		<header>
			<div class="container">
                <div class="header-content">    
                    <a href="https://diskominfotik.sumbarprov.go.id/"><img style="max-width:60px; margin-bottom:8px;" src="tuah.png"></a>
                    <a href="https://csirt.sumbarprov.go.id/"><img style="max-width:85px; margin-top: 2px;" src="logocsirt.png"></a>
                    <a href="https://www.unand.ac.id/"><img style="max-width:80px;" src="unand.png"></a>
                </div>
            </div>
		</header>
	</header>
	<div class="contens">	
		<div class="container">
				<div class="login-content">
					<form class="login-form" action="auth.php" method="post">
						<a href="login.php"><img src="aes.png" alt=""></a>
						<div class="input-div one">
						<div class="i">
								<i class="fas fa-user"></i>
						</div>
						<div class="input-field">
								<input class="form-control" type="text" name="username" autofocus autocomplete="off" required spellcheck="false">
								<label>Username</label>
						</div>
						</div>
						<div class="input-div pass">
						<div class="i"> 
								<i class="fas fa-lock"></i>
						</div>
						<div class="input-field">
								<input class="form-control" type="password" name="password" required spellcheck="false">
								<label>Password</label>
						</div>
						</div>
                        <div class="log">    
						    <button class="btn btn-primary btn-block" name="login">Login</button><br>
                        </div>
                            <!-- <input type="submit" class="btn" value="Login"> -->
					</form>
					<!--<div class="daftar">
						<a href="#"><p>Silahkan daftar jika belum memiliki akun!</p></a>
					</div>-->
				</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<center><img src="fotlogo.png"><center>
			<p>“You effect the world by what you browse.” — Tim Berners-Lee</p>
			<p><b>Dinas Komunikasi, Informatika, dan Statistik Sumamtera Barat</b></p>
			<p><b>Magang 2023 | </b>Project by : <span><a href="https://www.instagram.com/randamultri/">RND</a></span></p>
		</div>
	</footer>    
</body>
</html>
