<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Forms and Validations</title>
    <style>
		.error {
			color: red;
		}
	</style>
</head>
<body>
    <?php
    $name = $website = $position = $experience = $estatus = $comments = "";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if (empty($_POST['name']))
        {
            echo "<span class=\"error\">Error: First name required</span>";
        }
        elseif (!preg_match('/^[a-zA-z]*$/', $_POST['name']))
        {
            echo "<span class=\"error\">Error: Name can only contain letters</span>";
        }
        elseif (empty($_POST['website']))
        {
            echo "<span class=\"error\">Error: Website required</span>";
        }
        elseif (!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $_POST['website']))
        {
            echo "<span class=\"error\">Error: Website is in wrong format</span>";
        }
        else
        {
            $name = validate($_POST['name']);
            $website = validate($_POST['website']);
            $position = validate($_POST['position']);
            $experience = validate($_POST['experience']);
            $estatus = validate($_POST['estatus']);
            $comments = validate($_POST['comments']);
        }
    }
    ?>
    <form name="employment" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"> 
    <table width="600" border="0" cellspacing="1" cellpadding="1">
        <tr>
        <td><h2>Employment Application</h2></td>
        <td></td>
        </tr>
        <tr>
        <td>Name</td>
        <td><input type="text" name="name" maxlength="50" />
        </td>
        </tr>
        <tr>
        <td>Website</td>
        <td><input type="text" name="website" maxlength="50" /></td>
        </tr>
        <tr>
        <td>Position</td>
        <td>
            <select name="position">
                <option value="Accountant">Accountant</option>
                <option value="Receptionist">Receptionist</option>
                <option value="Administrator">Administrator</option>
                <option value="Supervisor">Supervisor</option>
            </select>
        </td>
        </tr>
        <tr>
        <td>Experience Level</td>
        <td>
            <select name="experience">        
                <option value="Entry Level">Entry Level</option>
                <option value="Some Experience">Some Experience</option>
                <option value="Very Experienced">Very Experienced</option>
            </select>
        </td>
        </tr>
        <tr>
        <td>Employment Status</td>
        <td>
            <input type="radio" name="estatus" value="Employed" checked>Employed
            <input type="radio" name="estatus" value="Unemployed">Unemployed
            <input type="radio" name="estatus" value="Student">Student
        </td>
        </tr>
        <tr>
        <td>Additional Comments</td>
        <td>
            <textarea name="comments" cols="45" rows="5"></textarea>
        </td>
        </tr>
        <tr>
        <td></td>
        <td>
            <input type="submit" name="submit" value="Submit" />
            <input type="reset" name="reset" value="Reset" />
        </td>
        </tr>
    </table>
    </form>
    <h2>User Inputs:</h2>
    <?php
    echo "Name: " . $name;
    echo "<br>";
    echo "website: " . $website;
    echo "<br>";
    echo "position: " . $position;
    echo "<br>";
    echo "experience: " . $experience;
    echo "<br>";
    echo "estatus: " . $estatus;
    echo "<br>";
    echo "comments: " . $comments;
    echo "<br>";
    ?>
</body>
</html>