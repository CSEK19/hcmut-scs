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
<!-- <script src="js/canvasjs.min.js"></script> -->
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
	<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/css/bootstrap-switch-button.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/dist/bootstrap-switch-button.min.js"></script>


</head>

<script type="text/javascript">		

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
										<th style="text-align:center">Number of People</th>
										<th style="text-align:center">Light Status</th>
										<th style="text-align:center">Door Status</th>
										<th style="text-align:center">Room Status</th>
										<th style="text-align:center">Image</th>
										<th style="text-align:center">Light System Controller</th>
									</tr>
									<tr>
										<td id = "timestamp"></td>
										<td id = "num_people"></td>
										<td id = "light_status"></td>
										<td id = "door_status"></td>
										<td>
											<p id = "room_status" style="font-weight: bold; margin:0"></p>
										</td>
										<td><button class="btn btn-primary" id="image_button" data-toggle="modal" data-target="#myModal">Show image</button></td>
										<td>
											<!-- <button class="btn btn-success" id="light_on_button" onclick="TurnOnLight()">ON</button>
											<button class="btn btn-danger" id="light_off_button" onclick="TurnOffLight()">OFF</button> -->
											<input type="checkbox" value="0" data-toggle="switchbutton" checked data-onlabel="OFF" data-offlabel="ON" data-onstyle="danger" data-offstyle="success" id="light_toggle">
										</td>
									</tr>
								</table>

								<table id="" class="table table-bordered dt-responsive nowrap"
									style="border-collapse: collapse; border-spacing: 10; width: 100%; text-align:center">
									<tr align="center">
										<th colspan="8" style="text-align:left">Room Statistics <span style="font-weight: normal; font-style: italic;" id ="stat_date">123</span></th>
									</tr>
									<tr>
										<th style="text-align:center">Average Number of People</th>
										<th style="text-align:center">Total light usage</th>
									</tr>
									<tr>
										<td id = "ave_people_day"></td>
										<td id = "light_usage_day"></td>
										</td>
									</tr>
								</table>


								<table id="advanced_statistics" class="table table-bordered dt-responsive nowrap"
									style="border-collapse: collapse; border-spacing: 10; width: 100%; text-align:center">
									<tr align="center">
										<th colspan="8" style="text-align:left">Advanced Statistics</th>
									</tr>
									<tr>
										<th style="text-align:center">Weekly Average People</th>
										<th style="text-align:center">Weekly Light Usage</th>
										<th style="text-align:center">Monthly Light Usage</th>
									</tr>
									<tr>
										<td id = "ave_people_week"></td>
										<td id = "light_usage_week"></td>
										<td id = "light_usage_month"></td>
										</td>
									</tr>
								</table>
								<!-- <div class="d-grid">
  									<button type="button" id="report_button" class="btn btn-info btn-block">Generate report</button>
								</div> -->
								<div class = "center">
									<button type="button" id="report_button" class="btn btn-info btn-lg">Generate report</button>
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

		var room_id = document.getElementById("room_id")
		var room_name = document.getElementById("room_name")
		var timestamp = document.getElementById("timestamp")
		var num_people = document.getElementById("num_people")
		var light_status = document.getElementById("light_status")
		var door_status = document.getElementById("door_status")
		var image_button = document.getElementById("image_button")
		var img_64 = "";
		var light = document.getElementById("light")
		var room_status = document.getElementById("room_status")
		var light_button = document.getElementById("light_toggle")

		// statistics
		var stat_date = document.getElementById("stat_date")
		var ave_people_day = document.getElementById("ave_people_day")
		var light_usage_day = document.getElementById("light_usage_day")

		var ave_people_week = document.getElementById("ave_people_week")
		var light_usage_week = document.getElementById("light_usage_week")
		var light_usage_month = document.getElementById("light_usage_month")

		// function to find out the view id
		function findGetParameter(parameterName) {
			var result = null, tmp = [];
			location.search.substr(1).split("&").forEach(function (item) {
				tmp = item.split("=");
				if (tmp[0] === parameterName)
					result = decodeURIComponent(tmp[1]);
			});
    		return result;
		}



		// send light control signal to adafruit
		function ControlLight(url = '', data = {}) {
			$.ajax({
				url: url,
				dataType: 'json',
				type: 'post',
				headers: {
					'Content-Type': 'application/json',
					// 'Host': 'io.adafruit.com',
					// 'Content-Length': 24,
					'X-AIO-Key': ""
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

		// event listener for light toggler
		light_button.addEventListener('change', function() {
			let url = 'https://io.adafruit.com/api/v2/KanNan312/feeds/bbc-relay/data';
			if(this.checked) {
				console.log("ON");
				ControlLight(url, {"value": 1});
			}
			else {
				console.log("OFF");
				ControlLight(url, {"value": 0});
			}
		})
		
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
		var id = findGetParameter('viewid');
		// listen for changes in document
		const check = onSnapshot(doc(db, "Room", id), (doc) => {
				if (doc.exists() == false) {
					console.log("No statistics")
					return
				}
				const data = doc.data()

				// room information
				room_id.innerHTML = data['Id']
				room_name.innerHTML = data['Name']
				
				// update current status
				let record = data['Status']
				timestamp.innerHTML = record['Timestamp'].toDate().toString().split('GMT')[0]
				// if (light_button.checked != record['Light status']) {
				// 	console.log('kaka')
				// 	light_button.click()
				// }
				light_status.innerHTML = (record['Light status'] == true) ? 'ON' : 'OFF'
				num_people.innerHTML = record['Number of people']
				door_status.innerHTML = (record['Door status'] == true) ? 'OPEN' : 'CLOSE'
				let alert = false;
				// Record["Alert"]
				if (record["Alert"] == true) {
					room_status.innerHTML = 'Please close the door!'
					room_status.style.color = "red"
				}
				else {
					room_status.innerHTML = 'Normal'
					room_status.style.color = "green";
				}

				// update img_64 string
				let frame_data = data['Frame']
				img_64 = frame_data['Frame64']

				// update statistics
				let statistics = data['Statistics']
				let last_stat = statistics[statistics.length - 1]
				console.log(last_stat)
				// set HTML element
				stat_date.innerHTML = last_stat['Date']
				ave_people_day.innerHTML = Math.round(last_stat['People'] * 10) / 10

				let time_converted = convertLightUsageTime(last_stat['Usage'])
				light_usage_day.innerHTML = time_converted

				// Advanced statistics ...
				let ave_people = 0
				let light_week = 0
				let light_month = 0
				let day_cnt = 0
				statistics.slice(-7).forEach((stat) => {
					day_cnt += 1
					ave_people += stat['People']
					light_week += stat['Usage']
				})
				statistics.slice(-7).forEach((stat) => {
					light_month += stat['Usage']
				})

				ave_people_week.innerHTML = Math.round(ave_people / day_cnt * 10) / 10
				light_usage_week.innerHTML = convertLightUsageTime(light_week)
				light_usage_month.innerHTML = convertLightUsageTime(light_month)


		});


		// const check = onSnapshot(collection(db, "Room"), (snapshot) => {
        //     if (snapshot.docs.length > 0) {
        //         snapshot.docs.forEach(doc => {
        //             // doc is a DocumentSnapshot with actual data
        //             const data = doc.data();
        //             console.log(data)
		// 			room_id.innerHTML = data['Room id']
		// 			room_name.innerHTML = data['Room name']

		// 			let record = data['Records']
		// 			let size = record.length
		// 			record = record[size - 1]

		// 			timestamp.innerHTML = record['Time stamp'].toDate().toString().split('GMT')[0]
		// 			light_status.innerHTML = (record['Light status'] == true) ? 'ON' : 'OFF'
		// 			num_people.innerHTML = record['Number of people']
		// 			door_status.innerHTML = (record['Door status'] == true) ? 'OPEN' : 'CLOSE'

		// 			if(record['Light status'] == true && record ['Door status'] == true)
		// 				room_status.innerHTML = 'Warning'
		// 				else 
		// 				room_status.innerHTML = 'Normal'
        //         })
        //     }

        // });
		
	

		// images
		function ShowImage(){
			console.log("Display image")
			let confirm = document.getElementById("confirm")
			confirm.innerHTML = '<div class="modal fade" id="myModal" role="dialog"> <div class="modal-dialog"> <!-- Modal content--> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> <h4 class="modal-title">Room Image</h4> </div> <div class="modal-body text-center"> <img class = "img-responsive"  src="data:image/jpg;base64,' + img_64 + '"\width="100%" height="100%"/> </div> <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </div> </div> </div> </div>'
			var confirmBox = $("#confirm");
				confirmBox.find(".message").text("OK");
				confirmBox.find(".yes").unbind().click(function () {
					confirmBox.hide();
				});
				confirmBox.find(".yes").click("YES");
				confirmBox.show();
		}

		image_button.addEventListener('click', ShowImage)


		// generate report
		async function GetRecords(view_id) {
			let records = []
			let collection_ref = collection(db, "Room/" + view_id + "/Day")
			const snapshot = await getDocs(collection_ref)
			snapshot.forEach((doc) => {
				let data = doc.data()
				records = records.concat(data["Records"])
			})
			return records
		}

		async function GenerateReport() {
			let records = await GetRecords(id)
			console.log(records)
		}

		var report_button = document.getElementById('report_button')
		report_button.addEventListener('click', GenerateReport)


	</script>

	<!-- end: JavaScript Event Handlers for this page -->
	<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>