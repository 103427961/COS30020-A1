<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="PHP" />
    <meta name="author" content="Nguyen The Vinh" />
    <title>Assignment 1</title>
</head>

<body>
    <h1>Job Vacancy Information</h1>
    <?php
    function check_empty(&$string)
    {
        $string = trim($string);
        if (!empty($string))
            return false;
        return true;
    }
    function validate_title($i)
    {
        if (check_empty($i))
            return "Title cannot be empty";
        if (strlen($i) > 20)
            return "Title must be 20 characters or less in length";
        if (preg_match("/[^\d\w,.! ]/", $i) == 1)
            return "Title can only contain alphanumeric characters including
                            spaces, comma, period";
        return "";
    }

    $title = $_GET["title"];
    $valid = validate_title($title);
    if ($valid != "") {
        echo "<p>$valid<p>";
        return;
    }
    $filename = "../../data/jobposts/jobs.txt";
    if (!file_exists($filename)) {
        echo "<p>Jobs text file does not exist</p>";
        return;
    }
    $title = strtolower($title);
    $matches = array();
    $joblist = array();
    $handle = fopen($filename, "r");
    while (!feof($handle)) {
        $data = fgets($handle);
        $data = explode("\t", $data);
        $joblist[] = $data;
    }
    foreach ($joblist as $job) {
        if (str_contains(strtolower($job[1]), $title)) {
            $matches[] = $job;
        }
    }
    fclose($handle);
    if (empty($matches)) {
        echo "<p>No matching job title</p>";
        return;
    }
    foreach ($matches as $job) {
        echo "<p>Title: $job[1]</p>";
        echo "<p>Description: $job[2]</p>";
        echo "<p>Closing Date: $job[3]</p>";
        echo "<p>Position: $job[5] - $job[4]</p>";
        $post = $job[6];
        $mail = $job[7];
        echo "<p>Application by: ";
        if ($post && $mail != "") {
            echo "Post and Email</p>";
        } else {
            echo $post != ""? "Post": "Email" . "</p>";
        }
        echo "<p>Location: $job[8]</p>";
    }
    ?>
    <p><a href="searchjobform.php">Search for another job vacancy</a></p>
    <p><a href="index.php">Return to Home Page</a></p>
</body>

</html>