<?php
// Define variables used in the HTML header for this page.
$page = 'contact';
$title = 'Contact Me';
$description = 'Contact page';
$author = 'Sardor Botirov';

// Display the header which uses the above variables.
include 'includes/header.php';
?>
<main class="contact">
    <aside>
        <h2>Contact me</h2>
        <form method="POST" action="mailto:sbotiroff@gmail.com">
            <label for="name">Name: </label>
            <input id="name" type="text" name="name">
            <label for="email">Email: </label>
            <input id="email" type="email">
            <label for="desc">About</label>
            <textarea name="text" id="desc" rows="10" data-gramm_editor="false"></textarea>
            <input type="submit" value="Send">
        </form>
    </aside>

</main>


<?php
// Display the footer.
include 'includes/footer.php';
?>