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
            <li class="<?php echo basename(htmlspecialchars($_SERVER["PHP_SELF"])) == "index.php"? "liactive" : "";?>">
                <a href="index.php">Home</a>
            </li>
            <li class="<?php echo basename(htmlspecialchars($_SERVER["PHP_SELF"])) == "postjobform.php"? "liactive" : "";?>">
                <a href="postjobform.php">Post a job</a>
            </li>
            <li class="<?php echo basename(htmlspecialchars($_SERVER["PHP_SELF"])) == "searchjobform.php"? "liactive" : "";?>">
                <a href="searchjobform.php">Look for a job</a>
            </li>
            <li class="<?php echo basename(htmlspecialchars($_SERVER["PHP_SELF"])) == "about.php"? "liactive" : "";?>">
                <a href="about.php">About this</a>
            </li>
        </ul>
    </nav>
    <div class="center container">
        <h1>Job Vacancy Posting System</h1>
        <p>Name: Nguyen The Vinh</p>
        <p>Student ID: 102437961</p>
        <p>Email: <a href="mailto:vinhntswh00009@fpt.edu.vn">vinhntswh00009@fpt.edu.vn</a></p>
        <p>
            I declare that this assignment is my individual work.
            I have not worked collaboratively nor have I
            copied from any other student's work or from any other source</a>
        </p>
        <div class="flex-horizontal redirect-link">
            <div class="flex-vertical">
                <a href="postjobform.php">Post a job vacancy</a>
                <a href="searchjobform.php">Search for a job vacancy</a>
            </div>
            <div>
                <a href="about.php">About this assignment</a>
            </div>
        </div>
    </div>
    <?php
    ?>
</body>

</html>