<html>
<head>
    <title>06.example.php</title>
    <link rel="stylesheet" href="ABC.css">
    <link rel="stylesheet" href="abc-addon.css">
    <style>
        .markCell{
            background-color: antiquewhite;
        }
    </style>

</head>

<body>
<div class="divBody">
    <h1>ABC Counter</h1>
    <?php
    $range = 27;
    $x = isset( $_GET["abccount"] );
    if ($x){
        $range = $_GET ["abccount"];
        $range ++;

    }

    $mark = isset ($_GET["mark"]);
    if ($mark){
        $mark = $_GET["mark"];
    }

    else {
        $mark="";
    }

    for ($i = 0; $i < $range - 1; $i++){
        $letter = chr($i + 65);
        $highLight = "";

        if ($mark == $letter){
            $highLight = "markcell";
        }
        echo "<div class='abc $highLight'>$letter<sub class='other'>$i</sub></div>";

    }
    ?>
</div>
</body>
</html>

<!-- an chr 65 is A --->
