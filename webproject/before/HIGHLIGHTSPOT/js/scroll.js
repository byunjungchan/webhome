


$(window).scroll(function() {

  var scrollTop = $(this).scrollTop();
  console.log(scrollTop);
})



$(document).ready(function () {


//scrollTop의 값이 변경될때 html값을 변경. 최종적으로 스크롤 값이 3233일 경우 html에 값을 없애버림.
//해당 html태그값은 모두 붙여야 에러가 나지 않는다.
          $(window).scroll(function () {
            if ($(this).scrollTop() > 4886) {
           $(".content>.text").html("")


        } else if ($(this).scrollTop() > 4186) {
           $(".content>.text").html("<h4>라이프 컬렉션<br><br></h4><p>디자인 라이브러리는 미국에서 발행되던 대중잡지인 <라이프>도 전 컬렉션을 보유하고 있다. 화면 전체를 가득 채우는 커버사진은 당시의 가장 화제가 되는 장면들을 포착하면서 포토저널리즘 분야에서 그 중요성을 인정받았다.<br><br>디자인 라이브러리 에서는 1936년 창간호부터 2000년도 폐간될 때까지의 <라이프> 전 컬렉션을 보유하고 있을 뿐만 아니라, 매 월 시즌에 맞는 주제에 따라 전시도 진행된다.</p>")

        } else if ($(this).scrollTop() > 3486) {
            $(".content>.text").html("<h4>도무스 컬렉션<br><br></h4><p><도무스>라는 이탈리아에서 발행되는 건축, 디자인 잡지로 건축 분야에서는 매우 영향력 있는 잡지로 알려져 있다.<br><br>디자인 라이브러리에서는 1928년 창간호부터 최신호까지 전 컬렉션을 보유하고 있으며, 잡지의 상태에 따라 재제본을 하거나 커버를 씌워 열람할 수 있도록 하고있다.</p>")
        } else if ($(this).scrollTop() > 2786) {
            $(".content>.text").html("<h4>희귀본 컬렉션<br><br></h4><p>디자인 라이브러리는 소량 인쇄되었거나 절판된 책, 또는 역사적으로 중요한 가치를 지닌 책들을 희귀본 컬렉션 (Rare Book Collection)으로 분류해 이들을 직접 보고, 영감을 받을 수 있는 기회를 제공한다. 이는 빠른 속도로 소진되어가고 있는 희귀 장서를 보존하기 위해 노력하는 것 또한 디지털 시대에 아날로그를 지향하는 라이브러리가 수행해야 할	하나의 중요한 역할이라고 믿기 때문이다.<br><br>또한 소장하고 있는 리미티드 에디션 및 아트북 약 400여 권 중, 매 월 주제에 맞게 책을 선정하여 작은 규모로 책 전시가 진행된다. 이 도서들은 보존가치가 높기 때문에 장갑 착용 후 열람해야 한다.</p>")
        } else if ($(this).scrollTop() > 2086) {
            $(".content>.text").html("<h4>기오헌<br><br></h4><p>디자인 라이브러리 3층에는 다락방과 같이 작은 공간에 서가와 열람실이 있다. 열람 공간은 '기오헌(寄傲軒)'이라 불리는데, 이는 창덕궁에 있는 세자의 공부방의 이름을 따온 것이다. 기오헌은 소박하고 작은 누각으로 되어 있는 대신 경치를 감상할 수 있는 큰 창이 있어 태도는 겸손하되 시야는 넓게 가지라는 의미를 담고 있다고 한다.<br><br>기오헌을 본따 만들어진 이 공간도 크기는 작지만 창 밖을 통해 풍경을 감상할 수 있다. 벤치에 앉아 밖을 바라보면 전통 한옥의 지붕부터 현대적인 건물이 시야에 함께 들어온다. 전통과 현대, 도시와 자연이 한데 어우러진 경치를 감상할 수 있는 곳, 디자인 라이브러리에서 놓치지 말아야 할 공간이다.</p>")
        } else{
            $(".content>.text").html("<h4>집속의 집<br><br></h4><p>2층에는 집의 형상으로 기존 공간을 가로지르는 '집속의 집'이 들어섰다. 이 공간은 단순하고 정제된 공간 속에서 서로 다른 스케일을 체험하게 하는 동시에, 하나의 공간 안에서 다양한 장면과 깊이감을 만든다.<br><br>‘집속의 집’에서는 라이브러리에서 소장하고 있는 북 컬렉션 중 동시대의 분야별 영향력 있는 디자이너를 매월 선정해 집중 조명 하는 ‘Designer of the Month’를 만나볼 수 있다.<br><br>또한 급변하는 트렌드와 잊혀졌던 고전을 발굴해 매월 새롭게 소개하는 신규 입고 도서 섹션 ‘NEW’, 전월 이용자들의 관심을 가장 많이 받았던 인기 열람 도서 섹션 ‘Popular’, 현대카드 DESIGN LIBRARY 큐레이션을 통해 엄선된 추천 도서 섹션 ‘Essential’을 한 눈에 파악할 수 있는 자리가 마련되어 있어 부담 없이 디자인 전문 서적을 즐길 수 있다.</p>")
        }
    });

});


