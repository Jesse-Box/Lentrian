    </section>
    <nav class="bottom-nav">
      <ul>
        <li><a href="contact.php">contact</a></li>
      </ul>
    </nav>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script type="text/javascript" charset="utf-8"> //Max Image Trigger
      $(function(){
        $('#maximage').maximage({
          cycleOptions: {
            speed: 1000
          },
          fillElement: '#holder',
          backgroundSize: 'contain'
        });
      });
    </script>
    <script type="text/javascript"> //Grid-a-licious Trigger
        $(document).ready(function () {
          $("#acquire").gridalicious({
              gutter: 4,
              width: 100,
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