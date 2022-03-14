<?php 
    require('header.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Information</title>
</head>
<fieldset><legend align="center"><b><h1>Customer list</h1></b></legend>
    <table align='right'>
        
    </table>
    
    <br><br>
    <table border="1" align="center">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PASSWORD</th>
            <th>EMAIL</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Steve</td>
            <td>123</td>
            <td>steve@gmail.com</td>
            <td>
                <a href="edit.php?id=1">EDIT</a>
                <a href="delete.php">DELETE</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Tony</td>
            <td>123</td>
            <td>tony@gmail.com</td>
            <td>
                <a href="edit.php?id=2">EDIT</a>
                <a href="delete.php">DELETE</a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bruce</td>
            <td>123</td>
            <td>bruce@gmail.com</td>
            <td>
                <a href="edit.php?id=3">EDIT</a>
                <a href="delete.php">DELETE</a>
            </td>
        </tr>
    </table>

    </fieldset>
    <tr>
            <td>
            <a href="home.php">Go to Home</a>
            </td>
            <td></td><td></td>
            <td>
            <a href="../controllers/logout.php">Logout</a>
            </td>
        </tr>
</body>
</html>