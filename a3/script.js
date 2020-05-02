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