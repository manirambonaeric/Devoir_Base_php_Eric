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

// Pour les booleens :Tester la vrai valeur
 
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


  // la condition if.... else : pour tester si la la condition est bien remplie
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
    
 
//la condition switch...case  
$n=3;
switch($n) // on teste en suivant la valeur qu'on a
{
    case 1: //dans le cas ou $n vaut 1
    echo '<h2>'.' 4)Le chiffre tape est un chiffre premier'.'</h2>';
    break;
    case 2://dans le cas ou $n vaut 2
    echo '<h2>'.'4)Le chiffre tape est un chiffre paire'.'</h2>';
    break;
    case 3;//dans le cas ou $n vaut 3
    echo '<h2>'.'4)Le chiffre tape est un chiffre premier'.'</h2>';
    break;
    case 4://dans le cas ou $n vaut 4
    echo '<h2>'.'4)Le chiffre tape est un chiffre paire'.'</h2>';
    break;
    case 5://dans le cas ou $n vaut 5
    echo '<h2>'.'4)Le chiffre tape est un chiffre premier'.'</h2>';
    break;
    
    default: //sinon le cas n'exite pas
    echo '<h2>'.'4)Ce chiffre n\'appartient pas parmi les premiers cinq  chiffres entiers naturels '.'</h2>' ;
}


// Pour la boucle for 
$eleve; //1    //2        //3
for($eleve=2;$eleve<=10;$eleve++) //1: initialisation 2:condition 3:incrementation
{
    echo '<h2>'.'5)Voila le '. $eleve .'è eleve de notre classe </br>'.'</h2>';
}




?>