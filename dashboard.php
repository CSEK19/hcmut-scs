<!DOCTYPE html>
<html lang="en">

<head>
	<title>Manager | Dashboard</title>

	<link
		href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
		rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
	<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
	<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


</head>

<body>
	<div id="app">

		<?php include('include/sidebar.php');?>
		<div class="app-content">

			<?php include('include/header.php');?>

			<!-- end: TOP NAVBAR -->
			<div class="main-content">
				<div class="wrap-content container" id="container">
					<!-- start: PAGE TITLE -->
					<section id="page-title">
						<div class="row">
							<div class="col-sm-8">
								<h1 class="mainTitle">Manager | Dashboard</h1>
							</div>
							<ol class="breadcrumb">
								<li>
									<span>Manager</span>
								</li>
								<li class="active">
									<span>Dashboard</span>
								</li>
							</ol>
						</div>
					</section>
					<!-- end: PAGE TITLE -->
					<!-- start: BASIC EXAMPLE -->
					<div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div class="col-sm-4">
								<div class="panel panel-white no-radius text-center">
									<div class="panel-body">
										<span class="fa-stack fa-2x"> <i
												class="fa fa-square fa-stack-2x text-primary"></i> <i
												class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
										<h2 class="StepTitle">Total People</h2>

										<p class="links cl-effect-1 lead">
											<a href="#" id = "total_people">
											</a>	
										</p>
									</div>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="panel panel-white no-radius text-center">
									<div class="panel-body">
										<span class="fa-stack fa-2x"> <i
												class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa   fa-desktop
 fa-stack-1x fa-inverse"></i> </span>
										<h2 class="StepTitle">Room Active</h2>
										<p class="links cl-effect-1 lead">
											<a href ="#">
												<td>
													<span id ="num_active_room"></span>
														
											</a>
											/
											<a href = "#">
											<td>
												<span id ="total_room">  </span>
											</td>
											</a>
										</p>
									</div>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="panel panel-white no-radius text-center">
									<div class="panel-body">
										<span class="fa-stack fa-2x"> <i
												class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa   fa-calendar
 fa-stack-1x fa-inverse"></i> </span>
										<h2 class="StepTitle">Average N.o People</h2>
										<p class="links cl-effect-1 lead">
											Today: 
											<a href ="#">
												<td>
													<span id = "ave_people_day"></span>
												</td>
											</a>
											| &nbsp;&nbsp; This week:
											<a href ="#">
												<td>
													<span id = "ave_people_week"></span>
												</td>
											</a>
										</p>
									</div>
								</div>
							</div>
							


							<div class="col-sm-4">
								<div class="panel panel-white no-radius text-center">
									<div class="panel-body">
										<span class="fa-stack fa-2x"> <i
												class="fa fa-square fa-stack-2x text-primary"></i> <i
												class="fa fa-power-off fa-stack-1x fa-inverse"></i> </span>
										<h2 class="StepTitle">Total Light usage</h2>
										<p class="links cl-effect-1 lead">
											Today:
											<a href="#">
												<td>
													<span id = "light_usage_day"></span>
												</td>
											</a>
											<br>
											This week: 
											<a href = "#">
												<td>
													<span id = "light_usage_week"></span>
												</td>
											</a>
										</p>
									</div>
								</div>
							</div>





							<!-- end: SELECT BOXES -->

						</div>
					</div>
				</div>
				<!-- start: FOOTER -->
				<?php include('include/footer.php');?>
				<!-- end: FOOTER -->

				<!-- start: SETTINGS -->
				<?php include('include/setting.php');?>

				<!-- end: SETTINGS -->
			</div>
			<!-- start: MAIN JAVASCRIPTS -->
			<script src="vendor/jquery/jquery.min.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
			<script src="vendor/modernizr/modernizr.js"></script>
			<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
			<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
			<script src="vendor/switchery/switchery.min.js"></script>
			<!-- end: MAIN JAVASCRIPTS -->
			<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
			<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
			<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
			<script src="vendor/autosize/autosize.min.js"></script>
			<script src="vendor/selectFx/classie.js"></script>
			<script src="vendor/selectFx/selectFx.js"></script>
			<script src="vendor/select2/select2.min.js"></script>
			<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
			<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
			<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
			<!-- start: CLIP-TWO JAVASCRIPTS -->
			<script src="assets/js/main.js"></script>
			<!-- start: JavaScript Event Handlers for this page -->
			<script src="assets/js/form-elements.js"></script>
			<script>
				jQuery(document).ready(function () {
					Main.init();
					FormElements.init();
				});
			</script>

			<script type="module">
				import { collection, getDoc, getDocs, getFirestore, doc, onSnapshot } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-firestore.js"
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
				const db = getFirestore(app)

				var num_active_room = document.getElementById("num_active_room")
				var total_room = document.getElementById("total_room")
				var total_people = document.getElementById("total_people")
				var ave_people_day = document.getElementById("ave_people_day")
				var ave_people_week = document.getElementById("ave_people_week")
				var light_usage_day = document.getElementById("light_usage_day")
				var light_usage_week = document.getElementById("light_usage_week")

				console.log(total_people)
				function convertLightUsageTime(seconds) {
					let hour = Math.floor(seconds / 3600)
					let min = Math.floor( (seconds % 3600) / 60)
					let res = ""
					if (hour > 0) {
						if (min > 0) {
							res = hour.toString() + " hour(s) " + min.toString() + " minute(s)"
						}
						else {
							res = hour.toString() + " hour(s)"
						}
					}
					else {
						res = min.toString() + " minute(s)"
					}
					return res
				}
				
				const check = onSnapshot(collection(db, "Room"), (snapshot) => {
					let n_people = 0	// number of people currently
					let people_day = 0  // average number of people today
					let people_week = 0 // average number of people this weke
					let light_day = 0
					let light_week = 0
					let n_active = 1
					let n_room = snapshot.docs.length
					total_room.innerHTML = n_room
					if (n_room > 0) {
						snapshot.docs.forEach(doc => {
							const data = doc.data()
							let record = data['Status']
							n_people += record['Number of people']

							// update statistics
							let statistics = data['Statistics']
							let last_stat = statistics[statistics.length - 1]
							
							// Average people today, today light usage today
							people_day += Math.round(last_stat['People'] * 10) / 10
							light_day += last_stat['Usage']

							// Advanced statistics ...
							let ave_people = 0
							let day_cnt = 0
						
							// calculate aggregate statistics in the last 7 day
							statistics.slice(-7).forEach((stat) => {
								day_cnt += 1
								ave_people += stat['People']
								// Total light usage per week
								light_week += stat['Usage']
							})
							ave_people = Math.round(ave_people / day_cnt * 10) / 10
							// Average people per week
							people_week += ave_people
						})
					}
					// calculate average among rooms
					people_day = Math.round(people_day / n_room * 10) / 10
					people_day = Math.round(people_week / n_room * 10) / 10

					// Update HTML element
					console.log(num_active_room)
					num_active_room.innerHTML = n_active
					total_people.innerHTML = n_people
					ave_people_day.innerHTML = people_day
					ave_people_week.innerHTML = people_week
					light_usage_day.innerHTML = convertLightUsageTime(light_day)
					light_usage_week.innerHTML = convertLightUsageTime(light_week)


				});
			</script>
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

			const user = auth.currentUser;
			onAuthStateChanged(auth, (user) => {
				if (user) {
					
				} else {
					window.location.replace("index.php")
				}
			});
			
		</script>

			<!-- end: JavaScript Event Handlers for this page -->
			<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>