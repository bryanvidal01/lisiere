jQuery(document).ready(function(){
    jQuery('.container-menu-mobile').click(function(){
        jQuery('.header').toggleClass('open');
    });

    jQuery('.slider-avis').flickity({
      cellAlign: 'left',
      contain: true,
      prevNextButtons: false,
      pageDots: false,
      autoPlay: 3000
    });

    jQuery('.masonry-blog').masonry({
        itemSelector: '.item-blog',
    });
});
