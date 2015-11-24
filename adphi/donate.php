<!DOCTYPE html>
<html>
    <?php
        $pagetitle = 'Donate to the Union Chapter!';
        include 'includes/head.php';
    ?>
    <div class='index-element'>
    <h1 class='main-bottom-header donate-header'> DONATE TO THE UNION CHAPTER OF THE ALPHA DELTA PHI </h1>
    <form id='donate-form' action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <table id='donate-table'>
    <tr><td><input type="hidden" name="on0" value="Message">Add A Message!</td></tr><tr><td><input type="text" name="os0" size="50"></td></tr>
    </table>
    <!-- <input type="hidden" name="encrypted" value="SOMETHINGTHATIDONTWANTOPENSOURCED
    "> -->
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
    </div>

        <div id = 'pledge-program' class='index-element'> 
            <h1>House Improvements</h1>
            <p>
            One of the main goals of our new member education process is to create a strong bond between the members of the pledge class. To create this bond, we have the pledges work with a local alumnus, David Schachne to complete a group project.  David Schachne is the president of our alumni association and has professional experience in carpentry and construction. Brother Schachne spends his free time with the pledge class helping them construct the project and completing the more complicated labor. The project is generally an addition to the house that will benefit the house as well as the brotherhood. It is usually completed in a few days and is a great experience that allows for the development of many important memories. In 2013, the pledge class built outdoor benches surrounding the left section of our front porch. In 2014, the class built a decorative lattice for the left side of the porch. The lattice displays our shield with the star, crescent, fraternity symbols, and founding year of our chapter. In 2015, the pledge class completed a project on our speaker system. They completely refurbished our stereo cabinet and created decorative speaker frames to hold brand new speakers on the walls of our bar room.
            </p>
        </div>
            <?php 
                $slider = 'donate';
                include 'includes/slider.php'; 
            ?>
    </br>
    
    <?php include 'includes/foot.php'; ?>
</html>