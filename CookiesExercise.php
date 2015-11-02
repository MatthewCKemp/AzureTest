<html>
<head>
    <form action="Homepage.php" method="post">
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

        setcookie('accessLevel','standarduser');
    ?>
</p>
</body>
</html>