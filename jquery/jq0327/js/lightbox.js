$(document).ready(function(){
    
    
    var body=$('body');
    var gallery=$('.gallery');
    
    
    var bodyWidth=body.width();
    var bodyheight=body.height();
    var galleryWidth=gallery.width();
    var galleryheight=gallery.height();
    
    var galleryLeft=bodyWidth/2-galleryWidth/2;
    var galleryTop=bodyheight/2-galleryheight/2;
    
    
    
    gallery.css({'left':galleryLeft,'top':galleryTop})
    
    var lightboxLi=$('.lightbox >ul>li');
    var layer=$('.layer');
    var spanClose=$('span.close');
    
    lightboxLi.on('click',function(e){
        
        var imgSrc=$(this).find('img').attr('src');
        var txtContent=$(this).find('.txt').text();
        
        gallery.find('img').attr('src',imgSrc);
        gallery.find('.bottom').text(txtContent);
        
        layer.fadeIn();
        body.css({'overflow':'hidden'});//스크롤 없애는 것
        
    })
    
    
    
    spanClose.on('click',function(e){
        layer.fadeOut();
        body.css({'overflow':'auto'});//스크롤 재생성
    })

});