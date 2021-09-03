// Calculates daily calorie goals based on BMR and adjusts according to fitness goals

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
  gender = 1; // 0 male, 1 female


  if (gender == 1){

    bmr = 447.593 + (9.247 * kg) + (3.098 * cm) - (4.330 * age);

  } else {

    bmr = 88.362 + (13.397 * kg) + (4.799 * cm) - (5.677 * age);

  }

  // ************* WEIGHT GAIN OR WEIGHT LOSS ADJUSTMENT
  // 0: lose 1 pound per week - 500 Cals
  // 1: lose half pound per week - 250 Cals
  // 2: mantain weight (don't change)
  // 3: gain half pound per week + 250 Cals
  // 4: gain 1 pound per week + 500 Cals

  var weightGoal = 2;

  if (weightGoal == 0){

    bmr -= 500;

  }

  else if (weightGoal == 1) {

    bmr -= 250;

  }

  // if 2, it stays the same

  else if (weightGoal == 3) {

    bmr += 250;

  }

  else if (weightGoal == 4) {

    bmr += 500;

  }

  // do not go below base calorie minimum
  if(bmr < 1200){
    bmr = 1200;
  }

  // trim
  const bmrTrimmed = Math.trunc(bmr);

  // output to dashboard
  document.getElementById("calories-num").innerHTML = bmrTrimmed;


}
