
<?php echo '<div id="carousel-example-generic" class="carousel slide '.$slider.'-slider" data-ride="carousel">';
?>
  <!-- Indicators -->

  <ol class="carousel-indicators">
    <?php
        $picdirname = $slider."-slider/*";
        $picpaths = glob($picdirname);
        $numpics = count($picpaths);
        for($ind=0; $ind<$numpics;$ind++){
          echo "<li data-target='#carousel-example-generic' data-slide-to='".$ind."'></li>";
        }
    ?> 
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php
        for($imgnum=0;$imgnum<$numpics;$imgnum++){
          $curpicpath = $picpaths[$imgnum];
          $caption = str_replace('-', ' ', basename($curpicpath, '.jpg'));
          echo "<div class='item'>";
          echo "<img src='".$curpicpath."' alt='slide-image'>";
          echo "<div class='carousel-caption'>";
          echo $caption.'.';
          echo "</div>";
          echo "</div>" ;
        }
    ?>
  </div>
  <div class='new-caption-area'></div>

   <!-- active because reasons -->
  <script type="text/javascript">
    window.onload = function() {
      $('ol.carousel-indicators').children().first().addClass('active');
      $('div.carousel-inner').children().first().addClass('active');

      var caption = $('div.item:nth-child(1) .carousel-caption');
      $('.new-caption-area').html(caption.html());
      caption.css('display', 'none');

      $(".carousel").on('slide.bs.carousel', function (evt) {
          var caption = $('div.item:nth-child(' + ($(evt.relatedTarget).index() + 1) + ') .carousel-caption');
          $('.new-caption-area').html(caption.html());
          caption.css('display', 'none');
    });
    }
  </script>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
