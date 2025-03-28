<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $req_type = '$_POST';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP Output No. 1</title>
    <style>
        body {
            font-family: "Arial";
        }
    </style>
</head>
<body>
<h1>PHP Output No. 1</h1>
    <table>
        <tr>
            <td width="120">Age: </td>
            <td>
                <!-- Use ternary operator to check if the request type is GET or POST -->
                <?php echo $_POST['age']; ?>
            </td>
        </tr>
        <tr>
            <td>Gender: </td>
            <td>
                <!-- Use ternary operator to check if the request type is GET or POST -->
                <?php echo $_POST['gender']; ?>
            </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>
                <!-- Use ternary operator to check if the request type is GET or POST -->
                <?php echo $_POST['email'];?>
            </td>
        </tr>
        <tr>
            <td>Address: </td>
            <td>
                <!-- Use ternary operator to check if the request type is GET or POST -->
                <?php echo $_POST['address']; ?>
            </td>
        </tr>
        <tr>
            <td>Contact Number:</td>
            <td>
                <!-- Use ternary operator to check if the request type is GET or POST -->
                <?php echo $_POST['no'];?>
            </td>
        </tr>
    </table>
    <br><br>
    <a href="./">Return to Main Form</a>
</body>
</html>