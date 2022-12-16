<?php
echo "<h1>Wellcome to PHP</h1>";
echo "<h2>Question 1 part(1)</h2>";
echo "your Email is: ";
echo $_POST["email"];
echo "<br><br>";
echo "Your password is: ";
echo $_POST["pass"]; ?>

<?php
echo "<br><h1>Question 1 part(2)</h1><br>";
$emailErr = $_POST["email"];
$passErr = $_POST["pass"];
//part1
if ($emailErr == "" || $passErr == "") {

    echo "Email And  password is  required";
    echo "<br>";
} else {
    echo "confirm your Email and password";
}
?>
<br>

<?php
echo "<br>";
echo "<h1>Question 2</h1><br>";
echo " Radio button :";
echo $_POST["rad"];
?>
<br<br>

    <br><br>
    <?php
    echo "<h1>Question 3</h1><br>";
    if (isset($_POST['option'])) {
        echo "Option successfully true";
    } else {
        echo "Option  is false";
    }

    ?>

    <br><br>

    <?php
    echo "<h1>Question 4</h1>";
    echo "<br>sort Array<br>";
    function sortarray($arr, $string)
    {
        if ($string == "ASC") {
            sort($arr);
        } elseif ($string == "DSC") {
            rsort($arr);
        } else {
            sort($arr);
        }
        $arrlength = count($arr);
        for ($x = 0; $x < $arrlength; $x++) {
            echo $arr[$x];
            echo ",";
        }
    }
    $number = array("l", "a", "i", "b", "a");
    sortarray($number, "");
    echo "<br>";
    echo "<h1>Question 5</h1>";
    if ($_POST["rad"] == 'Female') {
        $random_array = range(0, 100);
        shuffle($random_array);
        echo "<strong>Random number array</strong><br>";
        foreach ($random_array as $val1) {
            echo "$val1";
        }
        echo "<br><strong>sort array</strong><br>";
        sortarray($random_array, "");
    } else {
        echo "you have selected wrong option<br>";
    }

    echo "<br>";
    echo "<h1>Question 6</h1>";
    if ($_POST["rad"] == 'Male') {
        $random_array = range(0, 100);
        shuffle($random_array);
        echo "<strong>Random number array</strong><br>";
        foreach ($random_array as $k =>  $val) {
            echo "$k=>  $val";
        }
        echo "<br><strong>sort array</strong><br>";
        sortarray($random_array, "");
    } else {
        echo "you have selected wrong option<br>";
    }
    ?>