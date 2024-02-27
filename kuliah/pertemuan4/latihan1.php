<?php 

echo date("d") . "<br>";
echo date("l, j F Y ") . "<br>";
echo time() ."<br>";
echo time() + 86400 ."<br>";
echo date("l", time() + 60 * 60 * 24 * 100)  ."<br>";
echo mktime(0,0,0,2,27,2024) ."<br>";
echo date("l", mktime(0,0,0,5,24,2005))  ."<br>";