<!DOCTYPE html>
<html>
<head>
    <a href="http://example.com/search.html?query=cat&type=image">Blarg</a>
</head>
<body>
<p>
    <?php
        $query = $_GET["query"];
        $type = $_GET ["type"];
        echo "The query is " . "$query" . " and the type is " . "$type";
    ?>
</p>
</body>
</html>