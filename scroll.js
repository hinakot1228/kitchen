// スクロールトップボタン
scrollTop('js-scroll-top' , 150);

                    // ↓引数
function scrollTop(el, duration) {
    const target = document.getElementById(el);
    target.addEventListener('click', function(){
        let currentY = window.pageYOffset; 
        //現在のスクロールの一を取得しcurrentYに代入
        let step = duration/currentY> 1? 10 : 100; 
        //三項演算子
        let timeStep = duration/currentY * step;
         //スクロールスピードの速さ調整
        let intervalId = setInterval(scrollUp, timeStep);
            //timeStepの間隔でscrollUpを繰り返す
            //clearIntervalのために返り値intervalIdを定義する

        function scrollUp() {
            currentY = window.pageYOffset;
            if (currentY === 0) {
                clearInterval(intervalId);
                //ページ最上部に来たら終了
            }else {
                scrollBy(0, -step);
                //scrollBy(x,y)
                //step分上へスクロール
            }
        }

    });
}