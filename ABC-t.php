<html>
<head>
    <title>06.example.php</title>
    <link rel="stylesheet" href="ABC.css">
    <link rel="stylesheet" href="abc-add.css">
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
    } else {
        $mark = "";
    }
//  display
    $display = isset($_GET["display"]);
    if ($display) {
        $display = $_GET["display"];
    } else {
        $display = "";
    }
    //declare vowel
    $vowel = isset($_GET["vowel"]);
    if ($vowel) {
        $vowel = $_GET["vowel"];
    } else {
        $vowel = "";
    }


    for ($i = 0; $i < $range - 1; $i++) {
        $letter = chr($i + 65);
        $letter_low = chr($i + 97);
        $highLight = "";

        if ($mark == $letter) {
            $highLight = "markCell";
        }
//        display=L
        if ($display == "L") {
            $letter = chr($i + 97);
            $letter_low = chr($i + 65);
        }
//        display=U
        if ($display == "U") {
            $letter = chr($i + 65);
            $letter_low = chr($i + 97);
        }
//        v_check('A', 'E', 'I', 'O', 'U');
        if ($vowel == "Y" && $letter == 'A') {
            $highLight = "vowel";
        } elseif ($vowel == "Y" && $letter == 'E') {
            $highLight = "vowel";
        } elseif ($vowel == "Y" && $letter == 'I') {
            $highLight = "vowel";
        } elseif ($vowel == "Y" && $letter == 'O') {
            $highLight = "vowel";
        } elseif ($vowel == "Y" && $letter == 'U') {
            $highLight = "vowel";
        } else ($vowel == "Y"){
        $highLight = ""};
//////      vowel=N
            if ($vowel == "N" && $letter == 'A') {
                $highLight = "";
            } elseif ($vowel == "N" && $letter == 'E') {
                $highLight = "";
            } elseif ($vowel == "N" && $letter == 'I') {
                $highLight = "";
            } elseif ($vowel == "N" && $letter == 'O') {
                $highLight = "";
            } elseif ($vowel == "N" && $letter == 'U') {
                $highLight = "";
            } else ($vowel == "N"){
            $highLight = "consonant"};
////        vowel=B
        if ($vowel == "B" && $letter == 'A') {
            $highLight = "vowel";
        } elseif ($vowel == "B" && $letter == 'E') {
            $highLight = "vowel";
        } elseif ($vowel == "B" && $letter == 'I') {
            $highLight = "vowel";
        } elseif ($vowel == "B" && $letter == 'O') {
            $highLight = "vowel";
        } elseif ($vowel == "B" && $letter == 'U') {
            $highLight = "vowel";
        } else ($vowel == "B"){
        $highLight = "consonant"};
//////
//       else($vowel == "N" && $letter != array('A', 'E', 'I', 'O', 'U')){
//           $highLight = "consonant"};
//
//
//        if ($vowel == "Y") {
//            $highLight = "vowel";
//        }
//        elseif ($vowel == "N") {
//            $highLight = "consonant";
//        }


        echo "<div class='abc  $highLight '>$letter<sub class='other'>$letter_low</sub> </div>";
    }
    ?>
</div>
</body>
</html>