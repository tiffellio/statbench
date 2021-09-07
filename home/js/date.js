
var d = new Date();

var months = ["Jan", "Feb", "March", "April", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"];

var monthName=months[d.getMonth()];

var date = d.getDate();

var week = ["Monday", "Tuesday", "Wednesday", "Thurday", "Friday", "Saturday", "Sunday"];


var weekday = week[d.getDay()]; //-1

var displayDate = weekday+'<br/> '+monthName+', '+date;

document.getElementById("date").innerHTML = displayDate;
