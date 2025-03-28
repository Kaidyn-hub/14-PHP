<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Output 1</title>
    <style>
        body {
            font-family: "Arial";
        }
    </style>
</head>
<body>
    <h1>PHP Output No. 1</h1>
    
    <fieldset style="margin-top: 20px">
        <form action="redirect.php" method="POST">
        <table>
            <tr>
                <td>Age</td>
                <td>
                    <input type="number" name="age" placeholder="Input Age" required />
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender" id="gender">
                        <option value=" " disabled selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" placeholder="Enter Your Email" required />
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <input type="text" name="address" placeholder="Enter Your Address" required />
                </td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td>
                    <input type="number" name="no" placeholder="Enter Contact Number" required />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit Data">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
        </form>
    </fieldset>

</body>
</html>