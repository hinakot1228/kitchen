function hamburger(){
    document.getElementById('line1').classList.toggle('line1');
    document.getElementById('line2').classList.toggle('line2');
    document.getElementById('line3').classList.toggle('line3');
    document.getElementById('hamburger-menu').classList.toggle('inner');
}
document.getElementById('hamburger').addEventListener('click', function(){
    hamburger();
} );