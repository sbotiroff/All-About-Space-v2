<?php
// Define variables used in the HTML header for this page.
$page = 'stars';
$title = 'Stars';
$description = 'Stars page';
$author = 'Sardor Botirov';

// Display the header which uses the above variables.
include 'includes/header.php';
?>
<main class="stars">
    <video autoplay loop muted poster="http://bbotiroff.me/video/1.jpg" id="myVideo">
        <source src="http://bbotiroff.me/video/1.mp4" type="video/mp4">
        <source src="http://bbotiroff.me/video/1.webm" type="video/webm">
        <source src="http://bbotiroff.me/video/1.ogv" type="video/ogg">
    </video>
    <aside>
        <section class="caption">
            <h2 class="border">Let's
                Learn About Stars</h2>
        </section>
    </aside>

    <section class="stars-info">
        <h2>What is a star?</h2>
        <p> We're
            all pretty familiar with stars. We see them on most clear nights as tiny, twinkling pinpricks of light in
            the sky. Stars are the topic of countless poems, stories, and nursery rhymes alike. But just what is a
            star, exactly?</p>

        <p>A star is a luminous ball of gas, mostly hydrogen and helium, held together by its own gravity. Nuclear
            fusion reactions in its core support the star against gravity and produce photons and heat, as well as
            small amounts of heavier elements. The Sun is the closest star to Earth</p>
    </section>

    <aside class="bgimg-2">
        <section class="caption">
            <h2 class="border">Where Do Stars Come From?</h2>
        </section>
    </aside>

    <section class="stars-info">
        <h3>Where Do Stars Come From?</h3>
        <p>According to current star formation theory, stars are born as clumps within gigantic gas clouds
            that
            collapse in on themselves. The cloud's material heats up as it falls inward under the force of
            its own
            gravity. When the gas reaches about 10 million K (18 million °F), hydrogen nuclei begin to fuse
            into
            helium nuclei, and the star is born. Energy from nuclear fusion radiates outward from the
            center of the
            burgeoning star, and gradually halts the gas cloud's collapse.</p>
    </section>


    <aside class="bgimg-3">
        <section class="caption">
            <h2 class="border">Types of Stars</h2>
        </section>
    </aside>
    <section class="stars-info">
        <h3>Types of Stars</h3>
        <p>A star's color relies on its temperature: hotter stars emit bluer light and cooler stars emit redder
            light. Temperature is also correlated to mass. Red dwarf stars have as little as 0.075 solar masses
            and
            a visible surface temperature less than 4,000 K. The most massive star known is R136a1, a
            Wolf-Rayet
            star 265 times the Sun's mass &mdash; its visible surface temperature hovers at a searing 50,000 K.
            The
            most massive (and hottest) stars exhaust their energy supply within a few million years, while tiny
            and
            cool red dwarf stars can keep on burning for many billions of years.</p>
    </section>
</main>


<?php
// Display the footer.
include 'includes/footer.php';
?>