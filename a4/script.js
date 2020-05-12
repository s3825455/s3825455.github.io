/* Insert your javascript here */
// $(document).on("click", "ul li", function () {
//   $(this).addClass("active").siblings().removeClass("active");
// });

// Get the container element
var nav_bar_element = document.getElementById("nav1");

// Get all buttons with class="btn" inside the container
var nav_link = nav_bar_element.getElementsByClassName("nav-link");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < nav_link.length; i++) {
  nav_link[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

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

function price_check()
{
  var value_adult_standard = document.getElementById("adult_standard").value;
  var value_concession_standard = document.getElementById("concession_standard").value;
  var value_children_standard = document.getElementById("children_standard").value;
  var value_adult_firstclass = document.getElementById("adult_firstclass").value;
  var value_concession_firstclass = document.getElementById("concession_firstclass").value;
  var value_children_firstclass = document.getElementById("children_firstclass").value
  var full_price = [19.80,17.50,15.30, 30.00, 27.00, 24.00];
  var discount_price = [14.00, 12.50, 11.00, 24.00, 22.50, 21.00];
  var discount_time = document.getElementById("booking_movie").innerHTML;
  var time_check_1 = discount_time.search("12PM");
  var time_check_2 = discount_time.search("Monday");
  var time_check_3 = discount_time.search("Wednesday");
  var price = 0;

  if (time_check_1 != (-1) || time_check_2 != (-1) || time_check_3 != (-1)) {
    price = (discount_price[0] * value_adult_standard) + (discount_price[1] * value_concession_standard) + (discount_price[2] * value_children_standard) + (discount_price[3] * value_adult_firstclass) + (discount_price[4] * value_concession_firstclass) + (discount_price[5] * value_children_firstclass);
    price = price.toFixed(2);
    document.getElementById("final_price").innerHTML = "$" + price;
  } else {
    price = (full_price[0] * value_adult_standard) + (full_price[1] * value_concession_standard) + (full_price[2] * value_children_standard) + (full_price[3] * value_adult_firstclass) + (full_price[4] * value_concession_firstclass) + (full_price[5] * value_children_firstclass);
    price = price.toFixed(2);
    document.getElementById("final_price").innerHTML = "$" +price;
  }
}
