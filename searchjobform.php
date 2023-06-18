<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="PHP" />
    <meta name="author" content="Nguyen The Vinh" />
    <link rel="stylesheet" href="style.css" />
    <title>Assignment 1</title>
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
    <div class="center container">
        <h1>Job Vacancy Posting System</h1>
        <form action="searchjobprocess.php" method="get" class="center form-style">
            <div class="center text-input">
                <label for="title">Job Title: </label>
                <input type="text" id="title" name="title" maxlength="20" />
            </div>
            <div class="center text-input">
                <label for="pos">Position:</label>
                <select name="filter[4]" id="pos">
                    <option value="" selected>---</option>
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>
                </select>
            </div>
            <div class="center text-input">
                <label for="contract">Contract:</label>
                <select name="filter[5]" id="contract">
                    <option value="" selected>---</option>
                    <option value="On-going">On-going</option>
                    <option value="Fixed Term">Fixed Term</option>
                </select>
            </div>
            <div class="center typed-input">
                <span class="typed-span">Application method:</span>
                <input type="checkbox" id="post" name="filter[6]" value="post">
                <label for="post">Post</label>
                <input type="checkbox" id="mail" name="filter[7]" value="mail">
                <label for="mail">Mail</label>
            </div>
            <div class="center text-input">
                <label for="loc">Location: </label>
                <select name="filter[8]" id="loc">
                    <option value="" selected>---</option>
                    <option value="ACT">ACT</option>
                    <option value="NSW">NSW</option>
                    <option value="NT">NT</option>
                    <option value="QLD">QLD</option>
                    <option value="SA">SA</option>
                    <option value="TAS">TAS</option>
                    <option value="VIC">VIC</option>
                    <option value="WA">WA</option>
                </select>
            </div>
            <div class="center">
                <button type="submit">Submit</button>
            </div>
        </form>
        <div class="redirect-link center"><p><a href="index.php">Return to Home Page</a></p></div>
    </div>
</body>

</html>