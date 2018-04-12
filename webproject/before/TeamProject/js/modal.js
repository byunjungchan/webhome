// 큰 이미지

var arrImg = [];
var arrImg2 = [];

for(i=0;i<4;i++){
    
    arrImg.push('url(./img/img'+i+'.jpg) no-repeat 50%');
    arrImg2.push('url(./img/logo'+i+'.png) no-repeat 50%');
}

var modalImg = $('.modal .img');
var modalImg2 = $('.modal .logo');
var txt = $('.modal .txt');
var idex = $('.map >.icons');


var arrTxt = ['서울 강남구 압구정로 46길 46<br>T. 02-513-2900<br><br>자세히 보기>','서울시 강남구 선릉로 152길 18<br>T. 02-3485-5509<br><br>자세히 보기>','서울시 종로구 북촌로 31-18<br>T. 02-3700-2700<br><br>자세히 보기>','서울시 용산구 이태원로 246<br>T. 02-331-6300<br><br>자세히 보기>']; 



idex.on('click', function(){
    
    $('.modal').fadeIn(400);
    
    var k = $(this).index();
    
    console.log(k);
    modalImg.css({'background':'url(./img/img'+k+'.jpg) no-repeat 50%'});
    
    modalImg2.css({'background':'url(./img/logo'+k+'.png) no-repeat 50%'});
    
    txt.html(arrTxt[k]);
    
    
});


$('.close').on('click',function(){
    
    $('.modal').fadeOut(400);
    
})



////주석

//var one = $('.section .modal>ul>li.one');
//
//var oneImg = $('.section .modal>ul>li .img')
//var oneImgLogo = $('.section .modal>ul>li .img_logo')
//var onePtag = $('.section .modal>ul>li p')
//var close = $('.section .modal>ul>li .close')
//
//
//var ckClick= $('.section .map .icon');
//
//
//
//
//
//$('.close').on('click',function(){
//                              
//$('.modal').fadeOut(400);
//    
//    
//                              
//});
//
//
//$('.icon').on('click',function(){
//    $('.modal').fadeOut(400);
//    $('.modal').fadeIn(400);
//    $('.modal .one').fadeIn(400);
//    $('.modal .two').fadeOut();
//    $('.modal .three').fadeOut();
//    $('.modal .four').fadeOut();
//})
//
//$('.icon2').on('click',function(){
//    $('.modal').fadeOut(400);
//    $('.modal').fadeIn(400);
//    $('.modal .two').fadeIn(400);
//    $('.modal .one').fadeOut();
//    $('.modal .three').fadeOut();
//    $('.modal .four').fadeOut();
//})
//
//$('.icon3').on('click',function(){
//
//    $('.modal').fadeIn(400);
//    
//})
//
//
//$('.icon4').on('click',function(){
//    $('.modal').fadeOut(400);
//    $('.modal').fadeIn(400);
//    $('.modal .four').fadeIn(400);
//    $('.modal .two').fadeOut();
//    $('.modal .three').fadeOut();
//    $('.modal .one').fadeOut();
//})


////주석

//var map = $('.map > .icons')





//arrTxt = [];


//클릭한자기자신의이미지속성값을
//           가져와서 in
//
//
//
//var oneTxt = ['서울시 종로구 북촌로 31-18<br>T. 02-3700-2700<br><br>자세히 보기 >'];


        
      
        
        
//        var dpgImg= dpgsecimg.find('img');
//         
//        console.log(dpgsec3con);
//        console.log(dpgsec3con2);
//        console.log(dpgsec3tit);
//
//
//  
//        ckClick.on('click', function() {
//            
//            
//                dpgsec3tit.eq(0).text
//                dpgsec3con.eq(0).text
//                dpgsec3con2.eq(0).text
//                dpgsecimg.eq(i).find('img').attr('src','img/dpgbg'+i+'.png');
//                
//              
//            }
//
//        });