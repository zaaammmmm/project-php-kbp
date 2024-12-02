<!DOCTYPE html>
<html>
<head>
    <title>Add Users</title>
</head>
<body>
    <!-- Navigation link to go back to the home page -->
    <a href="index.php">Go to Home</a>
    
    <!-- Form to collect user data (name, email, mobile) -->
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    // Check if the form is submitted
    if(isset($_POST['Submit'])) {
        // Get form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        // Include database connection file
        include_once("config.php");

        // Insert form data into the 'users' table in the database
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

        // Show success message after adding the user
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>