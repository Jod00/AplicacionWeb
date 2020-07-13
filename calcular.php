<?php 
$cantidad = $_POST['cantidad'];
$subtotal = $cantidad*125;
$numero_cajas = ceil($cantidad/4);
$flete = $numero_cajas*50;
if ($cantidad>1000)
    $descuento=$subtotal*0.15;
else
{
    if($cantidad>100)
        $descuento=$subtotal*0.05;
    else
        $descuento=0;
}
$total=$subtotal+$flete-$descuento;
echo "El precio total a pagar es: ".$total."<br>";
echo "El monto por flete es: ".$flete."<br>";
echo "El descuento aplicado fue: ".$descuento;
?>
