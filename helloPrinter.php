<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
       $query = $_GET["query"];
        $type = $_GET ["type"];
        echo "The query is " . $query . " and the type is " . $type;
    ?>
</p>
</body>
</html>