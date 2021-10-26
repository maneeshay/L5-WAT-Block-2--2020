<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
</head>
<body>
    <form action="insertRecord.php" method="post">
        <fieldset>
            <legend>Enter Customer Detail</legend>
            <label for ="fname">First Name: </label>
            <input type="text" id="fname" name ="fname"><br /><br />
            <label for ="sname">Surname: </label>
            <input type="text" id="sname" name ="sname"><br /><br />
            <label for ="email">Email: </label>
            <input type="text" id="email" name ="email"><br /><br />
            <label for ="pass">Password: </label>
            <input type="text" id="pass" name ="pass"><br /><br />
            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select><br /><br />
            <label for ="age">Age: </label>
            <input type="text" id="age" name ="age"><br /><br />
            <input type="submit" value="Submit" name="submitBtn" />
        </fieldset>
    </form>

    <?php
        include 'selectRecord.php';
    ?>
</body>

<footer>
        <strong> <a href="../watIndex.html">Home</a></strong>
    </footer>
</html>