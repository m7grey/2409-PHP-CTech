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


    $mark = isset($_GET["mark"]);
    if ($mark) {
        $mark = $_GET["mark"];
    }

    else {
        $mark = "";
    }

    $vowel = isset($_GET["vowel"]);
    if ($vowel) {
        $vowel = $_GET["vowel"];
    }

    else {
        $vowel = "Y";
    }

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