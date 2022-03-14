
<html>
    <head>
        <title>login page</title>
    </head>
   
        <center><form method="POST" action = "../controllers/loginCheck.php">
        <fieldset><legend align="center"><b><h1>Sign in</h1></b></legend>
        <table>
                <tr>
                    <td>Username :</td>
                    <td>
                    <input type="text" name="username" value="";>
                  </td>
                </tr>
                <tr>
                    <td>Password :</td>
                   <td>
                        <input type="password" name="password" value="";>
                 </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="login">

                        <a href="reg.php">sign up</a>
                    </td>
                </tr>
            </table>
            </fieldset>
        </form></center>
    </body>
</html>
