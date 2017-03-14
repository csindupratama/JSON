<?php
$json_data=file_get_contents("data_mhs.json");
$obj = json_decode($json_data);
echo "NIM : "; echo $obj->nim;
echo "<br>";
echo "NAMA: "; echo $obj->nama;
echo "<br>";
echo "ALAMAT: ";echo $obj->alamat;
echo "<br>";
echo "HP: ";echo $obj->hp;
echo "<br>";
echo "MAKUL 1: ";echo $obj->matkul[0];
echo "<br>";
echo "MAKUL 2: ";echo $obj->matkul[1];
echo "<br>";
echo "MAKUL 3: ";echo $obj->matkul[2];
?>