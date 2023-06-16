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
    ?>
    <p><a href="index.php">Return to Home Page</a></p>
</body>

</html>