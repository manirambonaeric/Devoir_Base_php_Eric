<?php
// les variables
$t=2;
$p=4;
function somme($t,$p)
{
    $a=$t;
    $b=$p;
    $r=$t+$p;
    echo '<h2>'.'1)La somme de a et b est: ' .$r . '</h2>';
}
somme(2,4);

// Pour les booleens 
 
$i=5;

if ( $i<=10) {
   $c=true;
    echo '<h2>'.'2)Le chiffre tape est inferieur a 10'. '</h2>';
}
else
{
  $c=false;
    echo '<h2>'.'2)Le chiffre tape est superieur a 10'. '</h2>';

  } 


  // la condition if.... else
$t=25;
$a=5;

if($t==25)
{
    echo '<h2>'.'3)Le nombre tape est le carre de ' . $a;
}
else


    if($t!=25)
    {
        echo '<h2>'.'3)Le nombre tape n\'est pas le carre de ' .$a. '</h2>';
    }
    
 





?>