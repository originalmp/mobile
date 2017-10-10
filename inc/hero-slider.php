
  <style type="text/css">
div#hero-slider {
    margin-bottom: 40px;
}
#hero-slider .slider {
    position: relative;
    width: 100%;
    display: block;
    box-sizing: border-box;
    margin: 0 auto;
	    height: 175px
	}

#hero-slider .slick-slide {
      margin: 0px;
    }

#hero-slider .slick-slide img {
      width: 100%;
	      height: 175px
    }

#hero-slider .slick-prev:before,
#hero-slider .slick-next:before {
      color: black;
    }
#hero-slider .slick-list{
	    width: 100%;
		background: #CCC;
	}

#hero-slider .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
#hero-slider .slick-active {
      opacity: .5;
    }

#hero-slider .slick-current {
      opacity: 1;
    }
  </style>

  <section class="lazy slider" data-sizes="100vw">
    <div>
      <img data-lazy="http://placehold.it/350x300?text=Slide-1" data-srcset="http://placehold.it/650x300?text=Slide-1 650w, http://placehold.it/960x300?text=1-960w 960w" data-sizes="100vw">
    </div>
    <div>
      <img data-lazy="http://placehold.it/350x300?text=Slide-2" data-srcset="http://placehold.it/650x300?text=Slide-2 650w, http://placehold.it/960x300?text=2-960w 960w" data-sizes="100vw">
    </div>
    <div>
      <img data-lazy="http://placehold.it/350x300?text=Slide-3"  data-srcset="http://placehold.it/650x300?text=Slide-3 650w, http://placehold.it/960x300?text=3-960w 960w" data-sizes="100vw">
    </div>
    <div>
      <img data-lazy="http://placehold.it/350x300?text=Slide-4"  data-srcset="http://placehold.it/650x300?text=Slide-4 650w, http://placehold.it/960x300?text=4-960w 960w" data-sizes="100vw">
    </div>
    <div>
      <img data-lazy="http://placehold.it/350x300?text=Slide-5"  data-srcset="http://placehold.it/650x300?text=Slide-5 650w, http://placehold.it/960x300?text=5-960w 960w" data-sizes="100vw">
    </div>

  </section>
  
  <script type="text/javascript">
    $(document).on('ready', function() {

      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
 autoplay: true,
   arrows: false,
		      dots: true,
          autoplaySpeed: 1500,
        infinite: true
      });
    });
</script>