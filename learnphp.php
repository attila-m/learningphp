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

    $str = <<<EOD
    The customers name is
    $usersName and they
    live at $streetAddress
    in $cityAddress</br>
    EOD;

    echo $str;

    define('PI', 3.1415926);

    echo "the value of PI is " . PI;

    echo "<br>";
    echo "<br>";

    $customers = array(array('Attila', 28, 'm'),
                        array('Peter', 33, 'm'),
                        array('Gabor', 24, 'm'));

    for($row = 0; $row < 3; $row++) {
        for($col = 0; $col < 3; $col++) {
            echo $customers[$row][$col] . " ";
        }
        echo "<br>";
    }

    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }

    echo "add numbers: 2 + 3 = " .  addNumbers(2, 3);

    ?>
</body>

</html>
