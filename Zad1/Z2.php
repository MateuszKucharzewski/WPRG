<?php
// Napisz funkcję liczącą średnicę koła (w parametrze podajemy promień).



function diameter($r){
    if ($r<=0){
        return "Value must be greater than 0";
    }
    echo "Circle area for the radius ".$r." is: ";
    return (2*$r);
}

echo diameter(52).'<br>';
echo diameter(12).'<br>';
echo diameter(-14).'<br>';
echo diameter(76).'<br>';