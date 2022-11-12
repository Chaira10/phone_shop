

let cont = document.querySelector('.container');
let layer = document.querySelector('.layer');


cont.onscroll = function(){
    let X = cont.scrollTop;

    layer[0].style.left = X/4 + 'px';
    layer[1].style.left = X/8 + 'px';
}




