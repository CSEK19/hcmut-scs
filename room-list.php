<?php
// session_start();
// error_reporting(0);
// include('include/config.php');
// include('include/checklogin.php');
// check_login();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Manager | View Room List</title>

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
	<a id="button" class="btn btn-primary"href="room-list.php" target=_blank >Button</a>
	<div id="app">
		<?php include('include/sidebar.php');?>
		<div class="app-content">
			<?php include('include/header.php');?>
			<div class="main-content">
				<div class="wrap-content container" id="container">
					<!-- start: PAGE TITLE -->
					<section id="page-title">
						<div class="row">
							<div class="col-sm-8">
								<h1 class="mainTitle">Manager | View Room List</h1>
							</div>
							<ol class="breadcrumb">
								<li>
									<span>Manager</span>
								</li>
								<li class="active">
									<span>View Room List</span>
								</li>
							</ol>
						</div>
					</section>
					<div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div class="col-md-12">
								<h5 class="over-title margin-bottom-15">Room <span class="text-bold">List</span>
								</h5>

								
								<table class="table table-hover" id="sample-table-1">
									<thead>
										<tr>
											<th class="center">#</th>
											<th>Room ID</th>
											<th>Room Name</th>
										</tr>
									</thead>
									<tbody id = "room_list">	
										<tr>
											<td class="center">1.</td>
											<td class="hidden-xs" id = "room_list_id"></td>
											<td id = "room_list_name"></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
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
	<script type = "module" >
		import { collection, getDoc, getDocs, getFirestore, doc } from "https://www.gstatic.com/firebasejs/9.4.0/firebase-firestore.js"
		import { initializeApp } from "https://www.gstatic.com/firebasejs/9.4.0/firebase-app.js"

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

		let room_list_id = document.getElementById("room_list_id")
		let room_list_name = document.getElementById("room_list_name")

		async function GetRoomList() {
			
			var ref = doc(db, "Room", "1")
			const docSnap = await getDoc(ref)

			if (docSnap.exists()) {
				let data = docSnap.data()
				room_list_id.innerHTML = data['Room id']
				room_list_name.innerHTML = data['Room name']
			}
		}

		button.addEventListener("onClick", GetRoomList())
	</script>
	<script>
<<<<<<< HEAD
		function GetRoomView(){
			window.location.href = 'room-view.php';
		}
		button.addEventListener("onClick", GetRoomView())
=======
		// function GetRoomList(){
		// 	window.location.href = 'room-view.php';
		// }
		// button.addEventListener("onClick", GetRoomList())
>>>>>>> dev
	</script>
	<!-- end: JavaScript Event Handlers for this page -->
	<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>