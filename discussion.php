<?php
// Define variables used in the HTML header for this page.
$page = 'discussion';
$title = 'Discussion';
$description = 'discussion page';
$author = 'Sardor Botirov';

// Display the header which uses the above variables.
include 'includes/header.php';
require './dbconnection/dbconnection.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
            <main class='discussion'>
    <aside>
        <form method='POST'>
            <h2>Discussion</h2>
            <label for="first">First Name *
                <?php echo $errfirst ?> </label>
            <input type="text" name='firstname' value="<?php echo $firstname; ?>" id="first">

            <label for="last">Last name: *
                <?php echo $errlast ?> </label><input type="text" name="lastname" value="<?php echo $lastname; ?>" id="last">
            <label for="comment">Leave your comment</label>
            <textarea name="comment" id="comment" rows="10" data-gramm_editor="false" required></textarea>
            <input type="submit" name="submit" value="Leave a comment">
        </form>
        <?php

//Selecting id,username,email from disscussion #####################################
$SelectQueryString = "SELECT firstname, lastname, comment FROM disscussion"; //
$fetch = $dbConnection->prepare($SelectQueryString); //##########
$fetch->execute(); //###########
$fetch = $fetch->fetchAll(PDO::FETCH_ASSOC); //############
//##################################################################################

//Creating html aside with foreach loop ############################################
echo "<aside class='comment'><h2>Comments</h2>";
foreach ($fetch as $comment) {
    echo "<section>";
    foreach ($comment as $key => $value) {
        if ($key === 'firstname') {
            echo "<h3>Person: $value</h3>";
        }
        if ($key === 'comment') {
            echo "<p>comment is: $value</p>";
        }
    }
    echo "</section>";
}
echo "</aside>";
//##################################################################################
?>
    </aside>
</main>


<?php
// Display the footer.
include 'includes/footer.php';
?>