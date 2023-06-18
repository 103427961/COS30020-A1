<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="PHP" />
    <meta name="author" content="Nguyen The Vinh" />
    <title>Assignment 1</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <nav>
        <ul>
            <li class="<?php echo basename(htmlspecialchars($_SERVER["PHP_SELF"])) == "index.php" ? "liactive" : ""; ?>">
                <a href="index.php">Home</a>
            </li>
            <li
                class="<?php echo basename(htmlspecialchars($_SERVER["PHP_SELF"])) == "postjobform.php" ? "liactive" : ""; ?>">
                <a href="postjobform.php">Post a job</a>
            </li>
            <li
                class="<?php echo basename(htmlspecialchars($_SERVER["PHP_SELF"])) == "searchjobform.php" ? "liactive" : ""; ?>">
                <a href="searchjobform.php">Look for a job</a>
            </li>
            <li class="<?php echo basename(htmlspecialchars($_SERVER["PHP_SELF"])) == "about.php" ? "liactive" : ""; ?>">
                <a href="about.php">About this</a>
            </li>
        </ul>
    </nav>
    <h1>About</h1>
    <p>The PHP version installed in mercury is:
        <?php echo PHP_VERSION ?>
    </p>
    <p>All the tasks listed in the Assignment page is attempted</p>
    <p>Special features: WIP</p>
    <p>Screenshots</p>
    <p><a href="index.php">Return to Home Page</a></p>
</body>

</html>