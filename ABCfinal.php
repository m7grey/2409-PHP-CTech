<html>
<head>
    <title>06.example.php</title>
    <link rel="stylesheet" href="ABC.css">
    <link rel="stylesheet" href="abc-addon.css">
    <style>
        .markCell {
            background-color: antiquewhite;
        }
    </style>

</head>

<body>
<div class='divBody'>
    <h1>ABC Counter</h1>
    <?php
    $range = 27;
    $x = isset($_GET["abccount"]);
    if ($x) {
        $range = $_GET["abccount"];
        $range++;
    }

    function getOption($key, $default) {
        $value = isset($_GET[$key]);
        if ($value) {
            $value = $_GET[$key];
        }
        else {
            $value = $default;
        }
        return $value;
    }

    $mark = getOption("mark","");
    $vowel = getOption("vowel","");


    for ($i = 0; $i < $range - 1; $i++) {
        $letter = chr($i + 65);
        $highLight = "";

        $lower = strtolower($letter);

        if ($mark == $letter) {
            $highLight = "markCell";
        }
        echo "<div class='abc  $highLight'>$letter<sub class='other'>$lower</sub> </div>";
    }
    ?>
</div>
</body>
</html>