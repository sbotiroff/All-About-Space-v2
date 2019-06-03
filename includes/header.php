<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo $title; ?>
    </title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="author" content="<?php echo $author; ?>">

    <!-- link to external CSS file -->

    <link rel="stylesheet" href="css/style.css?v=1.0" type="text/css">
</head>

<body>
    <header>
        <h1 class="h1-hidden-header">All About Space</h1>
        <p><a href="./index.php"><img src="./logo.png" alt="My logo"></a></p>
        <?php include 'includes/nav.php';?>
    </header>