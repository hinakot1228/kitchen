var btn = document.getElementById('btn');
var modal = document.getElementById('modal');

btn.addEventListener('click', function() {
    modal.style.display = 'block';
});

var closeBtn = document.getElementById('closeBtn');

closeBtn.addEventListener('click', function() {
    modal.style.display = 'none';
});

window.addEventListener('click', function(e) {
    if (e.target == modal) {
        modal.style.display = 'none';
    }
});


var btn2 = document.getElementById('btn2');
var modal2 = document.getElementById('modal2');

btn2.addEventListener('click', function() {
    modal2.style.display = 'block';
});

var closeBtn2 = document.getElementById('closeBtn2');

closeBtn2.addEventListener('click', function() {
    modal2.style.display = 'none';
});

window.addEventListener('click', function(e) {
    if (e.target == modal2) {
        modal2.style.display = 'none';
    }
});



var btn3 = document.getElementById('btn3');
var modal3 = document.getElementById('modal3');

btn3.addEventListener('click', function() {
    modal3.style.display = 'block';
});

var closeBtn3 = document.getElementById('closeBtn3');

closeBtn3.addEventListener('click', function() {
    modal3.style.display = 'none';
});

window.addEventListener('click', function(e) {
    if (e.target == modal3) {
        modal3.style.display = 'none';
    }
});
