<?php 
$PageTitle = "LENTRIAN - COLLECTIONS";
$Container = "collections";
include('inc/header.php'); ?>

<a href="#" id="collection-1">
  <img src="img/collection-1-thumb.jpg" "alt=collection I">
  <h6>Collection I</h6>
</a>
<a href="#" id="collection-2">
  <img src="img/collection-2-thumb.jpg" "alt=collection II">
  <h6>Collection II</h6>
</a>
<a href="#" id="collection-3">
  <img src="img/collection-3-thumb.jpg" "alt=collection III">
  <h6>Collection III</h6>
</a>
<script type="text/javascript"> //Fresco Collection-1 Trigger 
  jQuery(document).ready(function($) {

    $('#collection-1').bind('click', function(event) {
      // stop default click behavior
      event.preventDefault();

      Fresco.show([
        {
        url: 'img/collection-1/LENTRIAN 1.1.jpg'
        }, 

        {
        url: 'img/collection-1/LENTRIAN 1.jpg'
        },

        {
        url: 'img/collection-1/LENTRIAN 2.jpg'
        },

        {
        url: 'img/collection-1/LENTRIAN 3.3.jpg'
        },

        {
        url: 'img/collection-1/LENTRIAN 3.jpg'
        },

        {
        url: 'img/collection-1/LENTRIAN 4.jpg'
        },

        {
        url: 'img/collection-1/LENTRIAN 5.jpg'
        },

        {
        url: 'img/collection-1/LENTRIAN 6.jpg'
        },

        {
        url: 'img/collection-1/LENTRIAN 7.jpg'
        },

        {
        url: 'img/collection-1/LENTRIAN 8.jpg'
        },

        {
        url: 'img/collection-1/LENTRIAN 9.jpg'
        }
      ]);  
    });
  });
</script>
<script type="text/javascript"> //Fresco Collection-1 Trigger 
  jQuery(document).ready(function($) {

    $('#collection-2').bind('click', function(event) {
      // stop default click behavior
      event.preventDefault();

      Fresco.show([
        {
        url: 'img/collection-2/IMG_9438.jpg'
        }, 

        {
        url: 'img/collection-2/IMG_9469.jpg'
        },

        {
        url: 'img/collection-2/IMG_9481.jpg'
        },

        {
        url: 'img/collection-2/IMG_9546.jpg'
        },

        {
        url: 'img/collection-2/IMG_9549.jpg'
        },

        {
        url: 'img/collection-2/IMG_9575.jpg'
        },

        {
        url: 'img/collection-2/IMG_9579.jpg'
        },

        {
        url: 'img/collection-2/IMG_9615.jpg'
        },

        {
        url: 'img/collection-2/IMG_9650.jpg'
        },

        {
        url: 'img/collection-2/IMG_9667.jpg'
        },

        {
        url: 'img/collection-2/IMG_9669.jpg'
        },

        {
        url: 'img/collection-2/IMG_9678.jpg'
        }
      ]);  
    });
  });
</script>
<script type="text/javascript"> //Fresco Collection-1 Trigger 
  jQuery(document).ready(function($) {

    $('#collection-3').bind('click', function(event) {
      // stop default click behavior
      event.preventDefault();

      Fresco.show([
        {
        url: 'img/collection-3/F1000001.jpg'
        }, 

        {
        url: 'img/collection-3/F1010005.jpg'
        },

        {
        url: 'img/collection-3/F1010012.jpg'
        },

        {
        url: 'img/collection-3/F1010016.jpg'
        },

        {
        url: 'img/collection-3/F1020013.jpg'
        },

        {
        url: 'img/collection-3/F1030001.jpg'
        },

        {
        url: 'img/collection-3/F1030015.jpg'
        },

        {
        url: 'img/collection-3/F1030018.jpg'
        },

        {
        url: 'img/collection-3/F1030032.jpg'
        },

        {
        url: 'img/collection-3/F1030037.jpg'
        },

        {
        url: 'img/collection-3/F1040002.jpg'
        },

        {
        url: 'img/collection-3/F1040003.jpg'
        },

        {
        url: 'img/collection-3/F1040008.jpg'
        },

        {
        url: 'img/collection-3/F1040010.jpg'
        },

        {
        url: 'img/collection-3/F1040016.jpg'
        },

        {
        url: 'img/collection-3/F1040026.jpg'
        },

        {
        url: 'img/collection-3/F1040028.jpg'
        },

        {
        url: 'img/collection-3/F1040029.jpg'
        },

        {
        url: 'img/collection-3/F1040035.jpg'
        }
      ]);  
    });
  });
</script>
<?php 
include('inc/footer.php'); ?>