<?php
echo "Welcome Anda Memasuki Games Felix/n";
while(true) {
    echo "====== Game Tebak Angka ======/n";
echo "Tebak sebuah angka antara 1 dan 9!/n";
$computer = rand(1,9);
echo "Masukin Tebakanmu : ";
$player = trim(fgetc(STDIN));
if ($player == $computer) {
 echo "Menang. Angka komputer adalah $computer./n";
 exit;
}else{
    echo "Kalahdeh.Angka komputer adalah $computer./n";
}
}



