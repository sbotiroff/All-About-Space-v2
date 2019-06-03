<?php
// Define variables used in the HTML header for this page.
$page = 'galaxy';
$title = 'Galaxy';
$description = 'Galaxy page';
$author = 'Sardor Botirov';

// Display the header which uses the above variables.
include 'includes/header.php';
?>
<main class="galaxy">
    <Section class="first-section">
        <h2>Elliptical Galaxy</h2>
        <p>Elliptical galaxies are among the largest single star systems in the universe and are built by the
            collisions of many smaller galaxies.
            Galaxies come in many shapes and sizes. Among the largest are the "ellipticals", massive ball-shaped
            conglomerations of up to a trillion stars.</p>
    </Section>
    <Section class="second-section">
        <h2>Spiral Galaxy</h2>
        <p>Spiral galaxies take their name from the winding spiral shape they demonstrate. Most of the galaxies in the
            universe observed by scientists are spiral galaxies. These twisted collections of stars and gas often have
            beautiful shapes and are made up of hot young stars.</p>
    </Section>
    <Section class="third-section">
        <h2>Irregular Galaxy</h2>
        <p>Irregular galaxies are as their name suggests: irregular in shape.Irregulars usually do not have enough
            structure to characterise them as spirals or ellipticals. They may show some bar structure, they may have
            active regions of star formation, and some smaller ones are listed as "dwarf irregulars", very similar to
            the very earliest galaxies that formed about 13.5 billion years ago. Irregulars are characterised by their
            structures (or lack of them).</p>
    </Section>
</main>


<?php
// Display the footer.
include 'includes/footer.php';
?>