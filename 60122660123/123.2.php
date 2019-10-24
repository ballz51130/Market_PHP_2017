<?php
function Areatriangle($width, $height){
$area = 0.5*($width*$height);
echo "Areatriangle : ".$area."<br>";
echo "<br>";
}
$u= 50;
$t = 10;
Areatriangle($width=$u, $height=$t);



function Circle($j)
{
$area = 3.14*($j*$j);
echo "AreaCircle : ".$area ;
echo "<br><br>";
}
$l = 11 ;
Circle($l);




function multiplication($o){

for ($i=1;$i<13;$i++)
{
$x = $i*$o;
echo $o."x".$i." : ".$x."<br>";
}
}
 $b = 4 ;
multiplication($b);

echo "<br>";



function gard($x)
{
	if(($x<0)||($x>100))
{
	echo "ERROR";
}

 else if ($x>=80)
 {
 	print "Grand A";
 }
 else if($x>=70)
 {
 	echo "Grand B";
 }
 else if ($x>=60)
 {
 	print "Grand C";
 }
 else if ($x>=50)
 {
 	echo "Garnd D";
 }
 else
 {
 	print"Garnd F";
 }
}
 $y = 50;
 gard($y);
 



?> 