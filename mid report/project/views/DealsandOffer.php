<?php 
include_once("header.php");
?>
<!DOCTYPE html>
<html>
<body>

<h1 align="center">Deals And Offers</h1>
<p align="center">Packages Table</p>
 <br><br>
    <table border="1" align="center">
        <tr>
            <th>Tour Place</th>
            <th>Hotel Name</th>
            <th>Packages</th>
            <th>Person</th>
            <th>Cost</th>
            <th>Update</th>
        </tr>
        <tr>
            <td>Cox Bazar</td>
            <td>Blue heaven</td>
            <td>2 days 3 nights</td>
            <td>2</td>
            <td>
                12000 tk
            </td>
            <td>
                <a href="package.php">EDIT</a>
                <a href="delete.php">DELETE</a>
            </td>
        </tr>
        <tr>
            <td>Saint martin</td>
            <td>Marmaid</td>
            <td>3 days 2 nights</td>
            <td>5</td>
            <td>
                15000 tk
            </td>
            <td>
                <a href="package.php">EDIT</a>
                <a href="delete.php">DELETE</a>
            </td>
        </tr>
        <tr>
            <td>Shajek</td>
            <td>Hill hotel</td>
            <td>2 days 2 nights</td>
            <td>1</td>
            <td>
                3000 tk
            </td>
            <td>
               <a href="package.php">EDIT</a>
                <a href="delete.php">DELETE</a>
            </td>
        </tr>
    </table>
     <li><a href="../controllers/logout.php">logout</a></li>
     <td>
          
                        <a href="managersDesk.php">Go to home</a>
                    </td>
</body>
</html>