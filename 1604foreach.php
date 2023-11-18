<?php
//digunakan pada array
$oshi = array("Freya", "Michie", "Marsha", "ella", "Indira", "Flora");
sort($oshi);
foreach ($oshi as $o => $value) {
    echo $o+1 . ". $value <br>";
}
?>
