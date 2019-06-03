<?php
// Define variables used in the HTML header for this page.
$page = 'resources';
$title = 'Resources';
$description = 'resources page';
$author = 'Sardor Botirov';

// Display the header which uses the above variables.
include 'includes/header.php';
?>
<main class="resources">
    <table>
        <caption>
            <h1>Resources</h1>
        </caption>
        <thead>
            <tr>
                <th scope="col">Resources</th>
                <th scope="col">Websites</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td>Nasa website</td>
                <td><a href="https://spaceplace.nasa.gov">Spaceplace.nasa.gov</a></td>
            </tr>
            <tr>
                <td>W3 school</td>
                <td><a href="https://www.w3schools.com/">w3schools.com</a></td>
            </tr>
            <tr>
                <td>Space.com</td>
                <td><a href="https://www.space.com/">Space.com</a></td>
            </tr>
            <tr>
                <td>Codepen.io</td>
                <td><a href="https://codepen.io/">Codepen</a></td>
            </tr>
        </tbody>

        <tfoot>
            <tr>
                <td>Total number of resources : 4</td>
                <td>Total number of resource's websites : 4</td>
            </tr>

        </tfoot>

    </table>
    <picture>
        <source media="(min-width:60em)" srcset="images/boat.jpg">
        <source media="(min-width:40em)" srcset="images/boat-medium.jpg">
        <source media="(min-width:20em)" srcset="images/boat-small.jpg">
        <img class="img" src="images/boat-medium.jpg" alt="boat">
    </picture>

</main>


<?php
// Display the footer.
include 'includes/footer.php';
?>