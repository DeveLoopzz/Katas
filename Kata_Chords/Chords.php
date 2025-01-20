<?php


$acordes_principiante = [
    'Do',
    'Sol',
    'Re',
    'Mi menor',
    'La menor',
];

// Acordes para nivel intermedio
$acordes_intermedio = [
    'Fa',
    'Si menor',
    'Re menor',
    'Mi mayor',
    'La mayor',
];

// Acordes para nivel avanzado
$acordes_avanzado = [
    'Sol7',
    'Re7',
    'La7',
    'Si7',
    'Do# menor',
];


$practica1 = practicarAcordesPrincipiante($acordes_principiante);

echo $practica1;


function practicarAcordesPrincipiante(array $acordes_principiante) 
{
    $contador = 0;
    $contadormax = 10;

    do 
    {
        foreach($acordes_principiante as $acorde)
        {
            echo $acorde . PHP_EOL; 
            sleep(3);
        }
        $contador++;
    } while($contador < $contadormax);
}

function practicarAcordesIntermedio(array $acordes_intermedio)
{
    $contador = 0;
    $contadormax = 10;

    do 
    {
        foreach($acordes_intermedio as $acorde)
        {
            echo $acorde . PHP_EOL; 
            sleep(3);
        }
        $contador++;
    } while($contador < $contadormax);
}

function practicarAcordesAvanzado(array $acordes_avanzado) 
{
    $contador = 0;
    $contadormax = 10;

    do 
    {
        foreach($acordes_avanzado as $acorde)
        {
            echo $acorde . PHP_EOL; 
            sleep(3);
        }
        $contador++;
    } while($contador < $contadormax);
}