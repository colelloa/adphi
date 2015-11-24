<div id='nav-wrapper'>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href=".">Union Chapter - Alpha Delta Phi</a>
      </div>
      <div>
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us
                                                      <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="aboutus.php">About the Union Chapter</a></li>
              <li><a href="history.php">History of the Alpha Delta Phi</a></li>
            </ul>
          </li>
          <li><a href="events.php">Events</a></li> 
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Historical Archive
                                                              <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="newsletter.php">Newsletters</a></li>
              <li><a href="songs.php">Songs</a></li> 
            </ul> 
           <li><a href="donate.php">Donate</a></li>
     <!--     <li><a href="contact.php">Contact Us</a></li> -->

          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<script type="text/javascript">
    $(function(){
    $('.dropdown').hover(function() {
        $(this).addClass('open');
    },
    function() {
        $(this).removeClass('open');
    });
});
</script>