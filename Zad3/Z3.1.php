<?php
/*
 * Napisz funkcję, zwracającą maksymalny element tablicy losowych liczb
 * (bez używaniagotowych funkcji PHP) w 4 wersjach: for, while, do while, foreach.
 */

function zmien(){

    for ($i=0;$i<=10;$i++)
        {

          $tabf[$i]=rand(1,20);

        }
        print_r($tabf);
    echo "<br>";
    // --------------------------------------------For------------------------------------------------
             $max=$tabf[0];

    for ($i=0;$i<count($tabf);$i++)
    {

            if($max<$tabf[$i])
            {

                 $max = $tabf[$i];

            }
    }
    echo "for: ";
    echo $max."<br>";

    //------------------------------------While-----------------------------------------------------
    $i=0;

    $max=$tabf[0];

    while($i<count($tabf)){

        if($max<$tabf[$i])
        {

        $max = $tabf[$i];

    }

        $i++;
    }
        echo "while: ";
        echo $max."<br>";
    //------------------------------------------do-while--------------------------------------------------
    $max=$tabf[0];
    $i=0;

    do{

        if($max<$tabf[$i])
        {

        $max = $tabf[$i];


        }

        $i++;

    }while($i<count($tabf));

    echo "do while: ";
    echo $max."<br>";

    //---------------------------------------------------Foreach------------------------------------------

    $max = $tabf[0];

    foreach ($tabf as $i){

        if($max<$i)
        {

        $max = $i;

    }

    }
    echo "Foreach: ";
    echo $max."<br>";

}

zmien();