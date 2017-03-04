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
    include "function-library.php";

    $range = getOption("abccount","27");
    $mark = getOption("mark","");
    $vowel = getOption("vowel","Y");


    for ($i = 0; $i < $range - 1; $i++) {
        $letter = chr($i + 65);
        $highLight = "";

        $lower = strtolower($letter);

        if ($mark == $letter) {
            $highLight = "markCell";
        }
        $vowelClass = "";
        if(isVowel($letter) == true){
            $vowelClass = "vowel";
        }

        echo "<div class='abc  $highLight $vowelClass'>$letter<sub class='other'>$lower</sub> </div>";
    }
    ?>
</div>
</body>
</html>