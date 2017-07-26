<?php
$result = '';
for($i=1;$i<=100;$i++){
    if(!($i%3)){
        $result .= 'm';
    }
    $result .= $i . "\n";
}
$result = preg_replace("/m\d*(0|5)\n/", "Linianos\n", $result);
$result = preg_replace("/\d*(0|5)\n/", "IT\n", $result);
$result = preg_replace("/m\d+\n/", "Linio\n", $result);
echo $result;
?>
