<html>

<head>
    <title>Information Gathered</title>
</head>

<body>
    <?php

    echo "<p>Data processed on: </>\n";
    echo "<br>";

    date_default_timezone_set('UTC');

    echo date('h:i:s:u a, l F jS Y e');

    $usersName = $_POST['username'];
    $streetAddress = $_POST['streetaddress'];
    $cityAddress = $_POST['cityaddress'];

    echo "<br>";
    echo "<br>";

    echo $usersName . "</br>";
    echo $streetAddress . "</br>";
    echo $cityAddress . "</br>";

    ?>
</body>

</html>
