<?php 
$PageTitle = "COLLECTIONS";
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
        url: 'img/collection-1/LENTRIAN 1.1.jpg',
        caption: "Quote 1" }, 

        {
        url: 'img/collection-1/LENTRIAN 1.jpg',
        caption: "Quote 2" },

        {
        url: 'img/collection-1/LENTRIAN 2.jpg',
        caption: "Quote 3" },

        {
        url: 'img/collection-1/LENTRIAN 3.3.jpg',
        caption: "Quote 4" },

        {
        url: 'img/collection-1/LENTRIAN 3.jpg',
        caption: "Quote 5" },

        {
        url: 'img/collection-1/LENTRIAN 4.jpg',
        caption: "Quote 6" },

        {
        url: 'img/collection-1/LENTRIAN 5.jpg',
        caption: "Quote 7" },

        {
        url: 'img/collection-1/LENTRIAN 6.jpg',
        caption: "Quote 8" },

        {
        url: 'img/collection-1/LENTRIAN 7.jpg',
        caption: "Quote 9" },

        {
        url: 'img/collection-1/LENTRIAN 8.jpg',
        caption: "Quote 10" },

        {
        url: 'img/collection-1/LENTRIAN 9.jpg',
        caption: "Quote 11" }
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
        url: 'img/collection-2/IMG_9438.jpg',
        caption: "Quote 1" }, 

        {
        url: 'img/collection-2/IMG_9469.jpg',
        caption: "Quote 2" },

        {
        url: 'img/collection-2/IMG_9481.jpg',
        caption: "Quote 3" },

        {
        url: 'img/collection-2/IMG_9546.jpg',
        caption: "Quote 4" },

        {
        url: 'img/collection-2/IMG_9549.jpg',
        caption: "Quote 5" },

        {
        url: 'img/collection-2/IMG_9575.jpg',
        caption: "Quote 6" },

        {
        url: 'img/collection-2/IMG_9579.jpg',
        caption: "Quote 7" },

        {
        url: 'img/collection-2/IMG_9615.jpg',
        caption: "Quote 8" },

        {
        url: 'img/collection-2/IMG_9650.jpg',
        caption: "Quote 9" },

        {
        url: 'img/collection-2/IMG_9667.jpg',
        caption: "Quote 10" },

        {
        url: 'img/collection-2/IMG_9669.jpg',
        caption: "Quote 11" },

        {
        url: 'img/collection-2/IMG_9678.jpg',
        caption: "Quote 12" }
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
        url: 'img/collection-3/F1000001.jpg',
        caption: "Quote 1" }, 

        {
        url: 'img/collection-3/F1010005.jpg',
        caption: "Quote 2" },

        {
        url: 'img/collection-3/F1010012.jpg',
        caption: "Quote 3" },

        {
        url: 'img/collection-3/F1010016.jpg',
        caption: "Quote 4" },

        {
        url: 'img/collection-3/F1020013.jpg',
        caption: "Quote 5" },

        {
        url: 'img/collection-3/F1030001.jpg',
        caption: "Quote 6" },

        {
        url: 'img/collection-3/F1030015.jpg',
        caption: "Quote 7" },

        {
        url: 'img/collection-3/F1030018.jpg',
        caption: "Quote 8" },

        {
        url: 'img/collection-3/F1030032.jpg',
        caption: "Quote 9" },

        {
        url: 'img/collection-3/F1030037.jpg',
        caption: "Quote 10" },

        {
        url: 'img/collection-3/F1040002.jpg',
        caption: "Quote 11" },

        {
        url: 'img/collection-3/F1040003.jpg',
        caption: "Quote 12" },

        {
        url: 'img/collection-3/F1040008.jpg',
        caption: "Quote 13" },

        {
        url: 'img/collection-3/F1040010.jpg',
        caption: "Quote 14" },

        {
        url: 'img/collection-3/F1040016.jpg',
        caption: "Quote 15" },

        {
        url: 'img/collection-3/F1040026.jpg',
        caption: "Quote 16" },

        {
        url: 'img/collection-3/F1040028.jpg',
        caption: "Quote 17" },

        {
        url: 'img/collection-3/F1040029.jpg',
        caption: "Quote 18" },

        {
        url: 'img/collection-3/F1040035.jpg',
        caption: "Quote 19" }
      ]);  
    });
  });
</script>
<?php 
include('inc/footer.php'); ?>