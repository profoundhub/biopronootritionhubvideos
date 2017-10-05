  <script type="text/javascript">
    $("#countdown").countdown("2017/11/02", function(event) {
      $(this).html(event.strftime("%w weeks %d days <br /> %H:%M:%S"));
    });
  </script>