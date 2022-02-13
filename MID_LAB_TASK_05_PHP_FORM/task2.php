<html>
<body>
    <h3>  form </h3>
    <form method="POST">
        <h4> Email : </h4>
        <input type="text" name="email"><br>
        <input type="submit" value="Display" name="submit">
    </form>
</body>
</html>
<?php
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        echo "<h1><i> your mail, $email</i></h1>";
    }
?>