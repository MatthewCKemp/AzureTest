<html>
<head>

</head>
<body>
<p>
    <?php

        $_SESSION['Value'] = 'ActualCannibalShiaLaBeauf';
        print $_SESSION['Value'];

        function displayAccessLevelInformation($accessLevel) {
            if ($accessLevel == "standarduser"){
                echo "<p>You are currently logged in as a standard user<p/>";
            }
            elseif ($accessLevel == "root") {
                echo "<p>You are currently logged in as a root user</p>";
                echo "<p>You now have access to additional administrative features</p>";
            }
        }
    ?>
</p>
</body>
</html>