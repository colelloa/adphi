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
     <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
    ">
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
