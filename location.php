<?php
// Define variables used in the HTML header for this page.
$page = 'location';
$title = 'Location';
$description = 'location page';
$author = 'Sardor Botirov';

// Display the header which uses the above variables.
include 'includes/header.php';
?>
<main class="location">
    <h1>Our Location</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d172133.42643760383!2d-122.47598709682771!3d47.61476278601426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490102c93e83355%3A0x102565466944d59a!2sSeattle%2C+WA!5e0!3m2!1sen!2sus!4v1489445650913"
        frameborder="0"></iframe>

</main>


<?php
// Display the footer.
include 'includes/footer.php';
?>