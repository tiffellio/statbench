

// get current time and make a time object to compare with
var hourObj = new Date();
var hour = hourObj.getHours();

var minObj = new Date();
var minute = minObj.getMinutes();

var currentTimeObj = new Date();
currentTimeObj.setHours(hour, minute);

// morning 12am to 11:59am
var startMorningTimeObj = new Date();
startMorningTimeObj.setHours(0, 0);

var endMorningTimeObj = new Date();
endMorningTimeObj.setHours(11, 59);

// afternoon 12pm to 5:59pm
var startAfternoonTimeObj = new Date();
startAfternoonTimeObj.setHours(12, 0);

var endAfternoonTimeObj = new Date();
endAfternoonTimeObj.setHours(17, 59);

//evening 6pm to 11:59pm
var startEveningTimeObj = new Date();
startEveningTimeObj.setHours(18, 0);

var endEveningTimeObj = new Date();
endEveningTimeObj.setHours(23, 59);


if ((currentTimeObj >= startMorningTimeObj) && (currentTimeObj <= endMorningTimeObj)) {

  document.getElementById("daytime").innerHTML = "Good morning, ";

}

else if ((currentTimeObj >= startAfternoonTimeObj ) && (currentTimeObj <= endAfternoonTimeObj)) {

  document.getElementById("daytime").innerHTML = "Good afternoon, ";

}

else if ((currentTimeObj >= startEveningTimeObj ) && (currentTimeObj <= endEveningTimeObj)) {

  document.getElementById("daytime").innerHTML = "Good evening, ";

}

else {

  alert("error in parsing time");

}
