//マウスストーカー用のdivを取得
// const follower = document.getElementsByClassName('follower');

//上記のdivタグをマウスに追従させる処理
// document.addEventListener('mousemove', function(e) {
//     follower.style.transform = 'translate(' + e.clientX + 'px, ' + e.clientY+ 'px)';
// });

//準備
let cursorR = 4; //カーソルの半径
const cursor = document.getElementById('cursor');

//上記のdivタグをマウスに追従させる処理
document.addEventListener('mousemove', function(e) {
    cursor.style.transform = 'translate(' + e.clientX + 'px, ' + e.clientY+ 'px)';
});

//マウスストーカー用のdivを取得
const stalker = document.getElementById('stalker');

//上記のdivタグをマウスに追従させる処理
document.addEventListener('mousemove', function(e){
    stalker.style.transform = 'translate(' + e.clientX + 'px, '+ e.clientY + 'px)';
});