var arr = ["#calories", "#water", "#activity", "#greeting", "#foodlabel", "#exerlabel", "#foodlog", "#exerlog", "#sleep", "#macros"]; 

$(document).ready( function(){ 
    $.each(arr, function (index, value) {
        $(value).hide().fadeIn(1500); 
    });

}) 

