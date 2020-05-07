/* Insert your javascript here */
$(document).on("click", "ul li", function () {
  $(this).addClass("active").siblings().removeClass("active");
});

function reveal() {
  document.getElementById("hiddensyn4").style.display = "none";
  document.getElementById("hiddensyn3").style.display = "none";
  document.getElementById("hiddensyn2").style.display = "none";
  document.getElementById("hiddensyn").style.display = "block";
}

function reveal2() {
  document.getElementById("hiddensyn4").style.display = "none";
  document.getElementById("hiddensyn3").style.display = "none";
  document.getElementById("hiddensyn").style.display = "none";
  document.getElementById("hiddensyn2").style.display = "block";
}

function reveal3() {
  document.getElementById("hiddensyn4").style.display = "none";
  document.getElementById("hiddensyn").style.display = "none";
  document.getElementById("hiddensyn2").style.display = "none";
  document.getElementById("hiddensyn3").style.display = "block";
}

function reveal4() {
  document.getElementById("hiddensyn3").style.display = "none";
  document.getElementById("hiddensyn").style.display = "none";
  document.getElementById("hiddensyn2").style.display = "none";
  document.getElementById("hiddensyn4").style.display = "block";
}

function AEW9() {
  document.getElementById("booking_movie").innerHTML =
    "Avenger Endgame - Wednesday - 9PM";
  document.getElementById("movieID").value = "ACT";
  document.getElementById("movie_day").value = "WED";
  document.getElementById("movie_hour").value = "T21";

}

function AET9() {
  document.getElementById("booking_movie").innerHTML =
    "Avenger Endgame - Thursday - 9PM";
    document.getElementById("movieID").value = "ACT";
    document.getElementById("movie_day").value = "THUR";
    document.getElementById("movie_hour").value = "T21";
  
}

function AEF9() {
  document.getElementById("booking_movie").innerHTML =
    "Avenger Endgame - Friday - 9PM";
    document.getElementById("movieID").value = "ACT";
    document.getElementById("movie_day").value = "FRI";
    document.getElementById("movie_hour").value = "T21";
  
}

function AESA9() {
  document.getElementById("booking_movie").innerHTML =
    "Avenger Endgame - Saturday - 6PM";
    document.getElementById("movieID").value = "ACT";
    document.getElementById("movie_day").value = "SAT";
    document.getElementById("movie_hour").value = "T18";
  
}

function AESU9() {
  document.getElementById("booking_movie").innerHTML =
    "Avenger Endgame - Sunday - 6PM";
    document.getElementById("movieID").value = "ACT";
    document.getElementById("movie_day").value = "SUN";
    document.getElementById("movie_hour").value = "T18";
  
}

function DM12() {
  document.getElementById("booking_movie").innerHTML = "Dumbo - Monday - 12PM";
  document.getElementById("movieID").value = "ANM";
  document.getElementById("movie_day").value = "MON";
  document.getElementById("movie_hour").value = "T12";

}

function DT12() {
  document.getElementById("booking_movie").innerHTML = "Dumbo - Tuesday - 12PM";
  document.getElementById("movieID").value = "ANM";
  document.getElementById("movie_day").value = "TUE";
  document.getElementById("movie_hour").value = "T12";
}

function DW6() {
  document.getElementById("booking_movie").innerHTML =
    "Dumbo - Wednesday - 6PM";
    document.getElementById("movieID").value = "ANM";
    document.getElementById("movie_day").value = "WED";
    document.getElementById("movie_hour").value = "T18";
}

function DT6() {
  document.getElementById("booking_movie").innerHTML = "Dumbo - Thurday - 6PM";
  document.getElementById("movieID").value = "ANM";
  document.getElementById("movie_day").value = "THUR";
  document.getElementById("movie_hour").value = "T18";
}

function DF6() {
  document.getElementById("booking_movie").innerHTML = "Dumbo - Friday - 6PM";
  document.getElementById("movieID").value = "ANM";
  document.getElementById("movie_day").value = "FRI";
  document.getElementById("movie_hour").value = "T18";
}

function DSA12() {
  document.getElementById("booking_movie").innerHTML =
    "Dumbo - Saturday - 12PM";
    document.getElementById("movieID").value = "ANM";
    document.getElementById("movie_day").value = "SAT";
    document.getElementById("movie_hour").value = "T12";
}

function DSU12() {
  document.getElementById("booking_movie").innerHTML = "Dumbo - Sunday - 12PM";
  document.getElementById("movieID").value = "ANM";
  document.getElementById("movie_day").value = "SUN";
  document.getElementById("movie_hour").value = "T12";
}

function TEWM6() {
  document.getElementById("booking_movie").innerHTML =
    "Top End Wedding - Monday - 6PM";
    document.getElementById("movieID").value = "RMC";
    document.getElementById("movie_day").value = "MON";
    document.getElementById("movie_hour").value = "T18";

}

function TEWT6() {
  document.getElementById("booking_movie").innerHTML =
    "Top End Wedding - Tuesday - 6PM";
    document.getElementById("movieID").value = "RMC";
    document.getElementById("movie_day").value = "TUE";
    document.getElementById("movie_hour").value = "T18";

}

function TEWDSA3() {
  document.getElementById("booking_movie").innerHTML =
    "Top End Wedding - Saturday - 3PM";
    document.getElementById("movieID").value = "RMC";
    document.getElementById("movie_day").value = "SAT";
    document.getElementById("movie_hour").value = "T15";

}

function TEWSU3() {
  document.getElementById("booking_movie").innerHTML =
    "Top End Wedding - Sunday - 3PM";
    document.getElementById("movieID").value = "RMC";
    document.getElementById("movie_day").value = "SUN";
    document.getElementById("movie_hour").value = "T18";
    
}


function HPW12() {
  document.getElementById("booking_movie").innerHTML =
    "The Happy Prince - Wednesday - 12PM";
    document.getElementById("movieID").value = "AHF";
    document.getElementById("movie_day").value = "WED";
    document.getElementById("movie_hour").value = "T12";
}

function HPT12() {
  document.getElementById("booking_movie").innerHTML =
    "The Happy Prince - Thursday - 12PM";
    document.getElementById("movieID").value = "AHF";
    document.getElementById("movie_day").value = "THU";
    document.getElementById("movie_hour").value = "T12";
}

function HPF12() {
  document.getElementById("booking_movie").innerHTML =
    "The Happy Prince - Friday - 12PM";
    document.getElementById("movieID").value = "AHF";
    document.getElementById("movie_day").value = "FRI";
    document.getElementById("movie_hour").value = "T12";
}

function HPSA9() {
  document.getElementById("booking_movie").innerHTML =
    "The Happy Prince - Saturday - 9PM";
    document.getElementById("movieID").value = "AHF";
    document.getElementById("movie_day").value = "SAT";
    document.getElementById("movie_hour").value = "T21";
}

function HPSU9() {
  document.getElementById("booking_movie").innerHTML =
    "The Happy Prince - Sunday - 9PM";
    document.getElementById("movieID").value = "AHF";
    document.getElementById("movie_day").value = "SUN";
    document.getElementById("movie_hour").value = "T21";
}
function Check_expiry() {
  var given_month = document.getElementById("cust[expiryMonth]").value -1;
  var given_year = document.getElementById("cust[expiryYear]").value;
  var current_date = new Date();
  var current_month = current_date.getMonth();
  var current_year = current_date.getFullYear();

  if (given_month < current_month && given_year == current_year) {
    document.getElementById("error_message").style.display = "block";
    alert("Please enter a valid expiry date!");
    return false;
  }else{
    document.getElementById("error_message").style.display = "none";
  }


  if (given_year < current_year) {
    alert("Please enter a valid expiry date!");
    return false;
  }

}
