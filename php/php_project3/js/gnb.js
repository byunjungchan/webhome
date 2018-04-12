
        
        var gnbLi = $('.gnb>ul>li');
        var Box = $('.box');
        
        gnbLi.hover(
            function(e){
                Box.slideDown(0);
            },
            function(e){
                Box.slideUp(0);
            },
        );
        