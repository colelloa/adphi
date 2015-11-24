<!DOCTYPE html>
<html>
    <?php
        $pagetitle = 'Union Chapter - Alpha Delta Phi';
        include 'includes/head.php';
?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    


<?php
        $slider = 'front';
        include 'includes/slider.php';

?>
    <div id='main-wrapper'>
        <h1 id='main-header'> WELCOME TO ALPHA DELTA PHI </br> UNION CHAPTER </br> ONLINE!</h1>
        <p>
        Welcome to the website for the Union Chapter of Alpha Delta Phi! Feel free to explore and learn more about us, check out our recent/upcoming events and listen to our classic songs.
        </p>
        <p>
        Our founding purpose is the moral, social and intellectual development of our members, so as to help them make the most of their college experiences and lead impactful lives. The collective drive towards these fraternity ideals, the mentorship from older brothers, and the enduring friendships that we’ve formed have helped us grow into confident leaders.
        </p>
        <p>
        In 1859, the Union Chapter of Alpha Delta Phi was founded and is still thriving on campus. Our chapter house in a unique location overlooking the beautiful Jackson's gardens as our lovely backyard.
        </p>

    </div>

    <div id='facebook-plugin-wrapper' class='index-element'>
    <h1 class='main-bottom-header'> Follow Us On Facebook</h1>
    <div class="fb-page" data-href="https://www.facebook.com/unioncollegeadp" data-width="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/unioncollegeadp"><a href="https://www.facebook.com/unioncollegeadp">Alpha Delta Phi: Union Chapter</a></blockquote></div></div>
    </div>
<?php
    echo "<div id='featured-brother-wrapper' class='index-element'>";
    $picture = glob('featured-brother/*.png');
    $text = fopen('featured-brother/featured-brother.txt', 'r') or die("Unable to open file!");
    echo "<h1 class='main-bottom-header'> Featured Brother: ".str_replace('-', ' ', basename($picture[0], '.png')). "<br/> </h1>";
    echo '<img src="'. $picture[0] .'" id="featured-brother-picture" align="left">';
    echo "<p id='featured-brother-text'>".fread($text,filesize("featured-brother/featured-brother.txt"))."</p>";
    echo "</div>";
?>

        

<?php
        include 'includes/foot.php'; 
?> 
</html>