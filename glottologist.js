const glot = new Glottologist();

glot.assign('top-name', {
    ko: '안 매운 한국식당'
})

glot.render();


// 言語切り替え用のイベント処理
const ja =document.getElementById('ja');
const en =document.getElementById('en');
const ko =document.getElementById('ko');

ja.addEventListener('click', e => {
    e.preventDefault();
    glot.render('ja');
})
en.addEventListener('click', e => {
    e.preventDefault();
    glot.render('en');
})
ko.addEventListener('click', e => {
    e.preventDefault();
    glot.render('ko');
})
