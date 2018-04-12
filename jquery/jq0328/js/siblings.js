var siblings=$('.siblings');
        var siblingsUlLi=$('.siblings>ul>li');
        var liSize=$('.siblings>ul>li').length;
        var txtLi=$('.siblings>ul>li .txt');
        
        var arrImg=[];
        for(var i=0;i<liSize;i++){
            arrImg.push('url(img/bg'+i+'.jpg) no-repeat 50%');
            
            siblingsUlLi.eq(i).css({'background':arrImg[i],
                                    'background-size':'cover'});
        };
        
        siblingsUlLi.hover(
            function(e){//마우스를 over
                $(this).css({'background-size':'300%'});
                $(this).find('.txt').fadeIn();
            },
            function(e){//마우스를 out
                $(this).css({'background-size':'cover'});
                $(this).find('.txt').fadeOut(0);
            }
        );