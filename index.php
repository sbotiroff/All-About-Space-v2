<?php
// Define variables used in the HTML header for this page.
$page = 'home';
$title = 'Home';
$description = 'Home page';
$author = 'Sardor Botirov';

// Display the header which uses the above variables.
include 'includes/header.php';
?>
<main class='home'>
    <section class="home-intro">
        <h2>All About Space</h2>
        <p>This website teaches you about space</p>
    </section>
    <aside>
        <section class="what-is-container">
            <h3>What is Planets ?</h3>
            <img class="img-home" src="./images/home/planet.png" alt="home planet">
            <p>This seemingly simple question doesn't have a simple answer. Everyone knows that Earth, Mars and Jupiter
                are planets. But both Pluto and Ceres were once considered planets until new discoveries triggered
                scientific debate about how to best describe them—a vigorous debate that continues to this day. The
                most recent definition of a planet was adopted by the International Astronomical Union in 2006. It says
                a planet must do three things:</p>
            <ul>
                <li> It must orbit a star (in our cosmic neighborhood, the Sun).</li>
                <li> It must be big enough to have enough gravity to force it into a spherical shape.</li>
                <li> It must be big enough that its gravity cleared away any other objects of a similar size near
                    its orbit
                    around the Sun.</li>
            </ul>

            <a href="./planets.php">See more about Planets</a>

        </section>
        <section class="what-is-container">
            <h3>What is Stars ?</h3>
            <img class="img-home" src="./images/home/star.png" alt="home starts">
            <p> We're
                all pretty familiar with stars. We see them on most clear nights as tiny, twinkling pinpricks of light
                in
                the sky. Stars are the topic of countless poems, stories, and nursery rhymes alike. But just what is a
                star, exactly?</p>

            <p>A
                star is a luminous ball of gas, mostly hydrogen and helium, held together by its own gravity. Nuclear
                fusion reactions in its core support the star against gravity and produce photons and heat, as well as
                small amounts of heavier elements. The Sun is the closest star to Earth</p>
            <a href="./stars.php">See more about Stars</a>
        </section>
        <section class="what-is-container">
            <h3>What is Galaxy?</h3>
            <img class="img-home" src="./images/home/galaxy.gif" alt="home galaxy">
            <p>Galaxy is a huge collection of gas, dust, and billions of stars and their solar systems. A galaxy is
                held
                together by gravity. Our galaxy, the Milky Way, also has a supermassive hole in the middle, when you
                look up at stars in the night sky, you’re seeing other stars in the Milky Way. If it’s really dark, far
                away from lights from cities and houses, you can even see the dusty bands of the Milky Way stretch
                across the sky</p>
            <a href="./galaxy.php">See more about Galaxy</a>
        </section>
        <section class="what-is-container">
            <h3>What is Universe?</h3>
            <img class="img-home" src="./images/home/universe.png" alt="home universe">
            <p>Universe is all of space and time and their contents, including planets, stars, galaxies, and all other
                forms of
                matter and energy. While the spatial size of the entire Universe is still unknown, it is possible to
                measure the observable universe.</p>
            <a href="./universe.php">See more about Universe</a>
        </section>
    </aside>
</main>


<?php
// Display the footer.
include 'includes/footer.php';
?>