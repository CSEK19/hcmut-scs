<!DOCTYPE html>
<html lang="en">
<style type="text/css">
	#chart-container {
		margin: 0 auto;
		width: 30%;
	}
</style>

<script type="text/javascript" src="js/chart.js"></script>
<!-- <script type="text/javascript" src="js/chart.min.js"></script> -->
<script src="js/canvasjs.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<head>
	<title>Manager | Manage Room</title>

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

<script type="text/javascript">
		// let light_on = document.getElementById("light_on_button")
		// let light_off = document.getElementById("light_off_button")
		function ControlLight(url = '', data = {}) {
			$.ajax({
				url: url,
				dataType: 'json',
				type: 'post',
				headers: {
					'Content-Type': 'application/json',
					// 'Host': 'io.adafruit.com',
					// 'Content-Length': 24,
					'X-AIO-Key': "<Adafruit key>"
				},
				data: JSON.stringify(data),
				success: function(data, textStatus, jQxhr) {
					console.log('Successfully update data');
				},
				error: function(jqXhr, textStatus, errorThrown) {
					console.log(errorThrown);
				}
			});
    	}
		// const api_key= require('adafruit_key.json');
		function TurnOnLight() {
			// console.log('haha');
			let url = 'https://io.adafruit.com/api/v2/KanNan312/feeds/bbc-relay/data';
			ControlLight(url, {"value": 1});
		}
		function TurnOffLight() {
			let url = 'https://io.adafruit.com/api/v2/KanNan312/feeds/bbc-relay/data';
			ControlLight(url, {"value": 0});
		}
		
		var tmp = "";
		// light_on.addEventListener("click", TurnOnLight())
		// light_off.addEventListener("onClick", TurnOffLight);
		function ShowImage(){
			let confirm = document.getElementById("confirm")
			confirm.innerHTML = '<div class="modal fade" id="myModal" role="dialog"> <div class="modal-dialog"> <!-- Modal content--> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> <h4 class="modal-title">Image</h4> </div> <div class="modal-body text-center"> <img class = "img-responsive"  src="data:image/jpg;base64,' + tmp + '"\width="100%" height="100%"/> </div> <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </div> </div> </div> </div>'
			var confirmBox = $("#confirm");
				confirmBox.find(".message").text("OK");
				confirmBox.find(".yes").unbind().click(function () {
					confirmBox.hide();
				});
				confirmBox.find(".yes").click("YES");
				confirmBox.show();
		}
	</script>


<body>
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
								<h1 class="mainTitle">Manager | Room Detail</h1>
							</div>
							<ol class="breadcrumb">
								<li>
									<span>Manager</span>
								</li>
								<li class="active">
									<span>Room Detail</span>
								</li>
							</ol>
						</div>
					</section>
					<div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div class="col-md-12">
								<h5 class="over-title margin-bottom-15">Room <span class="text-bold">Detail</span>
								</h5>

								<table border="1" class="table table-bordered">
									<tr align="center">
										<td colspan="4" style="font-size:20px;color:blue"><b>
												Information</b></td>
									</tr>

									<tr>
										<th scope>Room ID</th>
										<td id = "room_id"></td>
									</tr>
									<tr>
										<th scope>Room Name</th>
										<td id="room_name"></td>
									</tr>
								</table>
								<table id="datatable" class="table table-bordered dt-responsive nowrap"
									style="border-collapse: collapse; border-spacing: 10; width: 100%; text-align:center">
									<tr align="center">
										<th colspan="8" style="text-align:left">Room Status</th>
									</tr>
									<tr>
										<th style="text-align:center">Timestamp</th>
										<th style="text-align:center">Number People</th>
										<th style="text-align:center">Light System Status</th>
										<th style="text-align:center">Door Status</th>
										<th style="text-align:center">Image</th>
										<th style="text-align:center">Light System Controller</th>
									</tr>
									<tr>
										<td id = "timestamp"></td>
										<td id = "num_people"></td>
										<td id = "light_status"></td>
										<td id = "door_status"></td>
										<td><button class="btn btn-primary" id="image_button" data-toggle="modal" data-target="#myModal" onclick="ShowImage()">Show image</button></td>
										<td>
											<button class="btn btn-success" id="light_on_button" onclick="TurnOnLight()">ON</button>
											<button class="btn btn-danger" id="light_off_button" onclick="TurnOffLight()">OFF</button>

										</td>
									</tr>
								</table>

								<table id="datatable" class="table table-bordered dt-responsive nowrap"
									style="border-collapse: collapse; border-spacing: 10; width: 100%; text-align:center">
									<tr align="center">
										<th colspan="8" style="text-align:left">Statistics Room Data</th>
									</tr>
									<tr>
										<th style="text-align:center">Average People Per Week</th>
										<th style="text-align:center">Average People Per Month</th>
										<th style="text-align:center">Total time inuse</th>
									</tr>
									<tr>
										<td id = "ave_people_week"></td>
										<td id = "ave_people_month"></td>
										<td id = "total_time_inuse"></td>
										</td>
									</tr>
								</table>
								<div class="d-grid">
  									<button type="button" id="report_button" class="btn btn-info btn-block">Generate report</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div id="confirm">
	</div>
	<!-- start: FOOTER -->
	<?php #include('include/footer.php');?>
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
	<script type="module" > 
		import { collection, getDoc, getDocs, getFirestore, doc, onSnapshot } from "https://www.gstatic.com/firebasejs/9.4.0/firebase-firestore.js"
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
		let first_time = true 

		let room_id = document.getElementById("room_id")
		let room_name = document.getElementById("room_name")
		let timestamp = document.getElementById("timestamp")
		let num_people = document.getElementById("num_people")
		let light_status = document.getElementById("light_status")
		let door_status = document.getElementById("door_status")
		let image = document.getElementById("image_button")
		let light = document.getElementById("light")
		// var tmp = "";

		const check = onSnapshot(collection(db, "Room"), (snapshot) => {
            if (snapshot.docs.length > 0) {
                snapshot.docs.forEach(doc => {
                    // doc is a DocumentSnapshot with actual data
                    const data = doc.data();
                    console.log(data)
					room_id.innerHTML = data['Room id']
					room_name.innerHTML = data['Room name']

					let record = data['Records']
					let size = record.length
					record = record[size - 1]

					timestamp.innerHTML = record['Time stamp'].toDate().toString().split('GMT')[0]
					light_status.innerHTML = (record['Light status'] == true) ? 'ON' : 'OFF'
					num_people.innerHTML = record['Number of people']
					door_status.innerHTML = (record['Door status'] == true) ? 'OPEN' : 'CLOSE'
                })
            }

        });
		
	
		const checkImage = onSnapshot(collection(db, "Frame"), (snapshot) => {
            if (snapshot.docs.length > 0) {
                snapshot.docs.forEach(doc => {
                    // doc is a DocumentSnapshot with actual data
                    const data = doc.data();
					console.log('New frame')
					tmp = data['frame64']
					// console.log(frame)
					// update image
					// tmp = frame
					// confirm.innerHTML = '<div class="modal fade" id="myModal" role="dialog"> <div class="modal-dialog"> <!-- Modal content--> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> <h4 class="modal-title">Image</h4> </div> <div class="modal-body text-center"> <img class = "img-responsive"  src="data:image/jpg;base64,' + frame + '"\width="100%" height="100%"/> </div> <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </div> </div> </div> </div>'
                })
            }
		});

		async function GetRoom() {
			if (first_time === true)
			{
				first_time = false;
				var ref = doc(db, "Room", "1")
				console.log(ref)
				const docSnap = await getDoc(ref)
				console.log(docSnap)
				if (docSnap.exists()) {
					let data = docSnap.data()

					room_id.innerHTML = data['Room id']
					room_name.innerHTML = data['Room name']

					let record = data['Records']
					let size = record.length
					record = record[size - 1]

					timestamp.innerHTML = record['Time stamp'].toDate().toString().split('GMT')[0]
					light_status.innerHTML = (record['Light status'] == true) ? 'ON' : 'OFF'
					num_people.innerHTML = record['Number of people']
					door_status.innerHTML = (record['Door status'] == true) ? 'OPEN' : 'CLOSE'
				}
			}	
		}

		// image_button.addEventListener("onClick", GetImage())


	</script>

	<!-- end: JavaScript Event Handlers for this page -->
	<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>