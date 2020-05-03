/* Insert your javascript here */
$(document).on('click', 'ul li', function() {
    $(this).addClass('active').siblings().removeClass('active')
})


function reveal() {
    document.getElementById("hiddensyn4").style.display = 'none';
    document.getElementById("hiddensyn3").style.display = 'none';
    document.getElementById("hiddensyn2").style.display = 'none';
    document.getElementById("hiddensyn").style.display = 'block';
}


function reveal2() {
    document.getElementById("hiddensyn4").style.display = 'none';
    document.getElementById("hiddensyn3").style.display = 'none';
    document.getElementById("hiddensyn").style.display = 'none';
    document.getElementById("hiddensyn2").style.display = 'block';
}

function reveal3() {
    document.getElementById("hiddensyn4").style.display = 'none';
    document.getElementById("hiddensyn").style.display = 'none';
    document.getElementById("hiddensyn2").style.display = 'none';
    document.getElementById("hiddensyn3").style.display = 'block';  
}

function reveal4() {
    document.getElementById("hiddensyn3").style.display = 'none';
    document.getElementById("hiddensyn").style.display = 'none';
    document.getElementById("hiddensyn2").style.display = 'none';
    document.getElementById("hiddensyn4").style.display = 'block';
}

function AEW9() {
    document.getElementById("booking_movie").innerHTML = "Avenger Endgame - Wednesday - 9PM"
}

function AET9() {
    document.getElementById("booking_movie").innerHTML = "Avenger Endgame - Thursday - 9PM"
}

function AEF9() {
    document.getElementById("booking_movie").innerHTML = "Avenger Endgame - Friday - 9PM"
}

function AESA9() {
    document.getElementById("booking_movie").innerHTML = "Avenger Endgame - Saturday - 6PM"
}

function AESU9() {
    document.getElementById("booking_movie").innerHTML = "Avenger Endgame - Sunday - 6PM"
}

function DM12() {
    document.getElementById("booking_movie").innerHTML = "Dumbo - Monday - 12PM"
}

function DT12() {
    document.getElementById("booking_movie").innerHTML = "Dumbo - Tuesday - 12PM"
}

function DW6() {
    document.getElementById("booking_movie").innerHTML = "Dumbo - Wednesday - 6PM"
}

function DT6() {
    document.getElementById("booking_movie").innerHTML = "Dumbo - Tuesday - 6PM"
}

function DF6() {
    document.getElementById("booking_movie").innerHTML = "Dumbo - Friday - 6PM"
}

function DSA12() {
    document.getElementById("booking_movie").innerHTML = "Dumbo - Saturday - 12PM"
}

function DSU12() {
    document.getElementById("booking_movie").innerHTML = "Dumbo - Sunday - 12PM"
}

function HPM6() {
    document.getElementById("booking_movie").innerHTML = "The Happy Prince - Monday - 6PM"
}

function HPT6() {
    document.getElementById("booking_movie").innerHTML = "The Happy Prince - Tuesday - 6PM"
}

function HPSA3() {
    document.getElementById("booking_movie").innerHTML = "The Happy Prince - Saturday - 3PM"
}

function HPSU3() {
    document.getElementById("booking_movie").innerHTML = "The Happy Prince - Sunday - 3PM"
}

function HPSU3() {
    document.getElementById("booking_movie").innerHTML = "The Happy Prince - Sunday - 3PM"
}

function TEWW12() {
    document.getElementById("booking_movie").innerHTML = "Top End Wedding - Sunday - 3PM"
}