<?php 
    require('header.php');
?>
<html>
<head>
    <title>Update package</title>
</head>
    <center><form method="POST" action = "../controllers/packageCheck.php">
        
        
        <fieldset>
            <legend align="center"><b><h1>Update Packages</h1></b></legend>

            <p align="center">Enter informations</p>
            
            <table>
                <tr>
                    <td>Tour Place:</td>
                    <td>
                        <input type="text" name="Tour Place" value="" placeholder="Tour Place">
                    </td>
                </tr>
                <tr>
                    <td>Hotel Name:</td>
                    <td>
                        <input type="text" name="hotel" value="" placeholder="hotel">
                    </td>
                </tr>
                <tr>
                    <td>Package :</td>
                    <td>
                        <input type="text" name="package" value="" placeholder="package name">
                    </td>
                </tr>
                <tr>
                    <td>Person :</td>
                    <td>
                        <input type="number" name="person" value="" placeholder="number of persons">
                    </td>
                </tr>
                <tr>
                    <td>Cost:</td>
                    <td><input type="number" name="cost" value="" placeholder="amount of cost"></td>
                </tr>
               
                
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="submit">
                        <a href="managersDesk.php">Go to home</a>
                    </td>
                </tr>
            </table>
            </table>
            <h5 align='right'><a href="../controllers/logout.php">logout</a></h5>
            </fieldset>
        </form></center>
</body>
</html>