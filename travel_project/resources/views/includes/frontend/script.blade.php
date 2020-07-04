<script src="{{ url('frontend/libraries/jquery/jquery-3.5.1.min.js') }}"></script>
<script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ url('frontend/libraries/retina/retina.min.js') }}"></script>
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
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
</script>