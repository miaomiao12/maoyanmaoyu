/**
 * Created by Administrator on 2017/6/7.
 */
var iNow = 0;
var timer;
var $btns = $('.carousel-btn li');
$btns.on("click",function(){
    $(this).addClass('selected').siblings().removeClass("selected");
    $('.carousel-box').animate({
        left:-890*$(this).index()+"px"
    },1000);
    iNow = $(this).index();
});
run();
$('.carousel').on('mouseover',function(){
    clearInterval(timer);
}).on('mouseout',function(){
    run();
});
function run(){
    timer = setInterval(function(){
        iNow ++;
        if(iNow == $btns.length){
            iNow = 0;
        }
        $btns.eq(iNow).trigger('click');
    },2000);
}

