<?php

echo "Welcome to multi dimensional arrays in php <br>";

// Creating a 2 dimensional array
$multiDim = array(
    array(2, 5, 7, 8),
    array(1, 2, 3, 1),
    array(4, 5, 0, 1)
);


// echo var_dump($multiDim);
// echo $multiDim[1][2];

// Printing the contents of a 2 dimensional array

// for ($i=0; $i < count($multiDim); $i++) { 
//     echo var_dump($multiDim[$i]);
//     echo "<br>";
// }

for ($i = 0; $i < count($multiDim); $i++) {
    for ($j = 0; $j < count($multiDim[$i]); $j++) {
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}
echo "<br>";


$A3D = array(
    array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9)),
    array(array(10, 11, 12), array(13, 14, 15), array(16, 17, 18)),
    array(array(20, 21, 22), array(23, 24, 25), array(26, 27, 28))
);

for ($i=0; $i < count($A3D); $i++) { 
    for ($j=0; $j < count($A3D[$i]); $j++) { 
        for ($k=0; $k < count($A3D[$i][$j]); $k++) { 
            echo $A3D[$i][$j][$k];
            echo " ";
        }
        echo "<br>";
    }
    echo "<br>";
}
