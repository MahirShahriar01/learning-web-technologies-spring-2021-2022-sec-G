<html>
<body>
    <h3>  form </h3>
    <form method="POST">
        <h4> First Name : </h4>
        <input type="text" name="f_name"><br>
        <input type="submit" value="Display" name="submit">
    </form>
</body>
</html>
<?php
    if (isset($_POST['submit'])) {
        $f_name = $_POST['f_name'];
        echo "<h1><i> Welcome, $f_name</i></h1>";
    }
?>