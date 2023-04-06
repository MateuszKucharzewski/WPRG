<?php
// Napisz funkcję liczącą średnicę koła (w parametrze podajemy promień).



function diameter($r){
    if ($r<=0){
        return "Value must be greater than 0";
    }
    echo "Circle area for the radius ".$r." is: ";
    return (2*$r);
}

echo diameter(17).'<br>';
echo diameter(28).'<br>';
echo diameter(-3).'<br>';
echo diameter(68).'<br>';