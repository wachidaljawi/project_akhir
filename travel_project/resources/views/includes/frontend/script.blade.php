<script src="{{ url('frontend/libraries/jquery/jquery-3.5.1.min.js') }}"></script>
<script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ url('frontend/libraries/retina/retina.min.js') }}"></script>
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
          zoomWidth: 500,
          title: false,
          tint: '#333',
          Xoffset: 15
        });
    });

    $(document).ready(function() {
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        uiLibrary: 'bootstrap4',
        icons: {
          rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />'
        }
      });
    });

    var $window = $(window);
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('#top-nav').fadeIn();
        } else {
            $('#top-nav').fadeOut();
        }
    });

    $('#top-nav').hide().click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 2000);
        return false;
    });
    AOS.init();
</script>