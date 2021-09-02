//Men: BMR = 88.362 + (13.397 x weight in kg) + (4.799 x height in cm) - (5.677 x age in years)
//Women: BMR = 447.593 + (9.247 x weight in kg) + (3.098 x height in cm) - (4.330 x age in years)

window.onload = function calcBMR(){
  // convert lbs to kg
  var kg = 65;

  // convert ft and in to cm
  var cm = 163;

  // convert birthdate to age in years
  var age = 24;

  // function to calculate BMR
  var bmr = 0;

    //if female
  bmr = (447.593 + (9.247 x kg) + (3.098 x cm) - (4.330 x age));
  alert(bmr);
    //else if male
      // bmr = 88.362 + (13.397 x kg) + (4.799 x cm) - (5.677 x age)

    //return bmr


  // function to calculate calories based on weight loss goals?
  // you can display calories consumed & calorie goals in Profile
}
