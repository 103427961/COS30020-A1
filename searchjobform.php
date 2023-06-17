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
    <h1>Job Vacancy Posting System</h1>
    <form action="searchjobprocess.php" method="get">
        <label for="title">Job Title: </label>
        <input type="text" id="title" name="title" maxlength="20" /> <br />
        <label for="pos">Position:</label>
        <select name="filter[4]" id="pos">
            <option value="" selected>---</option>
            <option value="Full Time">Full Time</option>
            <option value="Part Time">Part Time</option>
        </select>

        <label for="contract">Contract:</label>
        <select name="filter[5]" id="contract">
            <option value="" selected>---</option>
            <option value="On-going">On-going</option>
            <option value="Fixed Term">Fixed Term</option>
        </select>

        <p>Application method:
            <input type="checkbox" id="post" name="filter[6]" value="post">
            <label for="post">Post</label>
            <input type="checkbox" id="mail" name="filter[7]" value="mail">
            <label for="mail">Mail</label>
        </p>
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
        <button type="submit">Submit</button>
    </form>
    <p><a href="index.php">Return to Home Page</a></p>
</body>

</html>