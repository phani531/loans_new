<!-- js library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
        <script src="http://www.authenty.seonglee.com/js/bootstrap.min.js"></script>
        <script src="http://www.authenty.seonglee.com/js/jquery.icheck.min.js"></script>
        <script src="http://www.authenty.seonglee.com/js/waypoints.min.js"></script>
        
        <!-- authenty js -->
        <script src="http://www.authenty.seonglee.com/js/authenty.js"></script>
        
        <!-- preview scripts -->
        <script src="http://www.authenty.seonglee.com/js/preview/jquery.malihu.PageScroll2id.js"></script>
        <script src="http://www.authenty.seonglee.com/js/preview/jquery.address-1.6.min.js"></script>
        <script src="http://www.authenty.seonglee.com/js/preview/scrollTo.min.js"></script>
       <!-- <script src="http://www.authenty.seonglee.com/js/preview/init.js"></script>-->
        
        
        <!-- preview scripts -->
        <script>
            (function($) {
                $("#signIn_1").click(function(){
                  $("#loginSubmit").submit();
                });
                // get full window size
                $(window).on('load resize', function(){
                    var w = $(window).width();
                    var h = $(window).height();

                    $('section').height(h);
                });     

                // scrollTo plugin
                $('#signup_from_1').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });
                $('#forgot_from_1').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });
                $('#signup_from_2').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });
                $('#forgot_from_2').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });
                $('#forgot_from_3').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });
                
                
                // set focus on input
                var firstInput = $('section').find('input[type=text], input[type=email]').filter(':visible:first');
        
                if (firstInput != null) {
            firstInput.focus();
        }
                
                $('section').waypoint(function (direction) {
                    var target = $(this).find('input[type=text], input[type=email]').filter(':visible:first');
                    target.focus();
                }, {
              offset: 300
          }).waypoint(function (direction) {
                    var target = $(this).find('input[type=text], input[type=email]').filter(':visible:first');
                target.focus();
          }, {
              offset: -400
          });
                
                
                // animation handler
                $('[data-animation-delay]').each(function () {
              var animationDelay = $(this).data("animation-delay");
              $(this).css({
                  "-webkit-animation-delay": animationDelay,
                  "-moz-animation-delay": animationDelay,
                  "-o-animation-delay": animationDelay,
                  "-ms-animation-delay": animationDelay,
                  "animation-delay": animationDelay
              });
          });
                
          $('[data-animation]').waypoint(function (direction) {
              if (direction == "down") {
                  $(this).addClass("animated " + $(this).data("animation"));
              }
          }, {
              offset: '90%'
          }).waypoint(function (direction) {
              if (direction == "up") {
                  $(this).removeClass("animated " + $(this).data("animation"));
              }
          }, {
              offset: '100%'
          });
            
            })(jQuery);
        </script>
  </body>
</html>
