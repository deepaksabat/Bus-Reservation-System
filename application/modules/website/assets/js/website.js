 $(document).ready(function () {

    $("#offer").owlCarousel({
        autoPlay: 4000, //Set AutoPlay to 5 seconds
        items: 3,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 2],
        itemsTablet: [768, 2],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        navigation: false,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]

    });
 
    //range slide
    $("#range").ionRangeSlider({
        type: "double",
        grid: true,
        min: 0,
        max: 200,
        from: 50,
        to: 150,
        prefix: "$"
    });

    //tooltip
    $('[data-toggle="tooltip"]').tooltip();

    //bus operators
    $('.bus-operators').slimScroll({
        size: '3px',
        height: '190px',
        color: '#5b69bc',
        allowPageScroll: true,
        railVisible: true
    });

    // boarding points
    $('.boarding-points').slimScroll({
        size: '3px',
        height: '200px',
        color: '#5b69bc',
        allowPageScroll: true,
        railVisible: true
    });

    //COUNT NUMBER
    $('.count-number').counterUp({
        delay: 10,
        time: 3000
    });
 
    /**
    * RATING SYSTEM
    */ 
    var shop = document.querySelector('#rating');
    // DUMMY DATA
    var data = [{
        rating: 3
      }];
    // INITIALIZE
    (function init() {
      for (var i = 0; i < data.length; i++) {
        addRatingWidget(buildShopItem(data[i]), data[i]);
      }
    })();
    // BUILD SHOP ITEM
    function buildShopItem(data) {
      var shopItem = document.createElement('div');
      var html = '<div class="c-shop-item__img"></div>' +
        '<div class="c-shop-item__details">' +
          '<ul class="c-rating"></ul>' +
        '</div>';
      shopItem.classList.add('c-shop-item');
      shopItem.innerHTML = html;
      shop.appendChild(shopItem);
      return shopItem;
    }

    // ADD RATING WIDGET
    function addRatingWidget(shopItem, data) {
      var ratingElement = shopItem.querySelector('.c-rating');
      var currentRating = data.rating;
      var maxRating = 5;
      var callback = function(rating) {
        $('input[name=rating]').val(rating);
      };
      var r = rating(ratingElement, currentRating, maxRating, callback);
    }
 



});
