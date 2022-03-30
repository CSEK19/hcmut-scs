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

let room_id = document.getElementById("room_id")
let room_name = document.getElementById("room_name")
let timestamp = document.getElementById("timestamp")
let num_people = document.getElementById("num_people")
let light_status = document.getElementById("light_status")
let door_status = document.getElementById("door_status")
let image = document.getElementById("image")

async function GetRoom() {
    var ref = doc(db, "Room", "1")
    const docSnap = await getDoc(ref)

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
        console.log()
    }
}

tmp_button.addEventListener("onClick", GetRoom())