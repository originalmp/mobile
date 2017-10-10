  <style type="text/css">
 #products-slider .slider {
/*        width: 50%; */
    margin-right: auto;
    margin-bottom: 50px;
    margin-left: auto;
    }

    #products-slider .slick-slide {
      margin: 0px 9px;
    }

    #products-slider .slick-slide img {
      width: 100%;
    }

    #products-slider .slick-prev:before,
    #products-slider .slick-next:before {
      color: black;
    }


    #products-slider .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    #products-slider .slick-active {
      opacity: .5;
    }

    #products-slider .slick-current {
      opacity: 1;
    }
  </style>

<section id="featured-products" class="center slider">
    <div>
      <img src="http://placehold.it/350x300?text=1">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=2">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=3">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=4">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=5">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=6">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=7">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=8">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=9">
    </div>
  </section>




  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".center").slick({
         dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 4,
  responsive: [
{
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2,
        infinite: true,
        dots: false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
		});
});
</script>