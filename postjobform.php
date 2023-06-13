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
        <form action="postjobprocess.php" method="post">
            <label for="pid">Position ID: </label>
            <input type="text" id="pid" name="pid" maxlength="5"/> <br/>
            <label for="title">Title: </label>
            <input type="text" id="title" name="title" maxlength="20"/> <br/>
            <label for="desc">Description: </label>
            <textarea rows="5" maxlength="260" id="desc" name="desc"></textarea> <br/>
            <label for="cdate">Closing Date: </label>
            <input type="text" id="cdate" name="cdate"/> <br/>
            <div>
                <span>Position:</span>
                <input type="radio" id="pos1" name="pos"/>
                <label for="pos1">Full Time</label>
                <input type="radio" id="pos2" name="pos"/>
                <label for="pos2">Part Time</label>
            </div>
            <div>
                <span>Contract:</span>
                <input type="radio" id="contract1" name="contract"/>
                <label for="contract1">On-going</label>
                <input type="radio" id="contract2" name="contract"/>
                <label for="contract2">Fixed Term</label>
            </div>
            <div>
                <span>Application by:</span>
                <input type="checkbox" id="post" name="post" value="post"/>
                <label for="post">Post</label>
                <input type="checkbox" id="mail" name="mail" value="mail"/>
                <label for="mail">Mail</label>
            </div>
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
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </form>
        <p>All fields are required. <a href="index.php">Return to Home Page</a></p>
    </body>
</html>
