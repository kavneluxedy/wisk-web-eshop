$(function () {
    $('#myCarousel').hVCarousel({
      // options here
    });
  });
  
  $(function () {
    $('#myCrousel').hVCarousel({
      dots: true,
      arrow: true
    });
  });
  
  $(function () {
    $('#myCrousel').hVCarousel({
      largeImage: true
    });
  });

  $(function () {
    $('#myCrousel').hVCarousel({
      fade: true
    });
  });

  $(function () {
    $('#myCrousel').hVCarousel({
      autoplay: true,
      interval: 3000
    });
  });

  <div id="" class="hVCarousel thumbnail-bottom">
  <div class="hVCarousel-inner">
    <div class="hVCarousel-slides">
      <figure class="hVCarousel-item" data-thumnail="1.png">
        <img src="1.jpg" alt=""/>
      </figure>
      <figure class="hVCarousel-item" data-thumnail="2.png">
        <img src="2.jpg" alt=""/>
      </figure>
      <figure class="hVCarousel-item" data-thumnail="3.png">
        <img src="3.jpg" alt=""/>
      </figure>
      </div>
  </div>
</div>

$(function () {
    $('#myCrousel').hVCarousel({
      thumbnailPlace: 'bottom' // 'top', 'bottom', 'right', 'left'
    });
  });
  
