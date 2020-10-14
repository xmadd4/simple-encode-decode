<?php
$green = "\033[92m";
$red = "\033[91m";
$cyan = "\033[36m";
$yellow = "\033[93m";
$bold = "\033[5m";
$white = "\033[0m";
$logo=$yellow."
+---------------------------------------------------------------+
|".$cyan."14/10/2020".$yellow."							|
|			".$green."@4.D SEC".$yellow."       			|
|		".$red."ACI-SHINIGAMI".$yellow."	        	|
+---------------------------------------------------------------+
";
print $logo;
print "|       [ 1 ] EN-CODE        |          [ 2 ] DE-CODE           |
+---------------------------------------------------------------+
";
echo "\n";
echo $bold . $yellow . "[ + ] ".$red."option : ".$cyan;
$op = trim(fgets(STDIN,1024));
echo "\n";

if($op==1){
file_put_contents('data.txt','en');
echo $bold . $yellow . "[ + ] ".$red."text : ".$cyan;
$do = trim(fgets(STDIN,1024));
echo "\n";
}elseif($op==2){
file_put_contents('data.txt','de');
echo $bold . $yellow . "[ + ] ".$red."code : ".$cyan;
$do = trim(fgets(STDIN,1024));
echo "\n";
}
$data=file_get_contents('data.txt');
if($do && $data=='de'){
print "DECODE: ".htmlspecialchars_decode(urldecode(base64_decode($do)))."/n";
unlink('data.txt');
}elseif($do && $data=='en'){
$en=htmlspecialchars(urlencode(base64_encode($do)))."/n";
print "ENCODE: ".$en."\n";
unlink('data.txt');
}
