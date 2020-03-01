// Initialize Firebase
  var config = {
    apiKey: "******",
    authDomain: "******",
    databaseURL: "******",
    projectId: "******",
    storageBucket: "******",
    messagingSenderId: "******"
  };
  firebase.initializeApp(config);





// code for led
	$(document).ready(function(){
		var database = firebase.database();
		var ledStatus = 0;
		var fanStatus = 0;
		var tvStatus = 0;
		var acStatus = 0;
		var led1Status = 0;


// code for led

		database.ref().on("value", function(snap)
		{
			ledStatus = snap.val().ledStatus;
			if(ledStatus == 1)
			{
				$(".lightStatus").text("The Light is ON");
			}
			else
			{
				$(".lightStatus").text("The Light is OFF");
			}
		});
		
		$(".buttonStatus").click(function(){
			var firebaseRef = firebase.database().ref().child("ledStatus");
			if(ledStatus == 1)
			{
				firebaseRef.set(0);
				ledStatus = 0;
			}
			else
			{
				firebaseRef.set(1);
				ledStatus = 1;
			}
		});




// code for kitchen 

database.ref().on("value", function(snap)
		{
			led1Status = snap.val().led1Status;
			if(led1Status == 1)
			{
				$(".light1Status").text("The Light is ON");
			}
			else
			{
				$(".light1Status").text("The Light is OFF");
			}
		});
		
		$(".button1Status").click(function(){
			var firebaseRef = firebase.database().ref().child("led1Status");
			if(ledStatus == 1)
			{
				firebaseRef.set(0);
				led1Status = 0;
			}
			else
			{
				firebaseRef.set(1);
				led1Status = 1;
			}
		});

// code for fan 
		database.ref().on("value", function(snap)
		{
			fanStatus = snap.val().fanStatus;
			if(fanStatus == 1)
			{
				$(".fanStatus").text("The Fan is ON");
			}
			else
			{
				$(".fanStatus").text("The Fan is OFF");
			}
		});
		
		$(".fanButton").click(function(){
			var firebaseRef = firebase.database().ref().child("fanStatus");
			if(fanStatus == 1)
			{
				firebaseRef.set(0);
				fanStatus = 0;
			}
			else
			{
				firebaseRef.set(1);
				fanStatus = 1;
			}
		});













		// code for Tv
		database.ref().on("value", function(snap)
		{
			tvStatus = snap.val().tvStatus;
			if(tvStatus == 1)
			{
				$(".tvStatus").text("The TV is ON");
			}
			else
			{
				$(".tvStatus").text("The TV is OFF");
			}
		});
		
		$(".tvButton").click(function(){
			var firebaseRef = firebase.database().ref().child("tvStatus");
			if(tvStatus == 1)
			{
				firebaseRef.set(0);
				tvStatus = 0;
			}
			else
			{
				firebaseRef.set(1);
				tvStatus = 1;
			}
		});

		// code for AC

		database.ref().on("value", function(snap)
		{
			acStatus = snap.val().acStatus;
			if(acStatus == 1)
			{
				$(".acStatus").text("AC is ON");
			}
			else
			{
				$(".acStatus").text("AC is OFF");
			}
		});

		$(".acButton").click(function(){
			var firebaseRef = firebase.database().ref().child("acStatus");
			if(acStatus == 1)
			{
				firebaseRef.set(0);
				acStatus = 0;
			}
			else
			{
				firebaseRef.set(1);
				acStatus = 1;
			}
		});

	});



// for toggle button

