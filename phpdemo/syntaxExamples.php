<?php

$notPI = 3.14;
$num = 3;

$bool = true;
$bool2 = false;

$fruit = "banana";
$nl = "\n<br>\n";

if($notPI > 4) {
    echo "definitely not PI";
} else if($fruit == "banana") {
    echo "I'm a banana";
} else {
    echo "everybody dance";
}

echo $nl;

$num = 5;
while($num > 0) {
    echo $num . "...";
    $num--;
    //$num -= 1;
    //$num = $num-1;
}

echo $nl;

//prints only the even numbers
for ($i = 1; $i < 12; $i++) {
    if ($i % 2 == 0) {
        echo $i . $nl;
    }
}

//calling a function
echo print_and_sum(7);
echo "<br>";
print_and_sum(13);


function print_and_sum($top_number) {

    $nl = "\n<br>\n";
    $sum = 0;
    for ($i = 1; $i < $top_number; $i++) {
        echo $i . $nl;
        $sum = $sum + $i;
    }
    return $sum;
}


