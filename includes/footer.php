<footer>

    <ul>
        <li><a href='about.php' class="<?php if ($page == 'about') {
    echo 'active';
}
?>">About</a></li>
        <li><a href="contact.php" class="<?php if ($page == 'contact') {
    echo 'active';
}
?>">Contact Me</a></li>
        <?php
$validate = "https://validator.w3.org/nu/?doc=https://";
$validate .= $_SERVER['SERVER_NAME'];
$validate .= $_SERVER['SCRIPT_NAME'];
print "<li class='validate'><a href=\"$validate\"> validate </a></li>";
?>
    </ul>



</footer>
</body>

</html>