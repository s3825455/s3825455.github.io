function calculatePrice() {
  alert("calculate Price");
}

function calculatePrice2() {
  alert("calculate Price 2");
  event.stopImmediatePropagation();
}

function clickP3() {
  alert("p3 clicked");
}

var mybutton = document.getElementById("price2");
mybutton.onclick = calculatePrice2;


var mybutton = document.getElementById("price3");
mybutton.addEventListener("click", calculatePrice);
mybutton.addEventListener("click", calculatePrice2);

var myP3 = document.getElementById("p3");
myP3.addEventListener("click", clickP3, true);

function checkinput() {
    var patt = /^Steve [a-zA-Z ]+$/;
    name = document.getElementById('text1').value;
    if (patt.test(name))
        alert('good')
    else
        alert('bad')
}
