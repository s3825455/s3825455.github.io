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

function HPM6() {
  document.getElementById("booking_movie").innerHTML =
    "The Happy Prince - Monday - 6PM";
}

function HPT6() {
  document.getElementById("booking_movie").innerHTML =
    "The Happy Prince - Tuesday - 6PM";
}

function HPSA3() {
  document.getElementById("booking_movie").innerHTML =
    "The Happy Prince - Saturday - 3PM";
}

function HPSU3() {
  document.getElementById("booking_movie").innerHTML =
    "The Happy Prince - Sunday - 3PM";
}

function HPSU3() {
  document.getElementById("booking_movie").innerHTML =
    "The Happy Prince - Sunday - 3PM";
}

function TEWW12() {
  document.getElementById("booking_movie").innerHTML =
    "Top End Wedding - Wednesday - 12PM";
}

function TEWT12() {
  document.getElementById("booking_movie").innerHTML =
    "Top End Wedding - Thursday - 12PM";
}

function TEWF12() {
  document.getElementById("booking_movie").innerHTML =
    "Top End Wedding - Friday - 12PM";
}

function TEWSA9() {
  document.getElementById("booking_movie").innerHTML =
    "Top End Wedding - Saturday - 9PM";
}

function TEWSU9() {
  document.getElementById("booking_movie").innerHTML =
    "Top End Wedding - Sunday - 9PM";
}
