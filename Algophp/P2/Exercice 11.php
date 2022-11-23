<h1> Exercice 11 <h1>

<?php


$date = '23/02/2018';
$dt = DateTime::createFromFormat('d/m/Y', $date);


switch ($dt->format('D')) {
    case 'Mon':
        echo "Lundi";
        break;
    case 'Tue':
        echo "Mardi";
        break;
    case 'Wed':
        echo "Mercredi";
        break;
    case 'Thu':
        echo "Jeudi";
        break;    
    case 'Fri':
        echo "Vendredi";
        break;
    case 'Sat':
        echo "Samedi";
        break;
    case 'Sun':
        echo "Dimanche";
        break;

}

echo $dt->format(' d ');

switch ($dt->format('m')) {
    case '01':
        echo "Janvier";
        break;
    case '02':
        echo "Férvier";
        break;
    case '03':
        echo "Mars";
        break;
    case '04':
        echo "Avril";
        break;    
    case '05':
        echo "Mai";
        break;
    case '06':
        echo "Juin";
        break;
    case '07':
        echo "Jullet";
        break;
    case '08':
        echo "Août";
        break;
    case '09':
        echo "Septembre";
        break;
    case '10':
        echo "Octobre";
        break;
    case '11':
        echo "Novembre";
        break;    
    case '12':
        echo "Decembre";
        break;
}


echo $dt->format(' Y');




?>