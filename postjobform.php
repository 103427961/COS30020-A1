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
            <li
                class="<?php echo basename(htmlspecialchars($_SERVER["PHP_SELF"])) == "index.php" ? "liactive" : ""; ?>">
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
            <li
                class="<?php echo basename(htmlspecialchars($_SERVER["PHP_SELF"])) == "about.php" ? "liactive" : ""; ?>">
                <a href="about.php">About this</a>
            </li>
        </ul>
    </nav>
    <div class="center container">
        <h1>Job Vacancy Posting System</h1>
        <div class="center form-style">
            <form action="postjobprocess.php" method="post">
                <div class="input-group">
                    <div class="center text-input">
                        <label for="pid">Position ID: </label>
                        <input type="text" id="pid" name="pid" maxlength="5" />
                    </div>
                    <div class="center text-input">
                        <label for="title">Title: </label>
                        <input type="text" id="title" name="title" maxlength="20" />
                    </div>
                    <div class="center text-input">
                        <label for="desc">Description: </label>
                        <textarea rows="5" maxlength="260" id="desc" name="desc"></textarea>
                    </div>
                    <div class="center text-input">
                        <label for="cdate">Closing Date: </label>
                        <input type="text" id="cdate" name="cdate" value="<?php echo date("d/m/y"); ?>" />
                    </div>
                    <div class="center typed-input">
                        <span class="typed-span">Position:</span>
                        <input type="radio" id="pos1" name="pos" value="Full Time" />
                        <label for="pos1">Full Time</label>
                        <input type="radio" id="pos2" name="pos" value="Part Time" />
                        <label for="pos2">Part Time</label>
                    </div>
                    <div class="center typed-input">
                        <span class="typed-span">Contract:</span>
                        <input type="radio" id="contract1" name="contract" value="On-going" />
                        <label for="contract1">On-going</label>
                        <input type="radio" id="contract2" name="contract" value="Fixed Term" />
                        <label for="contract2">Fixed Term</label>
                    </div>
                    <div class="center typed-input">
                        <span class="typed-span">Application by:</span>
                        <input type="checkbox" id="post" name="post" value="post" />
                        <label for="post">Post</label>
                        <input type="checkbox" id="mail" name="mail" value="mail" />
                        <label for="mail">Mail</label>
                    </div>
                    <div class="center text-input">
                        <label for="loc">Location: </label>
                        <select name="loc" id="loc">
                            <option value="" selected disabled hidden>---</option>
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
                </div>
                <div class="flex-vertical center">
                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                </div>
                <div class="redirect-link center"><p>All fields are required. <a href="index.php">Return to Home Page</a></p></div>
            </form>
        </div>
    </div>
</body>

</html>