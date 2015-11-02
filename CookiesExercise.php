<html>
<head>
    <form action="Homepage.php.php" method="post">
        <label>Username</label><input type=“text” name=“username”>
        <label>Password</label><input type=“text” name=“password”>
        <input type="submit" value="Submit">
    </form>
</head>
<body>
<p>
    <?php
        $username = "Shia";
        $password = "ActualCannibal";

        setcookie('access_level','standarduser');
    ?>
</p>
</body>
</html>