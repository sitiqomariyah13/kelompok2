<html>
	<head>
		<title>LOGIN</title>
	<style>
	.p {
		padding: 0;
		margin: 0;
		box-sizing: border-box;
		font-family: "Script MT Bold";
		font-size: 45px;
	}
	body {
		background-image: url("1.png");
		background-repeat: no-repeat;
		background-size: 1350px;
	}
	.konten {
		background: #fbefed;
		width: 350px;
		margin: 222px auto 0;
		border-radius: 16px;
		min-height: 256px;
		overflow: hidden;
	}
	.kepala {
		background-color: rgba(233,155,143,0.7);
		padding: 10px 22px;
		height: 60px;
	}
	.kepala h2.judul {
		color: #fff;
		font-weight: normal;
		line-height: 40px;
		display: inline-block;
	}
	.batas {
		padding: 10px 22px 0;
		color: #808080;
	}
	.batas .grup {
		margin: 16px 0;
	}
	.batas .grup label, 
	.batas .grup input {
		display: block;
	}
	.batas .grup label {
		font-size: 13px;
		margin-bottom: 10px;
	}
	.batas .grup input[type="text"],
	.batas .grup input[type="password"] {
		width: 100%;
		height: 30px;
		padding: 0 10px;
		background: #eeeeee;
		color: #808080;
	}
	.batas .grup input[type="submit"]{
		background: #e99b8f;
		padding: 4px 16px;
		margin: 0 auto;
		border: 1px solid black;
		border-radius: 2px;
		color: #222;
		cursor: pointer;
	}
	</style>
	</head>
	<body>
		<form method="POST" action="">
		<div class="konten">
		<div class="kepala">
			<h2 class="p" text-align="center"> Instagram</h1>
		</div>
		<div class="batas">
			<form action="#" method="post">
		<div class="grup">
			<input type="text" name="username" placeholder="Phone number, email or username">
		</div>
		<div class="grup">
			<input type="text" name="password" placeholder="Password">
		</div>
		<div class="grup">
			<input type="submit" name="Signin" value="Sign In">
		</div>
		 <tr>
            	<td>Forgot your login details?</td>
            	<td><a href="">Get help signing in </a></td>
            </tr>
	</form>
    <?php 
    	
    	if (isset($_POST['Signin'])) {
		 		$username =  $_POST['username'];
    			$password =  $_POST['password'];
    			$sigin =  $_POST['Signin'];

		 		echo "<br><br>selamat ".$username. ", anda berhasil Login";
		 		
		 	}
     ?>
	</div>
	</div>
	</body>
</html>