<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Manager-Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<h2>Manager Login</h2>
				</div>

				<div class="box-login">
					<!-- <form class="form-login"> -->
						<fieldset>
							<legend>
								Sign in to your account
							</legend>
							<p>
								Please enter your name and password to log in.<br />
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Username" id="name">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password" id = "pwd">
									<i class="fa fa-lock"></i>
									 </span>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary pull-right" id="loginn" name="submit">
									Login <i class="fa fa-arrow-circle-right" ></i>
								</button>
							</div>
							
						</fieldset>
					<!-- </form> -->
				</div>

			</div>
		</div>

		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
		
		<script type="module">
			import { getAuth, signInWithEmailAndPassword, onAuthStateChanged } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-auth.js"
			import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js"

			const firebaseConfig = {
				apiKey: "AIzaSyBSt9DbBuwEPjJglqs4YO_toKEvgnn47Vw",
				authDomain: "smartiot-4467f.firebaseapp.com",
				projectId: "smartiot-4467f",
				storageBucket: "smartiot-4467f.appspot.com",
				messagingSenderId: "951613520553",
				appId: "1:951613520553:web:9ae29d867493555d3507b8",
				measurementId: "G-C2RLD605K5"
			}

			const app = initializeApp(firebaseConfig)
			const auth = getAuth();
			
			//Login event
			document.getElementById('loginn').addEventListener('click', (e) => {
				var email = document.getElementById('name').value;
				var password = document.getElementById('pwd').value;

				signInWithEmailAndPassword(auth, email, password)
					.then((userCredential) => {})
					.catch((error) => {
						const errorCode = error.code;
						const errorMessage = error.message;

						alert(errorMessage);
					});

			});

			const user = auth.currentUser;
			//User state management
			onAuthStateChanged(auth, (user) => {
				if (user) {
					window.location.replace("dashboard.php")
				} else {
					// window.location.replace("index.php")
				}
			});
			
		</script>
	
	</body>
	<!-- end: BODY -->
</html>