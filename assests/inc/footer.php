  </section>
  <nav class="bottom-nav">
    <ul>
      <li><a href="#">various</a></li>
      <li><a href="#">contact</a></li>
    </ul>
  </nav>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
  <script type="text/javascript" charset="utf-8"> //Max Image Trigger
    $(function() { 
      var imgs = $('#maximage img');
      imgs.sort(function() { return 0.5 - Math.random() });
      $('#maximage').html( imgs );
      
      $('#maximage').maximage({
          cycleOptions: {
              speed: 800
          }
      });
    });
  </script>
  <script type="text/javascript"> //Grid-a-licious Trigger
      $(document).ready(function () {
        $("#collections").gridalicious({
            gutter: 20,
            width: 400,
            animate: true,
            animationOptions: {
                    speed: 200,
                    duration: 300
            },
        });
      });
  </script>
  </body>
</html>